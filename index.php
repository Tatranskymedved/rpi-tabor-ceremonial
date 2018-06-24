<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tabor - TurboRPI</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
    button {
      width: 100%;
      min-height: 80px;
    }
    </style>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-111678603-1');
    </script>
  </head>
  <body>
    <?php

    if(isset($_POST['music-start']))
    {
      exec("mpc play");
    }
    if(isset($_POST['music-stop']))
    {
      exec("mpc pause");
    }
    if(isset($_POST['music-next']))
    {
      exec("mpc next");
    }
    if(isset($_POST['music-shuffle']))
    {
      exec("mpc shuffle");
    }
    if(isset($_POST['music-volume']))
    {
      exec("mpc volume ".$_POST[('music-volume-value')]);
    }

    if(isset($_POST['led-start']))
    {
        echo "<h1>led start</h1>";
    }
    if(isset($_POST['led-stop']))
    {
        echo "<h1>led stop</h1>";
    }

    //For receiving volume even after action (change of volume).
    $vol = rtrim(ltrim(exec("mpc volume"), "volume: "),"%");

    ?>

    <div class="container">
      <form class="row" name="sender" method="post">
        <input style="position:absolute;" class="hidden" type="text" name="submit" value="true"></div>
        <div class="col-sm-6 col-xs-6 col-md-2">
          <p><button class="btn btn-success" type="submit" name="music-start" value="1">Start song</button></p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-2">
          <p><button class="btn btn-danger" type="submit" name="music-stop" value="0">Pause song</button></p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-2">
          <p><button class="btn btn-info" type="submit" name="music-next" value="0">Next song</button></p>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-2">
          <p><button class="btn btn-default" type="submit" name="music-shuffle" value="0">Shuffle music</button></p>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-12">
          <p>
              <input id="music-volume-value" style="width: 80%; float:left;" type="range" name="music-volume-value" min="0" max="100" step="1" value="<?php echo $vol; ?>"/>
              <span style="overflow: hidden;" class="btn" id="music-volume-text"><?php echo $vol; ?></span>
          </p>
            <button class="btn btn-warning" type="submit" name="music-volume">Change volume</button>
        </div>
        <div class="col-sm-6 col-xs-6 col-md-2">
          <p><button class="btn btn-success" type="submit" name="led-start">Start LED</button></p>
        </div>
        <div class="col-md-6 col-xs-6 col-md-2">
          <p><button class="btn btn-danger" type="submit" name="led-stop">Stop LED</button></p>
        </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script>

    var slider = document.getElementById('music-volume-value');
    slider.addEventListener('input', sliderChange);

    function sliderChange() {
      var txt = document.getElementById('music-volume-text');
      txt.innerHTML = this.value;
    }
    </script>
  </body>
</html>
