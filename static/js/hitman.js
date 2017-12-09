$.fn.hitman = function(options = {}) {
 	
    var default_options = {
        trigger: 'bottom',
        count: 1,
        anchor: 'middle',
        before: function(){},
        after: function(){}
    };

    options = options || {};
    
    for (var opt in default_options)
        if (default_options.hasOwnProperty(opt) && !options.hasOwnProperty(opt))
            options[opt] = default_options[opt];

 	var item = this;

	var maxCount = options.count || 1; 
	var count = 0;

	options.before();
	scrolled();

	function scrolled() {
		// middle
		var anchor;

		if (options.anchor == "top") { anchor = 0 } 
		else if (options.anchor == "middle") { anchor = $(item).height() * 0.38 } 
		else if (options.anchor == "bottom") { anchor = $(item).height() }

		const scrollPos = $(document).scrollTop();
		const itemOffset = $(item).offset().top + anchor;
		const windowHeight = $(window).height();
		const thresholdMet = {
			top: function() {
				return scrollPos >= itemOffset;
			}, 
			middle: function() {
				return scrollPos >= itemOffset - windowHeight/2;
			},
			bottom: function() {
				return scrollPos >= itemOffset - windowHeight;
			},
		};


		if (count < maxCount) {
			if (thresholdMet[options.trigger]()) {
				options.after();
				count++;
			}
		}
	}

	$(document).scroll(function() {
		scrolled();
	})

    return this;


}