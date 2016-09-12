@extends('master')

@section('content')
<table style="width: 100%;" border="1">
    <tr>
        <th>Title</th>       
        <th width="120">API Style</th>
        <th width="220">Delete Action</th>
    </tr>
    
    @foreach( $songs as $song)     
       <tr>
           <td><a href="songs/{{ $song->slug }}">{{ $song->title}}</a></td>           
           <td><a href="songs/{{ $song->slug }}/edit">API Edit</a></td>
           <td><a href="songs/{{ $song->slug }}/delete">Delete Not Working</a></td>
       </tr>
    @endforeach        
</table>  
@stop