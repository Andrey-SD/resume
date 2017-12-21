$(document).ready( function(){
	$('.links>a').each( function(){
		$('a[href="'+window.location.pathname+'"]').addClass('active');
	});
});