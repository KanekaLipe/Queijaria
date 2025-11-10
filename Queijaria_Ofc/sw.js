// Service Worker melhorado para PWA (precaching + runtime caching + fallback offline)
const CACHE_NAME = 'queijaria-v1';
const PRECACHE_URLS = [
    '/Queijaria_Ofc/index.php',
    '/Queijaria_Ofc/style.css',
    '/Queijaria_Ofc/Manifest.json',
    '/Queijaria_Ofc/img/queijo.png',

];

self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(cache => {
            return cache.addAll(PRECACHE_URLS);
        }).then(() => self.skipWaiting())
    );
});

self.addEventListener('activate', event => {
    // Limpar caches antigos
    event.waitUntil(
        caches.keys().then(keys =>
            Promise.all(
                keys.filter(key => key !== CACHE_NAME).map(key => caches.delete(key))
            )
        ).then(() => self.clients.claim())
    );
});

self.addEventListener('fetch', event => {
    const request = event.request;

    // Para navegações (páginas), tentar a rede primeiro e cair para cache/offline
    if (request.mode === 'navigate') {
        event.respondWith(
            fetch(request)
                .then(resp => {
                    // atualiza cache com a resposta da navegação
                    const copy = resp.clone();
                    caches.open(CACHE_NAME).then(cache => cache.put(request, copy));
                    return resp;
                })
                .catch(() => caches.match('/Queijaria_Ofc/offline.html'))
        );
        return;
    }

    // Para recursos same-origin: cache-first, mas atualiza em segundo plano
    event.respondWith(
        caches.match(request).then(cached => {
            if (cached) {
                // também tenta atualizar o cache em background
                fetch(request).then(resp => {
                    // só cacheia respostas válidas same-origin
                    if (resp && resp.status === 200 && resp.type === 'basic') {
                        caches.open(CACHE_NAME).then(cache => cache.put(request, resp.clone()));
                    }
                }).catch(() => { });
                return cached;
            }
            return fetch(request).then(networkResponse => {
                // salva no cache se for recurso same-origin
                if (networkResponse && networkResponse.status === 200 && networkResponse.type === 'basic') {
                    caches.open(CACHE_NAME).then(cache => cache.put(request, networkResponse.clone()));
                }
                return networkResponse;
            }).catch(() => {
                // fallback para imagens/cors se desejar: poderia retornar uma imagem placeholder
                if (request.destination === 'image') {
                    return caches.match('/Queijaria_Ofc/img/queijo.png');
                }
            });
        })
    );
});