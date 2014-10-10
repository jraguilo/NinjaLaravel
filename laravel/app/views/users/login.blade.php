@extends('layouts.global')

@section('content')

<div class="container">
{{Form::open(array('url' => 'login', 'method' => 'post'))}}
<div class="row">
  <div class="form-group col-md-3">
    {{Form::label('username', 'Username')}}
    {{Form::text('username', null, array('class' => 'form-control'))}}
  </div>
</div>
<div class="row">
  <div class="form-group col-md-3">
    {{Form::label('password', 'Password')}}
    {{Form::password('password', array('class' => 'form-control'))}}
  </div>
</div>
<div class="row">
  <div class="form-group col-md-3">
{{Form::submit('Login', array('class' => 'btn btn-primary'))}}
  </div>
</div>
{{Form::close()}}
</div>
@stop