<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;
use App\Http\Requests\CreateSongRequest;

class SongsController extends Controller
{
    
    public function __construct(Song $song) {
        $this->song = $song;
    }
     public function index(Song $song){   
        // index(Song $song) // remove agrument by using __construct
        // 
        //$songs = DB::table('songs')->get();
        //$songs = Song::get();
        $songs = $this->song->get();
        //return view('songs.list')->with('songs',$songs);
        return view('songs.list', ['songs' =>$songs]);
    }
    

    public function create(){
        return view('songs.create');
    }
    
    public function store(CreateSongRequest $request, Song $song){
        
       //$input = $request->all(); // 1st option         
       // $song->create($request->all()); // Eloquent Model Based Option
         
       //$song = new Song(); 
       $song->title = $request->get('title');
       $song->lyrics = $request->get('lyrics');
       $song->slug = $request->get('slug');
       $song->save();
       
       return redirect()->route('songs.index');        
    }
    
    public function show(Song $song){      
        // removed for router page 3 bind
        //$song = DB::table('songs')->whereSlug($slug)->first();
        //$song = Song::find($id);
        //$song = $song->whereSlug($slug)->first();
        return view('songs.view')->with('song',$song);
    }
    
    
    
    public function edit(Song $song){
        //emoved for router page 3 bind
        //$song = $this->song->whereSlug($slug)->first();
        return view ('songs.edit')->with('song', $song);
    }
    
       
    public function update(Request $request, Song $song){        
       //$song = $this->song->whereSlug($slug)->first(); //emoved for router page 3 bind             
       //$song->fill( $request->all() )->save(); // this method not work for me :(               
       // Not working - 5:43 am @12 Nov 2015
       $song->title = $request->get('title');
       $song->lyrics = $request->get('lyrics');
       $song->slug = $request->get('slug');
       $song->save();
       
       return redirect('/songs');        
    }
    
    public function destroy(Song $song){
        $song->delete();        
        return redirect('/songs');
    }   
}
