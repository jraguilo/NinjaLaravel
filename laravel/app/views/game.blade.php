@extends('layouts.global')
@section('scripts')
    <!-- Game Scripts-->
  {{ HTML::script('game/scripts/jquery.touchSwipe.min.js'); }}
  {{ HTML::script('game/scripts/resources.js'); }}
  {{ HTML::script('game/scripts/menus.js'); }}
  {{ HTML::script('game/scripts/ninjas.js'); }}
  {{ HTML::script('game/scripts/Map.js'); }}
  {{ HTML::script('game/scripts/constants.js'); }}
@stop

@section('content')  
  <div>
    <canvas id="game"> {{ HTML::script('game/scripts/main.js'); }}
    </canvas>
    <audio id="audio">
      <source src="assets/espionage.ogg" type="audio/ogg">
      <source src="assets/espionage.mp3" type="audio/mpeg">
      <source src="assets/espionage.wav" type="audio/wav">
    </audio>
  </div>
    
@stop



