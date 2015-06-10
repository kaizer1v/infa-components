(function($) {
	function getMaxOfArray(numArray) {
	    return Math.max.apply(null, numArray);
	}

	var heights = []

	$.each($(".panel-content"), function(k, v) {
		heights.push($(v).height())
	})

	$(".panel-content").css("height", getMaxOfArray(heights))
	$(".panel .panel-content").hide()
	$(".panel.active .panel-content").show()

	$(document).on("click", $(".panel-title").closest("table"), function(event) {
		$(this).closest(".panel-group").children(".panel").removeClass("active")
		$(this).parent().addClass("active")
		
		$(".panel .panel-content").hide()
		$(".panel.active .panel-content").show()
	})
})(jQuery);