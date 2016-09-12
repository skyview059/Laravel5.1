@extends('master')

@section('content')

   <h2> Update Song </h2>  
   <p><em>Video 09 Duration - 13:55 sec</em></p>
    
<!--    {!! Form::model($song, ['url'=> 'song/' . $song->slug, 'method'=>'PATCH'])!!}-->
    {!! Form::model($song, ['route'=> ['songs.update', $song->slug], 'method'=>'PATCH'])!!}

        @include('songs._form')

    {!! Form::close() !!} 
    
    
    {!! delete_form(['songs.destroy', $song->slug ]) !!}

@stop
 