<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;

class SongsController extends Controller
{
     public function index(Song $song){        
        //$songs = DB::table('songs')->get();   // with empty pram index( ) method 
        //$songs = Song::get();                 // with empty pram index( ) method 
        $songs = $song->get();
        return view('songs.list')->with('songs',$songs);
    }
        
    public function view(Song $song){        
        //$song = DB::table('songs')->whereSlug($slug)->first();
        //$song = Song::find($id);
        return view('songs.view')->with('song',$song);
    }
    
    public function edit(Song $song){
        //$song = DB::table('songs')->find($id);       
        //$song = Song::find($id);
        return view ('songs.edit')->with('song', $song);
    }
}
