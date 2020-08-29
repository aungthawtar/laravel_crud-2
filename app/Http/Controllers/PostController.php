<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(8);
        return view('admin/post/index',compact('posts'));
    }

    public function create()
    {
        return view('admin/post/create');
    }

    public function store(Request $request)
    {
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        // return redirect('admin/post');

        // $image = $request->file('image');
        // $imageName = time().$image->getClientOriginalName();
        // $path = '/images';
        // $imagePath = public_path($path);
        // $image->move($imagePath,$imageName);


        if(! $request->hasFile('image')){
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }else{
            $imageName = time(). $request->file('image')->getClientOriginalName();
            $path = '/images';
            $imagePath = public_path($path);
            $request->file('image')->move($imagePath,$imageName);
            Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $path . '/' . $imageName,
            ]);
        }

        // image to upload to storage
        
        // if($request->hasFile('image')){
        //     foreach($request->file('image') as $image){
        //         $imageName = time().'/'.$image->getClientOriginalName();
        //         $image->storeAs('upload',$imageName);
        //     }
        // }


        return redirect('admin/post');

    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('admin/post/show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin/post/edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('admin/post');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/post');
    }
}
