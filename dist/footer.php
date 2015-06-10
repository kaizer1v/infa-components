	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/informatica.js"></script>

	<script type="text/javascript">
		var blah = $('#blah');
		blah.tooltip();
	</script>
	
	<!-- script specific to this site -->
	
	<!-- script to copy to clipboard -->
	<!--
	<script type="text/javscript" src="plugins/zeroClipboard.js"></script>
	<script type="text/javascript">
	
	//set path
	ZeroClipboard.setMoviePath('plugins/zeroClipboard.swf');
	//create client
	var clip = new ZeroClipboard.Client();
	//event
	clip.addEventListener('mousedown', function() {
		clip.setText($('#table-icons > tbody > tr > td > code').value());
	});
	clip.addEventListener('complete',function(client,text) {
		alert('copied: ' + text);
	});
	//glue it to the button
	clip.glue('copy');
	</script>
	-->
</body>
</html>