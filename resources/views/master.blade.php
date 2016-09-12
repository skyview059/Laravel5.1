<!DOCTYPE html>
<html>
    <head>
        <title>Laravel5.1 - Jeffrey Way - Basic CRUD</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">        
    </head>
    <body>
        <div class="container">
            <nav>
                <a href="{{ URL::to('/songs')}}">Show All</a> | 
                <a href="{{ URL::to('/songs/create')}}">Add New</a>
                <span class="align-right">Jeffrey Jordan Way</span>
            </nav>
            <div class="content">              
            @yield('content')     
            </div>
        </div>
    </body>
</html>