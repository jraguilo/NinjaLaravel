<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

  <title>Ninja Assasin 2 </title>

  <!-- Bootstrap core CSS -->
  {{ HTML::style('css/bootstrap.min.css'); }}
  {{ HTML::style('css/cover.css'); }}   
  {{ HTML::script('js/jquery.js'); }}


  <!-- Game scripts go here-->
  {{ HTML::script('game/scripts/jquery.touchSwipe.min.js'); }}
  {{ HTML::script('game/scripts/resources.js'); }}
  {{ HTML::script('game/scripts/menus.js'); }}
  {{ HTML::script('game/scripts/ninjas.js'); }}
  {{ HTML::script('game/scripts/Map.js'); }}
  {{ HTML::script('game/scripts/constants.js'); }}

  </head>
  <body>
    <div class="site-wrapper">
      <div class="cover-container">
        <div class="inner">
          <h3 class="masthead-brand">Ninja Assasin 2</h3>
          <?php if(DB::connection()->getDatabaseName())
          {
            echo "Connected to the DB" . DB::connection()->getDatabaseName();
          }
          ?>
          <ul class="nav masthead-nav"> 
          </ul>
        </div>

        <div class="inner cover">
          <h1 class="cover-heading"></h1>
          <div>
            <canvas id="game"> {{ HTML::script('game/scripts/main.js'); }}
            </canvas><div style="position:absolute" id="mobile"></div>
            <audio id="audio">
              <source src="assets/espionage.ogg" type="audio/ogg">
              <source src="assets/espionage.mp3" type="audio/mpeg">
              <source src="assets/espionage.wav" type="audio/wav">
            </audio>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    {{ HTML::script('js/bootstrap.min.js'); }}

  </body>
  </html>