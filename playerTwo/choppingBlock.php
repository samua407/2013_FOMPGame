
<!doctype>

<html>
<head>
  <title>Chopping Block</title> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script src="http://code.jquery.com/jquery-latest.js"></script>

	<!-- <script>
	 $(document).ready(function() {
	 	 $("#responsecontainer").load("response.php");
	   var refreshId = setInterval(function() {
	      $("#friendlist").load('playerOneChoppingBlock.php?randval='+ Math.random());
	   }, 500);
	   $.ajaxSetup({ cache: false });
	});
	</script>  -->
  
  <!--add CSS-->
  <link href="/mstwo_pong/pong.css" media="screen, print" rel="stylesheet" type="text/css" />
  
</head>
<body>



<div id="friendlist">

<!---include playerOneFriendInfo-->
<?php
include 'friends.php';
?>

<p>

<!-- 	@<?php echo $name; ?>'s Chopping Block.
	<br/>
	(These friends are on the line.) -->
	<image src="images/ChoppingBlock.png", style="margin-right:3em;">
	<br/>
	<br/>
	<image src="<?php echo $friendOneImage;?>">
	<br/>
	<br/>
	<image src="<?php echo $friendTwoImage;?>">
	<br/>
	<br/>
	<image src="<?php echo $friendThreeImage;?>">
	<br/>
	<br/>
	<image src="<?php echo $friendFourImage;?>">
	<br/>
	<br/>
	<image src="<?php echo $friendFiveImage;?>">
	<br/>
	<br/>
	<image src="<?php echo $friendSixImage;?>">
	<br/>
	<br/>
	<image src="<?php echo $friendSevenImage;?>">
	<br/>
	<br/>
	<image src="<?php echo $friendEightImage;?>">
	<br/>
	<br/>
	<image src="<?php echo $friendNineImage;?>">
	<br/>
	<br/>


</p>

</div>



</body>
</html>












