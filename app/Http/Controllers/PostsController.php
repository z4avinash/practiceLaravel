<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($name){
        // $posts = [
        //     'avinash'=>'I am learning Laravel 8',
        //     'raubinsh'=>'I am learning more about full stack development',
        //     'ayush'=>'I am learning Node.js'
        // ];

        $post = POST::where('name', $name )->firstOrFail();
        return view('post',['post'=>$post]);
        // if(!$post){
        //     abort(404);
        // }
        // else{
            // return view('post',['post'=>$post]);
        // }
    }
}
