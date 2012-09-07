$(function() {

	/*
	 * $('pre.xdebug-var-dump,table.xdebug-error').each(function(i,item){
	 * 
	 * alert($(this).text());
	 * 
	 * $(this).remove();
	 * 
	 * $('sdf').dialog();
	 * 
	 * });
	 */

	var div = $('<div></div>');

	div.css({
		'position' : 'fixed',
		'z-index' : '1000000',
		'display' : 'none'

		,
		'width' : $(window).width(),
		'height' : $(window).height(),
		'left' : 0,
		'top' : 0,
		'background-color' : 'white'
	});

	$('body').append(div);

	$(document).bind('keydown', {

		pointer : this

	}, function(e) {

		var key = e.charCode || e.keyCode;

		if (e.altKey && key == 192) {

			div.toggle();

		}

	});

});