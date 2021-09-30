<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
    	$posts = Post::orderBy('created_at', 'DESC')->take(5)->get();

    	$journalPosts= Post::with('category')->orderBy('created_at', 'DESC')-> paginate(3);
    	
    	return view('website.home', compact(['posts', 'journalPosts']));
    }

    public function journal($slug){
        
        $category = Category::where('slug', $slug)->first();
        
        if($category){
            $posts = Post::where('category_id', $category->id)->OrderBy('created_at', 'DESC')->paginate(1);

            return view('website.journal', compact(['category', 'posts']));
        }else{
            return redirect()->route('website');
        }
    }

    public function continue_reading($slug){

        $post = Post::with('category')->where('slug', $slug)->first();
        
        $posts = Post::with('category')->inRandomOrder()->limit(4)->get(); 
        
        if($post){
            return view('website.continue_reading', compact(['post', 'posts']));
        }
        else{
            return redirect('/');
        }	
    }
    public function contact(){
    	return view('website.contact');
    }
    
}
