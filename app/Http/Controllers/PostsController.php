<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;


use DB;

class PostsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //$posts = Post::orderBy('title','asc')->get();
        $posts = DB::select('SELECT * FROM posts');

        return view('posts.index', compact('posts', $posts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'book_image' => 'image|nullable|max:1999'
        ]);
        //handle the file upload
        if($request->hasFile('book_image')){
            //get file name with extension
            $filenameWithExt = $request->file('book_image')->getClientOriginalName();
            //get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get the extension
            $extension = $request->file('book_image')->getClientOriginalExtension();
            //filename store into DB
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('book_image')->storeAs('public/book_image', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body'); 
        $post->user_id = auth()->user()->id;
        $post->book_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post created.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized page');
        }
        return view('posts.edit')->with('post', $post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'book_image' => 'image|nullable|max:1999'
        ]);
        //handle the file upload
        if($request->hasFile('book_image')){
            //get file name with extension
            $filenameWithExt = $request->file('book_image')->getClientOriginalName();
            //get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get the extension
            $extension = $request->file('book_image')->getClientOriginalExtension();
            //filename store into DB
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('book_image')->storeAs('public/book_image', $fileNameToStore);
        }
      
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body'); 
        if($request->hasFile('book_image')){
            $post->book_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized page.');
        }

        if($post->book_image != 'noimage.jpg'){
            Storage::delete('public/book_image/'.$post->book_image);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post removed.');
    }

    public function search(Request $request)
    {
       $request->validate([
           'query'=>'required',

       ]);

       $query = $request->input('query');
       $posts = Post::where('title','like',"%$query%")->orWhere('body','like',"%$query")->paginate(6);
       //dd($posts);
       return view('/posts/searched-results', compact('posts'));
    }
}
