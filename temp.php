
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Slider - Range with fixed minimum</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script>
	$(function() {
		$( "#slider-range-min" ).slider({
			range: "min",
			value: 37,
			min: 1,
			max: 700,
			slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.value );
			}
		});
		$( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
	});
	</script>
</head>
<body>
<div>
<p>
	<label for="amount">Maximum price:</label>
	<input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
</p>

<div id="slider-range-min"></div>
</div>
<script src="js/session_stop.js"></script>

</body>
</html>
