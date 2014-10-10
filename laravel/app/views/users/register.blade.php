@extends('layouts.global')

@section('content')

{{Form::open(array('url' => 'register', 'method' => 'post'))}}
{{Form::label('username', 'Username')}}
{{Form::text('username', array('class' => 'form-control'))}}
{{Form::label('password', 'Password')}}
{{Form::password('password', array('class' => 'form-control'))}}
{{Form::label('email', 'Email')}}
{{Form::text('email', array('class' => 'form-control'))}}
{{Form::submit('Register', array('class' => 'btn btn-primary'))}}
{{Form::close()}}

@stop