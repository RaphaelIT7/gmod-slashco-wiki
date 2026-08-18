self.addEventListener('install', event => {
	self.skipWaiting();
});

self.addEventListener('activate', event => {
	event.waitUntil(clients.claim());
});

function openDB() {
	return new Promise((resolve, reject) => {
		const request = indexedDB.open('wikiCache', 1);
		request.onupgradeneeded = e => {
			const db = e.target.result;
			if (!db.objectStoreNames.contains('pages'))
				db.createObjectStore('pages', { keyPath: 'address' });
		};
		request.onsuccess = e => resolve(e.target.result);
		request.onerror = e => reject(e.target.error);
	});
}

self.addEventListener('fetch', event => {

});