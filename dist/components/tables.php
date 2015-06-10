<div class="sub-section" id="grid_view">
	<p>A grid view is a panel view designed to present tabular data in columns and rows. Grid views have several optional features which may be enabled or disabled as appropriate for the particular use case. These include column sorting, column resizing, column reordering, column customization, row numbering, row selection, grouping, pagination, and inline editing.</p>
	
	<div class="sub-section">
		<h2>Goals</h2>
		<p>Users need the ability to view, interact with, and edit tabular data in rows and columns.</p>
		
		<h2>Solutions</h2>
		<ul class="listitems">
			<li class="text">Typically, the columns of a grid view represent the data’s common attributes or fields and the
			   rows of a grid view represent individual records of data.</li>
			<li class="text">A row of column headers appears at the top of the grid view. Each column header contains a label
			   that describes the data in that column. If column customization and/or grouping are enabled, then rolling over a 
			   column header with the mouse will cause a menu icon to appear on its right side. Clicking this icon will open a 
			   column menu containing a list of available actions.</li>
				<li class="text">By default, the columns of a grid view should be of an appropriate width so that neither the 
				column labels nor the data are truncated but the space between columns is not excessive. 
				</li><li class="text">If either the column label or the data are truncated due to an insufficiently wide column, then 
				ellipses will appear at the end of the visible text. Rolling over a truncated column label or value will display 
			   a tooltip containing the entire value.</li>
			<li class="text">The rows of a grid view feature zebra striping to facilitate the viewing of data. Odd-numbered
			   rows are white and even-numbered rows are lightly shaded. Empty areas of the grid to the right of the last 
			   column or underneath the last row are not zebra striped. There are no visible borders between columns.</li>
			<li class="text">Horizontal and/or vertical scrollbars appear when necessary. The vertical scrollbar appears 
				underneath the row of column headers.</li>
			<li class="text">If there is no data to display in a grid, then a message view should appear in place of the grid view 
				to explain why there are no data and what the user can do about it.</li>                
			<ul class="listitems">
			<li class="listheading">Column Sorting</li>
			   <li class="text">When <strong>column sorting</strong> is enabled in a grid view, clicking a column header will 
				sort the grid data by that column in ascending order. An ascending sort icon will appear to the right of the 
				  column label. If the grid data is already sorted by that column in ascending order, then clicking the column 
				  header will sort the data in descending order. A descending sort icon will appear to the right of the column 
				  label.</li>
			</ul>
		 </ul>
		
		<div class="component">
			
			<table class="infa-table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Desc</th>
						<th>Something Else</th>
						<th>Something Else that is quite long</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Italy</td>
						<td>Capital is </td>
						<td>Lorem ipsum asdf fape a</td>
						<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
					</tr>
					<tr>
						<td>Italy</td>
						<td>Capital is </td>
						<td>Lorem ipsum asdf fape a</td>
						<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
					</tr>
					<tr>
						<td>Italy</td>
						<td>Capital is </td>
						<td>Lorem ipsum asdf fape a</td>
						<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
					</tr>
					<tr>
						<td>Italy</td>
						<td>Capital is </td>
						<td>Lorem ipsum asdf fape a</td>
						<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
					</tr>
				</tbody>
			</table>
			
		</div>
	</div>
	
	
	<div class="sub-section">
		<h2>Column Sorting</h2>
		<ul>
			<li>When column sorting is enabled in a grid view, clicking a column header will sort the grid data by that column in ascending order. An ascending sort icon will appear to the right of the column label. If the grid data is already sorted by that column in ascending order, then clicking the column header will sort the data in descending order. A descending sort icon will appear to the right of the column label.</li>
			<li class="text">If column customization and/or grouping are enabled, then users may also sort the data by a particular column by selecting the <em>Sort Ascending</em> or <em>Sort Descending</em> action from its column menu. If column sorting is disabled, then these actions do not appear in the column menus.</li>
			<li class="text">Column sorting must always take the entire set of grid rows into account, not just the subset
		  of grid rows visible on the current page. UI designers should take the processing time into account when 
		  choosing whether to enable column sorting for a particular grid view.</li>
		  <li class="text">When specified by the UI designer, column sorting should be sticky across sessions. To achieve
		  this, the user’s most recent sort order can be saved locally using a cookie.</li>
		</ul>
	</div>
	
	
	<div class="sub-section">
		<h2>Column Resizing</h2>
		<ul>
			<li class="text">When <strong>column resizing</strong> is enabled, rolling the mouse over the border between two 
			  column headers will display the horizontal resize pointer. 
		   </li>
		   <li class="text">The user may then click and drag the border in order to resize the column. While the user is 
			  dragging the border, a vertical line appears within the grid to illustrate the new position of the border when 
			  the user releases the mouse button.</li>
		</ul>
	</div>
	
	
	<div class="sub-section">
		<h2>Column Reordering</h2>
		<ul>
			<li class="text">When <strong>column reordering</strong> is enabled, users may drag a column header and drop it  at the desired location.</li>
			  column headers will display the horizontal resize pointer. 
		   </li>
		   <li class="text">While the user is dragging, a ghost column header appears under the mouse pointer.</li>
		   <li class="text">When specified by the UI designer, column reordering should be sticky across sessions. To 
				   achieve this, the user’s most recent column order can be saved locally using a cookie.
			</li>
		</ul>
	</div>
	
	
	<div class="sub-section">
		<h2>Column customization</h2>
		<ul>
			<li class="text">When <strong>column customization</strong> is enabled, users may hide and show columns by
		   selecting the <em>Columns</em> item from any column menu. Selecting <em>Columns</em> opens a cascading
		   menu  containing a list of available columns preceded by checkboxes. Unchecking columns hides them and
		   checking  columns shows them.</li>
		   <li class="text">When column customization is disabled, the <em>Columns</em> item does not appear in the 
		column menus.</li>
		<li class="text">When specified by the UI designer, column customization should be sticky across sessions. 
		To achieve this, the user’s most recent column customizations can be saved locally using a cookie.</li>
		<li class="text">UI designers may specify that infrequently used columns be hidden by default.</li>
		</ul>
	</div>
	
	
	<div class="sub-section">
		<h2>Column numbering</h2>
		<ul>
			<li class="text">When <strong>row numbering</strong> is enabled, row numbers appear to the left of the first  
		column. These numbers are attached to the left side of the panel and remain visible when a user scrolls 
		  horizontally through the data.</li>
		  <li class="text">When <strong>row numbering</strong> is enabled, row numbers appear to the left of the first  
		column. These numbers are attached to the left side of the panel and remain visible when a user scrolls 
		  horizontally through the data.</li>
		  <li class="text">Row numbering is not appropriate for most grid views. Row numbering is most appropriate for 
		grid views that allow users to preview the data in a  source such as a relational table or flat file.</li>
		<li class="text">In some cases, it may be more appropriate to have an actual data column of line numbers than 
		to enable the row numbering feature of the grid view. This allows the user to return the data to its original 
		order by sorting by the column of line numbers.</li>
		</ul>
	</div>
	
	
