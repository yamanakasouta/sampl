<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index(Post $post)
    {
<<<<<<< HEAD
        return view('posts/show')->with(['post' => $post]);
=======
        return view('posts/index')->with(['posts' => $post->getPaginateBylimit(1)]); 
>>>>>>> dev_basis02
    }
    
    public function show(Post $post)
{
    return view('posts/show')->with(['post' => $post]);
    //
}
}
?>