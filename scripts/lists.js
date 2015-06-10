$("#txt_search_list").keyup(function() {
	search_id = $(this).attr("search_id")
	$.each( $("#"+search_id).children("li") )
});