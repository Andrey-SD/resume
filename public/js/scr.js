$("textarea").each(function () {
	if (this.scrollHeight > this.clientHeight) {
		$(this).css("box-shadow", "inset 0 -2em 3em -2em #575555");
	}
});

$("textarea").on('scroll', function () {
	if ((this.scrollHeight - Math.ceil(this.scrollTop)) <= this.clientHeight) {
		$(this).css("box-shadow", "none");
	} else {
		$(this).css("box-shadow", "inset 0 -2em 3em -2em #575555");
	}
});