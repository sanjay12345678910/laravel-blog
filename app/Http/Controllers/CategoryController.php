<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CategoryController extends Controller
{
    public function index(){
    	$category=Post::orderBy('created_at','desc')->get();
    	return view('category.index')->with('category',$category);
    }
    public function politics(){
    	$category=Post::Where('category','=','politics')->get();
        $data=Post::orderBy('created_at','desc')->take(8)->get();
    	return view('category.politics')->with('category',$category)->with('data',$data);
    }
    public function science(){
    	$category=Post::Where('category','=','science')->get();
        $data=Post::orderBy('created_at','desc')->take(8)->get();
    	return view('category.science')->with('category',$category)->with('data',$data);
    }
    public function health(){
    	$category=Post::Where('category','=','health')->get();
        $data=Post::orderBy('created_at','desc')->take(8)->get();
    	return view('category.health')->with('category',$category)->with('data',$data);
    }
    public function crime(){
        $category=Post::where('category','=','crime')->get();
        $data=Post::orderBy('created_at','desc')->take(8)->get();
        return view('category.crime')->with('category',$category)->with('data',$data);
    }
}
