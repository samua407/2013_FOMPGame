<!DOCTYPE html> 
<html>
<head>
  <title>Pong!</title> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  <link href="pong.css" media="screen, print" rel="stylesheet" type="text/css" /> 
  <link href='http://fonts.googleapis.com/css?family=Orbitron|Montserrat+Subrayada' rel='stylesheet' type='text/css'>
</head> 
 

<body> 

  <div id="sidebar">

    <label for='sound'>sound: </label>
    <input type='checkbox' id='sound'>

    <label for='stats'>stats: </label>
    <input type='checkbox' id='stats' checked>

    <label for='footprints'>footprints: </label>
    <input type='checkbox' id='footprints'>

    <label for='predictions'>predictions: </label>
    <input type='checkbox' id='predictions'>
  
  </div>

<!-- game wrapper -->
<div id="wrapper">

  <!-- player one chopping block shell -->
  <div id="playerOneChopShell">

    <!-- player one chopping block api include -->
    <div id="playerOneChop">
      <?php include "playerOne/choppingBlock.php" ?>
    </div>

    <!-- player one chopping block overlay -->
    <div id="playerOneChopFade">
      <br/>
      <img src="images/topbuffer.png">
      <br/>
      <img id="playerOneChop1" src="images/chop.png">
      <img id="playerOneHolder1" src="images/fill.png">
      <br/>
      <img id="playerOneChop2" src="images/chop.png">
      <img id="playerOneHolder2" src="images/fill.png">
      <br/>
      <img id="playerOneChop3" src="images/chop.png">
      <img id="playerOneHolder3" src="images/fill.png">
      <br/>
      <img id="playerOneChop4" src="images/chop.png">
      <img id="playerOneHolder4" src="images/fill.png">
      <br/>
      <img id="playerOneChop5" src="images/chop.png">
      <img id="playerOneHolder5" src="images/fill.png">
      <br/>
      <img id="playerOneChop6" src="images/chop.png">
      <img id="playerOneHolder6" src="images/fill.png">
      <br/>
      <img id="playerOneChop7" src="images/chop.png">
      <img id="playerOneHolder7" src="images/fill.png">
      <br/>
      <img id="playerOneChop8" src="images/chop.png">
      <img id="playerOneHolder8" src="images/fill.png">
      <br/>
      <img id="playerOneChop9" src="images/chop.png">
      <img id="playerOneHolder9" src="images/fill.png">
      <br/>
    </div>
  </div> 
  <!--end player one chopping block shell -->

 
 
<!-- game begin -->
  <canvas id="game">

    <div id="unsupported">
      Sorry, this example cannot be run because your browser does not support the &lt;canvas&gt; element
    </div>
 

  <script src="game.js" type="text/javascript"></script> 
  <script src="pong.js" type="text/javascript"></script>
  

  <script id="game" type="text/javascript">

  Game.ready(function() {

    var size        = document.getElementById('size');
    var sound       = document.getElementById('sound');
    var stats       = document.getElementById('stats');
    var footprints  = document.getElementById('footprints');
    var predictions = document.getElementById('predictions');

    var pong = Game.start('game', Pong, {
      sound:       sound.checked,
      stats:       stats.checked,
      footprints:  footprints.checked,
      predictions: predictions.checked
    });

    Game.addEvent(sound,       'change', function() { pong.enableSound(sound.checked);           });
    Game.addEvent(stats,       'change', function() { pong.showStats(stats.checked);             });
    Game.addEvent(footprints,  'change', function() { pong.showFootprints(footprints.checked);   });
    Game.addEvent(predictions, 'change', function() { pong.showPredictions(predictions.checked); });

  });
  </script>
 </canvas> <!--game end-->
</div> <!--wrapper end-->



</body> 
</html>
