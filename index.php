<head>

  <title>Pong!</title> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  <link href="pong.css" media="screen, print" rel="stylesheet" type="text/css" /> 
  <link href='http://fonts.googleapis.com/css?family=Orbitron|Montserrat+Subrayada|Cutive+Mono' rel='stylesheet' type='text/css'>

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <script type='text/javascript'>
	var index = 0;
	var text = 'welcome to FOMP. type 1 for instructions. type 2 to log in using twitter.'
		function type(){
		document.getElementById('instructions').innerHTML += text.charAt(index);
		index += 1;
		var t = setTimeout('type()',75)
	}

	</script>

</head>

<div class = "top">
	<div id = "startWrap">
	<body onload ='type()'>
	<div class = "welcome">

	<div id='instructions'></div>	

		<form>
  			<fieldset>
    		>>:<input class="response" type="text">
  			</fieldset>
		</form>

		<script>
		var xTriggered = 0;
		$(".response").keypress(function(event) {
		  if ( event.which == 49 ) {
		    //console.log("instructions");
		    $('.bottom').load('instructions.php');
		   }
		   if ( event.which == 50 ) {
		   	 window.location.href = "playerOne/startsession.php";
		   }

		});
		</script>
	</div>
	
</div>
</div>

<div class="bottom">
	
</div>