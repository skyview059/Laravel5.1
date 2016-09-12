<?php

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * Description of Song
 *
 * @author Kanny
 */
class Song extends Eloquent {
    //Empty but it will work. :) 
	
    protected $filable = array('title', 'slug', 'lyrics');
}