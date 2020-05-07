(function(doc) {
	'use strict';

	var images = doc.querySelectorAll('img');
	console.log(images);

	Array.prototype.forEach.call(images, function(item) {
		return item.outerHTML += php_vars.home;
	})



})(document);


