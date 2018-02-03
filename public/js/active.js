$(document).ready( function(){
	$('.links>a').each( function(){
		$('.links>a[href="'+window.location.href+'"]').addClass('active');
		console.log(window.location.href);
	});
});