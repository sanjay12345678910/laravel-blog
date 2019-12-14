<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
    	$title='Welcome to laravel';
    	return view('pages.index')->with('indextitle',$title);
    }
    public function home(){
        $post=Post::orderBy('created_at','desc')->take(8)->get();
        $data=Post::orderBy('created_at','desc')->take(3)->get();
        $science=Post::where('category','=','science')->get();
        $politics=Post::where('category','=','politics')->get();
        return view('pages.home')->with('post',$post)->with('data',$data)->with('science',$science)
        ->with('politics',$politics);
    }
    public function about(){
    	$title='About us';
    	return view('pages.about')->with('title',$title);
    }
    public function services(){
    	$data=array(
        'title' => 'Services',
        'services' => ['Web Desing','Programming','SEO']);

    	return view ('pages.services')->with($data);
    }
}