</div>







<div class="sub-section">

	<h4>Sub-section: Table</h4>
	<div class="component">
	
		<table class="infa-table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Desc</th>
					<th>Something Else</th>
					<th>Something Else that is quite long</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	
	<h4>Sub-section: Grouped By Table</h4>
	<div class="component">
	
		<table class="infa-table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Desc</th>
					<th>Something Else</th>
					<th>Something Else that is quite long</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
			</tbody>
			
			<tr>
				<td colspan="4">asdf</td>
			</tr>
			<tbody>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	
	<h4>Sub-section: Table Stiped</h4>
	<div class="component">
		<table class="infa-table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Desc</th>
					<th>Something Else</th>
					<th>Something Else that is quite long</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
				<tr>
					<td>Italy</td>
					<td>Capital is </td>
					<td>Lorem ipsum asdf fape a</td>
					<td>Lorem ipsum asdf fape a asdf vherja a;lesd</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	
	<h4>Sub-section: Table Header</h4>	
	<div class="component">

		<table class="infa-table">
			<tr>
				<td><b>897</b> Business Terms</td>
				<td width="60px"><label>Sort By:</label></td>
				<td width="100px">
					<select>
						<option>Name</option>
					</select>
				</td>
				<td width="80px"><label>Group By:</label></td>
				<td width="100px">
					<select>
						<option>None</option>
					</select>
				</td>
				<td width="60px" class="border-left">
					<button class="btn-active">Filter</button>
				</td>
			</tr>
		</table>

	</div><!-- END of component -->
	
	<h4>Sub-section: Table Task Header</h4>
	<div class="component">

		<table id="myTable" class="infa-table">
			<caption>This is the table Caption</caption>
			<thead>
				<tr>
					<th width="10px">&gt;</th>
					<th width="10px"></th>
					<th width="240px">Date</th>
					<th width="25%">Team A</th>
					<th width="20px">Goals</th>
					<th width="20px">Goals</th>
					<th width="25%">Team B</th>
					<th>Group</th>
					<!--<th>Scorers</th>-->
				</tr>
				<!-- Task Row -->
				<tr class="task-row">
					<td>&nbsp;</td>
					<td><span class="icon icon-asset"></span></td>
					<td><input type="date" /><span class="icon icon-calendar"></span></td>
					<td><input type="search" placeholder="Search Team..." /></td>
					<td><input type="search" /></td>
					<td><input type="search" /></td>
					<td><input type="search" placeholder="Search Team..." /></td>
					<td>
						<select>
							<option></optons>
							<option>Group A</optons>
							<option>Group B</optons>
							<option>Group C</optons>
							<option>Group D</optons>
							<option>Group E</optons>
							<option>Group F</optons>
							<option>Group G</optons>
							<option>Group H</optons>
						</select>
					</td>
					<!--<td><input type="search" placeholder="Search Team..." /></td>-->
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>12th June</td>
					<td>$11.5</td>
					<td>3</td>
					<td>1</td>
					<td>Croatia</td>
					<td>Group A</td>
					<!--<td></td>-->
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>13th June</td>
					<td><a href="#">Mexico</a></td>
					<td>1</td>
					<td>0</td>
					<td>Cameroon</td>
					<td>Group A</td>
					<!--<td></td>-->
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>13th June</td>
					<td>Spain</td>
					<td>1</td>
					<td>5</td>
					<td>Netherlands</td>
					<td>Group B</td>
					<!--<td></td>-->
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>13th June</td>
					<td>55</td>
					<td>3</td>
					<td>1</td>
					<td>Australia</td>
					<td>Group B</td>
					<!--<td></td>-->
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>14th June</td>
					<td>Colombia</td>
					<td>3</td>
					<td>0</td>
					<td>Greece</td>
					<td>Group C</td>
					<!--<td></td>-->
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>16th June</td>
					<td>Germany</td>
					<td>4</td>
					<td>0</td>
					<td>Portugal</td>
					<td>Group G</td>
					<!--<td></td>-->
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>18th June</td>
					<td>Spain</td>
					<td>0</td>
					<td>2</td>
					<td>Chile</td>
					<td>Group G</td>
					<!--<td></td>-->
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>23rd June</td>
					<td>Brazil</td>
					<td>4</td>
					<td>1</td>
					<td>Cameroon</td>
					<td>Group A</td>
					<!--<td></td>-->
				</tr>
			</tbody>
		</table>

	</div><!-- END of component -->



	<h4>Sub-section: Table Header</h4>
	<div class="component">

		<table class="infa-table">
			<tr>
				<td><b>897</b> Business Terms</td>
				<td width="60px"><label>Sort By:</label></td>
				<td width="100px">
					<select>
						<option>Name</option>
					</select>
				</td>
				<td width="80px"><label>Group By:</label></td>
				<td width="100px">
					<select>
						<option>None</option>
					</select>
				</td>
				<td width="60px" class="border-left">
					<button class="btn-active">Filter</button>
				</td>
			</tr>
		</table>

	</div><!-- END of component -->
	
	
	
	<h4>Sub-section: Form Table</h4>
	<div class="component">

		<table class="infa-form-table">
			<thead>
				<tr>
					<th colspan="2">This is the form title. A really long title</th>
				</tr>
				<tr>
					<td colspan="2">*This is a note</td>
				</tr>
			</thead>
			<tbody class="form-section">
				<tr>
					<td class="form-section-title">General</td>
					<td></td>
				</tr>
				<tr>
					<td>Name*</td>
					<td><input type="text" /></td>
				</tr>
				<tr>
					<td>Description*</td>
					<td><textarea></textarea></td>
				</tr>
				<tr class="form-divider"><td></td><td></td></tr>
				<tr>
					<td>A radio Option</td>
					<td>
						<input type="radio" name="form_options" />Option 1<br />
						<input type="radio" name="form_options" />Option 2<br />
						<input type="radio" name="form_options" />Option 3<br />
						<input type="radio" name="form_options" />Option 4<br />
					</td>
				</tr>
				<tr>
					<td>Select Options</td>
					<td>
						<select>
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
						</select>
					</td>
				</tr>
			</tbody>
			<tbody class="form-section">
				<tr>
					<td width="100px"><b>Project Status</b></td>
					<td></td>
				</tr>
				<tr>
					<td>Form field with icon</td>
					<td><input type="search" placeholder="Search here..." /><span class="icon icon-asset"></span></td>
				</tr>
				<tr>
					<td></td>
				</tr>
			</tbody>
		</table>

	</div><!-- END of component -->
	
	
