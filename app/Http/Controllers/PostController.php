<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
{
    // $this->middleware('auth')/*->except('index', 'show')*/;
    // $this->authorizeResource(Post::class, 'post');
}
    public function index()
    {
        $posts = Post::latest()->paginate(9);

        return view('welcome')->with('posts',$posts);
    }

    public function create()
    {
        return view('posts.create')->with([
            'categories'=>Category::all(),
        ]);
    }


    public function store(StorePostRequest $request)
    {
        $post = Post::create([
            'user_id' =>auth()->user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('welcome');
    }



    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(5),
            'categories' => Category::all()
        ]);

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
