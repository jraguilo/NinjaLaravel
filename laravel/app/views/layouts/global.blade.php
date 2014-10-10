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


  @yield('scripts')

  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
          data-target="#navbar-options">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="#">Ninja Assassin 2</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-options">
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::check())
          <li><a href="/logout">Log Out</a></li>
          <li><a href="/profile">{{ Auth::user()->username }}</a></li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Sign Up</a></li>
          @endif
        </ul>
      </div>
</nav>
    @yield('content')
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    {{ HTML::script('js/bootstrap.min.js'); }}

  </body>
  </html>