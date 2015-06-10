<div class="sub-section">
	<h4>Sub-section: Navigation Dropdowns</h4>
	<div class="component">
	
		<div class="container">
			<div class="col col-2">
			
				<ul class="dropdown-menu" style="display: block !important; position: relative !important;">
					<li class="dropdown-menu-header text-infa-orange">Menu Header</li>
					<li><a href="#">Sub menu item 1</a></li>
					<li><a href="#">Another Item</a></li>
					<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
					<li><a href="#"><input type="checkbox" />Sub menu item 1</a></li>
					<li class="disabled">Disabled Link</li>
					
					<hr class="divider" />
					<li class="dropdown-menu-header text-infa-dblue">Menu Header</li>
					<li><a href="#">Another Item</a></li>
					<li><a href="#">Just a link</a></li>
					<li>No hyperlink</li>
					
					<hr class="divider" />
					<li class="dropdown-menu-header">Menu Header</li>
					<li><a href="#">Just a link</a></li>
					<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
				</ul>
				
			</div>
		</div><!-- END .container -->

		<table class="infa-table" style="width: 50%">
			<thead>
				<tr>
					<th>Testing Sub Menus inside dropdowns</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Submenu</td>
					<td>
						<div class="dropdown">
							<a href="#" class="dropdown-link">Dropdown<span class="icon icon-carat"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-header">Menu Header</li>
								<li class="has-submenu">
									<a href="#">I have a Submenu<span class="icon icon-arrow-closed" style="float: right"></span></a>
									<ul class="dropdown-menu submenu">
										<li>Item 1</li>
										<li>Item 2</li>
									</ul>
								</li>
								<li><a href="#">Just a link</a></li>
								<li class="has-submenu">
									<a href="#">I have a Submenu<span class="icon icon-arrow-closed" style="float: right"></span></a>
									<ul class="dropdown-menu submenu">
										<li>Item 1</li>
										<li>Item 2</li>
									</ul>
								</li>
							</ul>
						</div>
					</td>
				</tr>
			</tbody>
		</table>

		<table class="infa-table" style="width: 50%">
			<thead>
				<tr>
					<th>Class Name</th>
					<th>Dropdowns</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><code>.dropdown</code> as a div</td>
					<td>
					
						<div class="dropdown">
							<a href="#" class="dropdown-link">Dropdown<span class="icon icon-carat"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-header text-infa-orange">Menu Header</li>
								<li><a href="#">Sub menu item 1</a></li>
								<li><a href="#">Another Item</a></li>
								<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
								<li><a href="#"><input type="checkbox" />Sub menu item 1</a></li>
								<li class="disabled">Disabled Link</li>
								
								<hr class="divider" />
								<li class="dropdown-menu-header text-infa-dblue">Menu Header</li>
								<li><a href="#">Another Item</a></li>
								<li><a href="#">Just a link</a></li>
								<li>No hyperlink</li>
								
								<hr class="divider" />
								<li class="dropdown-menu-header">Menu Header</li>
								<li><a href="#">Just a link</a></li>
								<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
							</ul>
						</div>
						
					</td>
				</tr>
				<tr>
					<td><code>.dropdown</code> as an icon</td>
					<td>
					
						<div class="dropdown">
							<a href="#" class="dropdown-link"><span class="icon icon-action"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-header text-infa-orange">Menu Header</li>
								<li><a href="#">Sub menu item 1</a></li>
								<li><a href="#">Another Item</a></li>
								<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
								<li><a href="#"><input type="checkbox" />Sub menu item 1</a></li>
								<li class="disabled">Disabled Link</li>
								
								<hr class="divider" />
								<li class="dropdown-menu-header text-infa-dblue">Menu Header</li>
								<li><a href="#">Another Item</a></li>
								<li><a href="#">Just a link</a></li>
								<li>No hyperlink</li>
								
								<hr class="divider" />
								<li class="dropdown-menu-header">Menu Header</li>
								<li><a href="#">Just a link</a></li>
								<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
							</ul>
						</div>
						
					</td>
				</tr>
				<tr>
					<td><code>.dropdown</code> as a button</td>
					<td>
					
						<button class="dropdown">
							<a href="#" class="dropdown-link">Dropdown<span class="icon icon-carat"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-header text-infa-orange">Menu Header</li>
								<li><a href="#">Sub menu item 1</a></li>
								<li><a href="#">Another Item</a></li>
								<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
								<li><a href="#"><input type="checkbox" />Sub menu item 1</a></li>
								<li class="disabled">Disabled Link</li>
								
								<hr class="divider" />
								<li class="dropdown-menu-header text-infa-dblue">Menu Header</li>
								<li><a href="#">Another Item</a></li>
								<li><a href="#">Just a link</a></li>
								<li>No hyperlink</li>
								
								<hr class="divider" />
								<li class="dropdown-menu-header">Menu Header</li>
								<li><a href="#">Just a link</a></li>
								<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
							</ul>
						</button>
						
					</td>
				</tr>
				<tr>
					<td><code>.dropdown</code> as a td. Here the <code>td</code> element <br /><br />is given a class of <code>.dropdown</code></td>
					<td class="dropdown">
					
						<a href="#" class="dropdown-link">Dropdown<span class="icon icon-carat"></span></a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-header text-infa-orange">Menu Header</li>
							<li><a href="#">Sub menu item 1</a></li>
							<li><a href="#">Another Item</a></li>
							<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
							<li><a href="#"><input type="checkbox" />Sub menu item 1</a></li>
							<li class="disabled">Disabled Link</li>
							
							<hr class="divider" />
							<li class="dropdown-menu-header text-infa-dblue">Menu Header</li>
							<li><a href="#">Another Item</a></li>
							<li><a href="#">Just a link</a></li>
							<li>No hyperlink</li>
							
							<hr class="divider" />
							<li class="dropdown-menu-header">Menu Header</li>
							<li><a href="#">Just a link</a></li>
							<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
						</ul>
					
					</td>
				</tr>
				<tr>
					<td>For <code>.dropdown</code> as a Tab, see Tabs section</td>
					<td></td>
				</tr>
			</tbody>
		</table>
		
		<table class="infa-table">
			<thead>
				<tr>
					<th>Testing Extreme Right dropdown</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>See Right</td>
					<td width="20px">
					
						<div class="dropdown dropdown-right">
							<a href="#" class="dropdown-link"><span class="icon icon-action"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-header text-infa-orange">Menu Header</li>
								<li><a href="#">Sub menu item 1</a></li>
								<li><a href="#">Another Item</a></li>
								<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
								<li><a href="#"><input type="checkbox" />Sub menu item 1</a></li>
								<li class="disabled">Disabled Link</li>
								
								<hr class="divider" />
								<li class="dropdown-menu-header text-infa-dblue">Menu Header</li>
								<li><a href="#">Another Item</a></li>
								<li><a href="#">Just a link</a></li>
								<li>No hyperlink</li>
								
								<hr class="divider" />
								<li class="dropdown-menu-header">Menu Header</li>
								<li><a href="#">Just a link</a></li>
								<li><a href="#"><span class="icon icon-asset"></span>With Icon</a></li>
							</ul>
						</div>
						
					</td>
				</tr>
			</tbody>
		</table>

	</div><!--END of component -->
</div>