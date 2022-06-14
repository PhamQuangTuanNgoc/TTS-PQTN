<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Repositories\Post\PostRepositoryInterface;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function index()
    {
        $posts = $this->postRepository->getAll();

        return view('home.posts', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return redirect()->back();
    }
    public function create(){
        return view('home.addpost');
    }
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title') ;
        $post->view = $request->input('view') ;
        $post->content = $request->input('content');
        $post->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $post = Post::findOrFail($id);
        $post->update($data);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->postRepository->delete($id);
        return redirect()->back();
    }
}
