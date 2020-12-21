<?php

// PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'body' => 'required'
        ], [
            'title.required' => 'Entering the title is required.',
            'title.max' => 'Article title length is too long.',
            'body.required' => 'Entering the description is required.'
        ]);

        $post = new Post([
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);

        $post->save();

        return response()->json('successfully added');
    }

    public function index()
    {
        return new PostCollection(Post::all());
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'body' => 'required'
        ], [
            'title.required' => 'Entering the title is required.',
            'title.max' => 'Article title length is too long.',
            'body.required' => 'Entering the description is required.'
        ]);

        $post = Post::find($id);
        $post->update($request->all());
        return response()->json('successfully updated');
    }

    public function delete($id)
    {
        $post = Post::find($id);

        $post->delete();

        return response()->json('successfully deleted');
    }
}