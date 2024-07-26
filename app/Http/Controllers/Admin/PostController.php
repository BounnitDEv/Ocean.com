<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    function index(){
        $posts = Post::All();
        return view('admin.blog.index', ['posts' => $posts]);
    }

    function create(){
        return view('admin.blog.create');
    }

    function store(Request $request){

        $messages = [
            'required' => ':attribute field is required'
        ];

        $rules = [
            'title'             => 'required',
            'subject'           => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'image'             => 'required',
            'cover'             => 'required',
        ];

        $request->validate($rules, $messages);

        $slug       = str_slug($request->input('title'));

        $image_path = $request->file('image')->store('blog_images');
        $cover_path = $request->file('cover')->store('blog_covers');

        $post = Post::create([

            'slug'              => $slug,
            'title'             => $request->input('title'),
            'subject'           => $request->input('subject'),
            'short_description' => $request->input('short_description'),
            'description'       => $request->input('description'),
            'image'             => $image_path,
            'cover'             => $cover_path,

        ]);
        // dd($post);
        return redirect()->route('admin.post.index')->with('success', 'success');
    }

    public function show($post_id){

        $post = Post::findOrFail($post_id);

        return view('admin/blog/show', compact('post'));
    }

    public function edit($post_id){
        $post = Post::findOrFail($post_id);

        return view('admin/blog/edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $image_path = $post->image;
        $cover_path = $post->cover;

        if($request->file('image')){
            $image_path = $request->file('image')->store('blog_images');
        }

        if($request->file('cover')){
            $cover_path = $request->file('cover')->store('blog_covers');
        }

        $post->update([
            'title'             => $request->title,
            'subject'           => $request->subject,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'image'             => $image_path,
            'cover'             => $cover_path,
            
        ]);

        return redirect()->route('admin.post.index')->with('success', 'success');
    }

    public function destroy($id){
        $post = Post::find($id);

        if(!$post){
            return redirect('admin.post.index');
        }

        $post->delete();

        return redirect()->back()->with('success', 'destroyed');
    
    }

    
}