</div>


<!--
<div class="sub-section">
	<h4>Sub-section: Tables with checboxes</h4>

	<div class="component">
	
		<table class="infa-table">
			<thead>
				<tr>
					<th width="10px">&gt;</th>
					<th width="10px"></th>
					<th width="20px">ID</th>
					<th>Task Title</th>
					<th>Task Type</th>
					<th>Due Date</th>
					<th>Status</th>
					<th width="20px">Cr</th>
				</tr>
				<tr class="task-row">
					<td>&nbsp;</td>
					<td><span class="icon icon-asset"></span></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
					<td>
						<select>
							<option></optons>
							<option>Correct Expectations</optons>
							<option>Wrong Expectations</optons>
						</select>
					</td>
					<td><input type="date" /><span class="icon icon-calendar"></span></td>
					<td><input type="text" /></td>
					<td><input type="text" /></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>512</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
					<tr class="sub-table">
						<td colspan="5">
							<div>This is the sub-table (hidden) section. This will be triggered when the user clicks on the above row.</div>
						</td>
					</tr>
					
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>530</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
					<tr class="sub-table">
						<td colspan="5">
							<div>
								<table class="infa-table-simple">
									<tr>
										<th>&gt;</th>
										<th></th>
										<th>ID</th>
										<th>Task Title</th>
										<th>Task Type</th>
									</tr>
									<tr>
										<td>&gt;</td>
										<td><input type="checkbox" /></td>
										<td>Row item with icon</td>
										<td>(1, 2)</td>
										<td>(1, 3)</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>516</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
					<tr class="sub-table">
						<td colspan="5">
							<div>asdfasdf a;sdfasdfasdfsdfasdf</div>
						</td>
					</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>516</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>516</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>516</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>516</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>516</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>516</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>516</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
				<tr>
					<td>&gt;</td>
					<td><input type="checkbox" /></td>
					<td>516</td>
					<td>Correct Expectations in Customers Data (1 - 10)</td>
					<td>Correct Expectations</td>
					<td>27/June/2013</td>
					<td>On Schedule</td>
					<td>27.</td>
				</tr>
			</tbody>
		</table>
		
	</div>
	
</div>
-->