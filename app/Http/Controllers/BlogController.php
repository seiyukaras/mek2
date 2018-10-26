<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comentarios;
use App\Models\Reply;

class BlogController extends Controller
{
    public function listBlog(Request $request) 
    {
    	$blogs = Blog::with('comments')->paginate(10);

    	return view('newblog', compact('blogs'));
    }

    public function listadoBlog(Request $request) 
    {
    	$blogs = Blog::with('comments')->paginate(10);

    	return view('blog', compact('blogs'));
    }

    public function viewBlog($id) 
    {
    	$blog = Blog::with('comments.replys')->find($id);

    	return view('viewblog', compact('blog'));
    }

    public function createBlog(Request $request) 
    {	
    	$blog = new Blog();
    	$blog->titulo = $request->get('titulo');
    	$blog->descripcion = $request->get('descripcion');
    	foreach($request->file() as $file) {
    		$imgName = $file->getClientOriginalName();
        	$file->move(public_path('images_blog'), $imgName);
    	}
    	$blog->foto = $imgName;
    	$blog->save();
    	return redirect()->route('listBlog');
    }

    public function createComments(Request $request) 
    {	
    	$comment = new Comentarios();
    	$comment->name = $request->get('name');
    	$comment->comentario = $request->get('comentario');
    	$comment->blog_id = $request->get('blog_id');
    	$comment->save();
    	return redirect()->route('viewBlog', ['id' => $request->get('blog_id')]);
    }

    public function createCommreply(Request $request) 
    {	
    	$reply = new Reply();
    	$reply->comentario_id = $request->get('comments_id');
    	$reply->comentario = $request->get('reply');
    	$reply->save();
    	return redirect()->route('viewBlog', ['id' => $request->get('blog_id')]);
    }

    public function destroy($id) {
    	$reserva = Blog::find($id);
    	unlink(public_path('images_blog/'.$reserva->foto));
    	$reserva->delete();
    	return redirect()->route('listBlog');
    }
}
