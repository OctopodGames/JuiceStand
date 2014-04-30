$( function() {
	game = {
		count: 0
	};

	game.init = function() {
		game.clock_reset();
		game.clock.interval = window.setInterval( game.clock_update, game.clock.delay );

		setInterval( game.update, 1000 );
	};

	game.update = function( ) {
		game.count++;

		$('#account p').html( '$' + game.count );
	}

	game.clock_reset = function() {
		game.clock = {
			hour: 8,
			minute: 0,
			meridiem: 'AM',
			pad: '00', // use to build minute padding
			delay: 500,
			count: 0, // incremented on each clock update
			speed: 2, // how many clock updates before incrementing the clock
			increment: 1 // how many minutes to increment on each tick
		};
	};

	game.clock_update = function() {
		// flash the #separator
		// update #hour, #minute, #meridiem
	};

	game.clock_padded_minute = function() {
		var minute_string = "" + game.clock.minute;
		return game.clock.pad.substring( 0, game.clock.pad.length - minute_string.length ) + minute_string;
	};

	game.init();
});