<head>
  <title>Pong!</title> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  <link href="pong.css" media="screen, print" rel="stylesheet" type="text/css" /> 
  <link href='http://fonts.googleapis.com/css?family=Orbitron|Montserrat+Subrayada' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script type='text/javascript'>
	var index = 0;
	var text = 'welcome to game name. type 1 for instructions. type 2 to log in using twitter.'
		function type(){
		document.getElementById('instructions').innerHTML += text.charAt(index);
		index += 1;
		var t = setTimeout('type()',75)
	}

	</script>


</head>

<div id = "startWrap">
<body onload ='type()'>


	<div class = "welcome">
		<h1>
			<!-- Game name -->
		</h1>

		<div id='instructions'></div>	

		<form>
  			<fieldset>
    		<label for="target">//</label>
    		<input id="welcome" type="text" />
  			</fieldset>
		</form>

		<script>
		var xTriggered = 0;
		$("#welcome").keypress(function(event) {
		  if ( event.which == 49 ) {
		    console.log("instructions");
		   }
		   if ( event.which == 50 ) {
		   	 window.location.href = "playerOne/clearsessions.php";
		   }
		});
		</script>
	</div>
	
</div>

</body>

