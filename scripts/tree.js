$(document).ready(function() {
	$.each($(".tree > ul a"), function(k, v) {
		if(hasChildren(v)) {
			$(v).prepend("<i class='icon icon-arrow-open'></i>")
		}
	})
})
$(document).on("click", ".tree > ul a", function() {
	var $this = $(this);
	$this.next("ul").slideToggle();
	
	$this.children("i.icon").toggleClass("icon-arrow-open");
	$this.children("i.icon").toggleClass("icon-arrow-closed");
});

function hasChildren(elem) {
	return $(elem).next().is("ul") ? true : false;
}