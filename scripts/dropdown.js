dd = $(".dropdown")

widthNow = $(document).innerWidth()

dd.on("mouseenter", ".dropdown-link", function(e) {
	$(this).next(".dropdown-menu").show()
	$(this).next(".dropdown-menu").on({
		"mouseenter": function() { $(this).show() },
		"mouseleave": function() { $(this).hide() }
	})
	
}).on("mouseleave", ".dropdown-link", function(e) {
	$(this).next(".dropdown-menu").hide()
})

dd.on("mouseenter", ".has-submenu", function(e) {
	$(this).find(".submenu").show().css({
		"margin-left": "190px",
		"margin-top": "-20px"
	});

})

$(".has-submenu").on("mouseleave", function(e) {
	$(this).find(".submenu").hide();
})