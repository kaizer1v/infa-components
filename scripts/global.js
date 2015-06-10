(function($) {
	var infa = {
		documentWidth: $(document).innerWidth(),
		documentHeight: $(document).innerHeight(),
		
		windowWidth: $(window).innerWidth(),
		windowHeight: $(window).innerHeight(),
		total_computed_height: 0
	}

	$(".static, .fixed-top").each(function(k, v) {
		infa.total_computed_height += 
			$(v).height()
			+ parseInt( $(v).css("border-top-width").slice(0, -2) )
			+ parseInt( $(v).css("border-bottom-width").slice(0, -2) )
			+ parseInt( $(v).css("padding-top").slice(0, -2) )
			+ parseInt( $(v).css("padding-bottom").slice(0, -2) )
			+ parseInt( $(v).css("margin-top").slice(0, -2) )
			+ parseInt( $(v).css("margin-bottom").slice(0, -2) )
	})
	$(".scrollable").css("height", infa.windowHeight - infa.total_computed_height)
	$(".scrollable").css("overflow-y", "scroll")
})(jQuery)