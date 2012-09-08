/**
 * war_dump: web-console for PHP var_dumps and errors
 * 
 * @link https://github.com/ptrofimov/war_dump
 * @author Petr Trofimov <petrofimov@yandex.ru>
 */
$(function() {

	var header = $('<div></div>').css({
		'border' : '1px black',
		'border-style' : 'none none solid none',
		'padding' : '10px',
		'background' : '#f57900',
		'font-weight' : 'bold'
	}).text('war_dump: web-console for PHP var_dumps and errors');

	var frame = $('<div></div>').css({
		'height' : $(window).height() - 40,
		'background' : '#595',
		'overflow-y' : 'scroll'
	});

	$('<div></div>').css({
		'position' : 'fixed',
		'z-index' : '1000000',
		'display' : 'none',
		'width' : $(window).width(),
		'height' : $(window).height(),
		'left' : 0,
		'top' : 0,
		'background-color' : 'white',
		color : '#000'
	}).append(header).append(frame).appendTo('body');

	function add($i) {
		var row = $('<div></div>').append($i).css({
			border : 'solid #595 5px',
			height : '30px',
			overflow : 'hidden',
			background : '#ff6',
			cursor : 'pointer',
			padding : '5px'
		}).click(function() {
			var height = $(this).css('height');
			if (height == '30px') {
				$(this).css('height', 'auto');
			} else {
				$(this).css('height', '30px');
			}
		}).prependTo(frame);
	}

	$(window).resize(function() {
		frame.parent().css({
			'width' : $(window).width(),
			'height' : $(window).height()
		});
		frame.css({
			'height' : $(window).height() - 40
		});
	});

	$(document).bind('keydown', function(e) {
		var key = e.charCode || e.keyCode;
		if (e.altKey && key == 192) {
			frame.parent().toggle();
		}
	});

	$('.xdebug-var-dump,.xdebug-error').each(function(i, item) {
		var $item = $(item).clone();
		$(item).remove();
		add($item);
	});

});