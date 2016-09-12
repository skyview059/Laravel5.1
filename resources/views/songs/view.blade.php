@extends('master')

@section('content')

   <h2> {{ $song->title}}</h2>
   
   <p> Created@ {{$song->created_at}} &AMP;  Updated@ {{$song->updated_at}}</p>  
 
    
    <p> {{ $song->slug}}</p>  

    <p> {{ $song->lyrics}}</p> 
    <p> {!! nl2br($song->lyrics) !!}</p>  
   
    
    <p><em>Video 09 Duration - 13:55 Sec</em></p>
@stop