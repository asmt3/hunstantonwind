
	jQuery.fn.rotate = function(degrees) {
	    $(this).css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
	                 '-moz-transform' : 'rotate('+ degrees +'deg)',
	                 '-ms-transform' : 'rotate('+ degrees +'deg)',
	                 'transform' : 'rotate('+ degrees +'deg)'});
	    return $(this);
	};


	var getLast = function() {
		$.post('/measurements/get_last', {}, function(res){

			$('#speed').html(res.speed + 'kts');
			$('#direction').html(res.compass + ' (' + res.direction + '&deg;)');
			$('#measurement-date').html(res.date);
			$('#arrow').show().rotate(res.direction + 90);

		})
	}

	$(function(){
		setInterval(getLast, 4000);
		getLast();	
	})