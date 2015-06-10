$(".task-row td input[type=search]").keyup(function() {
	_this = this;
	$this = $(this);
	index = $this.parent().index()
	tbody = $(".task-row").parent().next("tbody")

	searchText = $this.val().toLowerCase()
	
	$.each($(tbody).children("tr"), function(k, v) {
		if( $($(v).children("td")[index]).text().replace(/(<([^>]+)>)/ig , "").trim().toLowerCase().indexOf(searchText) ==  -1 )
			$(this).hide()
		else
			$(this).show()
	})
});

// Searching through Date type field
// $(".task-row td input[type=date]").on("change", function() {
	// selectedDate = typeof $(this).val().split("-")
// });

// Searching through dropdown


/* Table Sorting */
function TableSort(id) {
	this.tbl = document.getElementById(id)
	this.lastSortedTh = null
	
	if(this.tbl && this.tbl.nodeName == "TABLE") {
		var headings = this.tbl.tHead.rows[0].cells
		for(var i=0; headings[i]; i++) {
			if(headings[i].className.match(/asc|dsc/)) {
				this.lastSortedTh = headings[i]
			}
		}
		this.makeSortable()
	}
}

TableSort.prototype.makeSortable = function() {
	var headings = this.tbl.tHead.rows[0].cells;
	
	for(var i=0; headings[i]; i++) {
		headings[i].cIdx = i
		var a = document.createElement("a")
		a.href = "#"
		a.innerHTML = headings[i].innerHTML
		a.style.color = "#000"
		a.style.fontWeight = "bold"
		
		a.onclick = function(that) {
			return function() {
				that.sortCol(this)
				return false;
			}
		}(this)
		
		headings[i].innerHTML = "";
		headings[i].appendChild(a)
	}
}
var temp = new TableSort("myTable")

TableSort.prototype.sortCol = function(el) {
	var rows = this.tbl.rows
	var bodyRows = this.tbl.tBodies[0].rows
	var alpha = [], aIdx = 0
	var numeric = [], nIdx = 0
	var th = el.parentNode
	var cellIndex = th.cIdx
	
	// run through evey cell and strip out all tags and unwanted text
	for(var i=0; bodyRows[i]; i++) {
		var cell = bodyRows[i].cells[cellIndex];
		var content = cell.textContent ? cell.textContent : cell.innerText

		// while saperating out, indentify whether it is a numeric value or an alphanumeric.
		//	and add to respective array numeric[] or alpha[]
		var num = content.replace(/(\$|\,|\s)/g, "")
		if(parseFloat(num) == num) {
			numeric[nIdx++] = {
				value: Number(num),
				rows: rows[i]
			}
		} else {
			alpha[aIdx++] = {
				value: content,
				rows: rows[i]
			}
		}

	}
	
	/*
	var col = [], top, bottom;
	if(th.className.match("asc")) {
		top = bubblesort(alpha, -1)
		bottom = bubblesort(numeric, -1)
		th.className = th.className.replace(/asc/, "dsc")
	} else {
		top = bubblesort(numeric, 1)
		bottom = bubblesort(alpha, 1)
		
		if(th.className.match("dsc")) {
			th.className = th.className.replace(/dsc/, "asc")
		} else {
			th.className += "asc"
		}
	}

	if(this.lastSortedTh && th != this.lastSortedTh) {
		this.lastSortedTh.className = this.lastSortedTh.className.replace(/dsc|asc/g, "")
	}
	this.lastSortedTh = th;


	col = top.concat(bottom);
	var tBody = this.tbl.tBodies[0];
	console.log(tBody)
	for(var i=0; col[i]; i++) {
		tBody.appendChild(col[i].rows)
	}
	*/
	
} // END sortCol



// dir = true => ascending
// dir = false => descending
function bubblesort(arr, dir) {
	var start, end, num_arr = [], unsorted = true;
	
	if(dir === 1) {
		start = 0;
		end = arr.length
	} else if(dir === -1) {
		start = arr.length - 1
		end = -1
	}

	while(unsorted) {
		unsorted = false;
		
		for(var i=start; i!=end; i=i+dir) {
			if(arr[i+dir] && arr[i].value > arr[i+dir].value) {
				// swap
				temp = arr[i]
				arr[i] = arr[i+dir]
				arr[i+dir] = temp
				unsorted = true;
			}
		}
	}
	
	return arr;
}

var num_arr = []
function customSort(arr, dir) {
	arr.forEach(function(k, v) {
		if(typeof k.value == "number") {
			num_arr.push(arr[v])
			arr.splice(v, 1)
		}
	})
	
	if(dir === 1) {
		r = bubblesort(num_arr, dir).concat(bubblesort(arr, dir))
	} else if(dir === -1) {
		r = bubblesort(arr, dir).concat(bubblesort(num_arr, dir))
	}
	
	return r
}


myArr = [
	{
		rows: 0,
		value: "91abc",
	},
	{
		rows: 1,
		value: ".zxy",
	},
	{
		rows: 5,
		value: "acbd",
	},
	{
		rows: 2,
		value: "zxy"
	},
	{
		rows: 3,
		value: "678",
	},
	{
		rows: 4,
		value: "account"
	},
	{
		rows: 5,
		value: ".678"
	},
]


// console.log(customSort(myArr, 1))