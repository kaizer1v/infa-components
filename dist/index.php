<?php require "header.php"; ?>
	
	<div id="component_container" class="clearfix scrollable">
	
		<div id="primary-tabs" class="tabs-container">
			<ul class="tabs">
				<li><a href="#typography" class="infa-green" data-toggle="tab">Typography</a></li>
				<li><a href="#grids" data-toggle="tab">Grids</a></li>
				<li><a href="#form_elements" data-toggle="tab">Form Elements</a></li>
				<li><a href="#buttons" data-toggle="tab">Buttons</a></li>
				<li><a href="#lists" data-toggle="tab">Lists</a></li>
				<li><a href="#icons" data-toggle="tab">icons</a></li>
				<li><a href="#tables" data-toggle="tab">Grid View / Tables</a></li>
				<li><a href="#dropdowns" data-toggle="tab">Dropdowns</a></li>
				<li><a href="#headerbar" data-toggle="tab">Headerbar</a></li>
				<li><a href="#titlebar" data-toggle="tab">Titlebar</a></li>
				<li><a href="#tabs" data-toggle="tab">Tabs</a></li>
				<li><a href="#boxes" data-toggle="tab">Boxes</a></li>
				<li><a href="#wizard" data-toggle="tab">Wizard</a></li>
				<li><a href="#modal" data-toggle="tab">Modal</a></li>
				<li class="active"><a href="#accordian" data-toggle="tab">Accordians</a></li>
				<li><a href="#tree" data-toggle="tab">Tree</a></li>
				<li><a href="#shuttle" data-toggle="tab">Shutte</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tabs-content">
				<div class="tabs-pane" id="typography">
					<h1>Typography</h1>
					<?php require "components/typography.php"; ?>
				</div>
			
				<div class="tabs-pane" id="grids">
					<h1>Grids</h1>
					<?php require "components/grids.php"; ?>
				</div>
			
				<div class="tabs-pane" id="form_elements">
					<h1>Form Elements</h1>
					<?php require "components/form.php"; ?>
				</div>
			
				<div class="tabs-pane" id="buttons">
					<h1>Buttons</h1>
					<?php require "components/buttons.php"; ?>
				</div>
			
				<div class="tabs-pane" id="lists">
					<h1>Lists</h1>
					<?php require "components/lists.php"; ?>
				</div>
				
				<div class="tabs-pane" id="icons">
					<h1>Icons</h1>
					<?php require "components/icons.php"; ?>
				</div>
			
				<div class="tabs-pane" id="tables">
					<h1>Grid View / Tables</h1>
					<?php require "components/tables.php"; ?>
				</div>
			
				<div class="tabs-pane" id="dropdowns">
					<h1>Dropdowns</h1>
					<?php require "components/dropdown.php"; ?>
				</div>
			
				<div class="tabs-pane" id="headerbar">
					<h1>HeaderBar</h1>
					<?php require "components/headerbar.php"; ?>
				</div>
			
				<div class="tabs-pane" id="titlebar">
					<h1>TitleBar</h1>
					<?php require "components/titlebar.php"; ?>
				</div>
			
				<div class="tabs-pane" id="tabs">
					<h1>Tabs</h1>
					<?php require "components/tabs.php"; ?>
				</div>
			
				<div class="tabs-pane" id="boxes">
					<h1>Boxes</h1>
					<?php require "components/boxes.php"; ?>
				</div>
			
				<div class="tabs-pane" id="wizard">
					<h1>Wizard</h1>
					<?php require "components/wizard.php"; ?>
				</div>
			
				<div class="tabs-pane" id="modal">
					<h1>Modal Window</h1>
					<?php require "components/modal.php"; ?>
				</div>
			
				<div class="tabs-pane active" id="accordian">
					<h1>Accordian</h1>
					<?php require "components/collapse.php"; ?>
				</div>
			
				<div class="tabs-pane" id="tree">
					<h1>Tree</h1>
					<?php require "components/tree.php"; ?>
				</div>
			
				<div class="tabs-pane" id="">
					<h1>Shuttle</h1>
					<?php #require "components/shuttle.php"; ?>
				</div>
			
				<div class="tabs-pane" id="">
					<h1>_____</h1>
				</div>	
			
				<div class="tabs-pane" id="">
					<h1>_____</h1>
				</div>
			</div>
		</div><!-- END .tabs-container -->
	
	
	
	
	</div><!--END .container -->
	
<?php require "footer.php"; ?>