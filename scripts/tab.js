$(document).on("click", ".tabs > li > a", function(e) {
// $(".tabs > li").on("click", "> a", function(e) {
	e.preventDefault()
	selected = $(this).attr("href")

	$(this).parent().siblings().removeClass("active")
	$(this).parent().addClass("active")

	$(this).closest(".tabs").next(".tabs-content").children().removeClass("active")
	$(this).closest(".tabs").next(".tabs-content").children(selected).addClass("active")
});