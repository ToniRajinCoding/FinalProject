<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Kontroller extends Controller
{
    
	public function postPage(){
		$posts = Post::all();
		return view('Post')->with('post', $posts);
	}

}
