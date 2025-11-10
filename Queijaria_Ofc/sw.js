// sw.js
const CACHE_NAME = 'v1';
const urlsToCache = [
    '/Queijaria_Ofc/index.php',
    '/Queijaria_Ofc/style.css',
    '/Queijaria_Ofc/style.css',
    '/Queijaria_Ofc/Manifest.json'
];

// Instalação
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => cache.addAll(urlsToCache))
    );
});

// Interceptar requisições
self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => response || fetch(event.request))
    );
});