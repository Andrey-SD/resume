$(document).ready( function(){
	$('.links>a').each( function(){
		$('.links>a[href="'+window.location.pathname+'"]').addClass('active');
		$('.links>a[href="http://resume/index.php"]').addClass('active');
		console.log(window.location.pathname);
	});
});