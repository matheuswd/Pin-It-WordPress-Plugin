(function(win, doc) {
	'use strict';

	const images = doc.querySelectorAll('.pinit');
	// const postThumbnails = doc.querySelectorAll('.post-thumbnail');

	// const all = Array.prototype.concat.call(images, postThumbnails);

	// console.log(all);
	Array.prototype.forEach.call(images, function(item) {
		item.outerHTML = `<a class="lpib-pinit" data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url=${win.location.href}&media=${item.src}&description=So%20delicious!" data-pin-height="24"></a>` + item.outerHTML;
		return item.outerHTML;
	})

})(window, document);
