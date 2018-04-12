$(document).ready( function(){
	$('header a').each( function(){
		$('header a[href="'+window.location.href+'"]').addClass('active');
	});
});