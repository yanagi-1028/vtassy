<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function add()
    {
        return view('/post/create');
    }
    public function create(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable',
            ]);
        $post = new Post;
        $form = $request->all();
        $post->user_id = Auth::user()->id;
        $post->title = $validate['title'];
        $post->content = $validate['content'];
        
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $post->image_path = basename($path);
      } else {
          $post->image_path = null;
      }
      
     
        $post->save();
        
     
        return redirect('post/front');
        
    }
    public function index(Request $request)
    {
        $posts = Post::all()->sortByDesc('updated_at');
        
        if (count($posts) >0) {
            $headline = $posts->shift();
        }else {
            $headline = null;
        }
        return view('/front', ['headline' => $headline, 'posts'=> $posts]);
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        
        return view('post.show', ['post' => $post]);
    }
 
}
