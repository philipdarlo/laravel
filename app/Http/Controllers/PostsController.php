<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Posts;

class PostsController extends Controller
{
    public function show($slug)
    {    
        return view('post',[
            'post' => Posts::where('slug', $slug)->firstOrFail()
        ]);
    }
}
