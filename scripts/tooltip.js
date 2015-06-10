(function($) {

	$.fn.tooltip = function(options) {
		var defaults = {
			background: '#e3e3e3',
			color: '#000',
			rounded: 'false',
			width: 'auto'
		},
		settings = $.extend({}, defaults, options);
		
		this.each(function() {
			var $this = $(this),
					title = this.title;
			if($this.is('a') /*&& this.attr('title') !== ''*/) {
				this.title = 'sample';
				$this.hover(function(e) {
					e.preventDefault();
					$('<div id="tooltip" />')
						.appendTo('body')
						.text(title)
						.css({
							backgroundColor: settings.background,
							color: settings.color,
							top: e.pageY + 10,
							left: e.pageX + 20,
							background: '#e3e3e3',
							border: '1px solid #BFBFBF',
							'float': 'left',
							'font-size': '12px',
							'max-width': '160px',
							padding: '1em 1em 1em 3em',
							position: 'absolute'
						})
						.fadeIn(1000);
						
					if(defaults.rounded === true) $('#tooltip').addClass('rounded');
				}, function(e) {
					$('#tooltip').remove();
				});
			}
		
			$this.mousemove(function(e) {
				$('#tooltip').css({
					top: e.pageY + 10,
					left: e.pageX + 20
				});
			});

			return this;
		});
	}

})(jQuery);