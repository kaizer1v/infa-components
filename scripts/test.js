options = {
	tabs: [
		{
			title: 'First',
			content: 'content for tab 1'//html
		},
		{
			title: '2nd',
			content: 'hello world!'//html
		},
		{
			title: 'Last',
			content: 'something else here...'//html
		}
	]
}

$.fn.tabs = function(id, options) {
	$('#'+ id).append(tabs);
	return true;
};