$(function() {
	var div = $('<div id="bardump"></div>');

	div.css({
		'position' : 'fixed',
		'z-index' : '1000000',
		// 'display' : 'none',
		'width' : $(window).width(),
		'height' : $(window).height(),
		'left' : 0,
		'top' : 0,
		'background-color' : 'white',
		color : '#000',
	// 'font-size':'12pt',
	// 'font-family':'Times'
	});

	$('body').append(div);

	var header = $('<div></div>').css({
		'border' : '1px black',
		'border-style' : 'none none solid none',
		padding : '10px',
		'background' : '#f57900',
		'font-weight' : 'bold'
	});
	header.text('bar_dump: collects PHP dumps and errors to console');

	header.appendTo(div);

	var frame = $('<div></div>');
	frame.css({
		// width:$(window).width()-50,
		height : $(window).height() - 40,
		background : '#595',
		'overflow-y' : 'scroll'
	});
	frame.appendTo(div);

	function add($i) {
		var row = $('<div></div>');
		row.append($i);
		row.css({
			border : 'solid #595 5px',//0c9
			//padding:'5px',
			height : '30px',
			overflow : 'hidden',
			background : '#ff6',
			cursor : 'pointer',
			padding:'5px'
		});
		row.click(function() {
			var height = $(this).css('height');
			console.log(height);
			if (height == '30px') {
				$(this).css('height', 'auto');
			} else {
				$(this).css('height', '30px');
			}
		});
		frame.prepend(row);
	}

	$(window).resize(function() {
		div.css({
			'width' : $(window).width(),
			'height' : $(window).height()
		});
		frame.css({
			'height' : $(window).height() - 40
		});
	});

	$(document).bind('keydown', {
		pointer : this
	}, function(e) {
		var key = e.charCode || e.keyCode;
		if (e.altKey && key == 192) {
			div.toggle();
		}
	});

	$('.xdebug-var-dump,.xdebug-error').each(function(i, item) {
		var d = $(item).clone();
		$(item).remove();
		add(d);
	});

});