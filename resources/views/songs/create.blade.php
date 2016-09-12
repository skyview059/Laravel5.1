@extends('master')

@section('content')
<h2>Add Song</h2>
    {!! Form::open(array('route' => 'songs.store'), ['method'=>'POST']) !!}
<!--    {!! Form::open(array('url' => 'songs.store'), ['method'=>'POST']) !!}-->

        @include('songs._form')
    
    {!! Form::close() !!}    
    
@stop