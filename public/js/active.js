document.addEventListener('DOMContentLoaded', function () {
	let link = document.querySelector('header a[href="'+window.location.href+'"]');
	console.log('header a[href="'+window.location.href+'"]');
	link.classList.add('active');
});
