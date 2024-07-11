<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Category1;

class TestController extends Controller
{
    public function index(){
                    
            //MANT TO MANY
        
            //post to category        
        $post = Post::find(2);
        return $post->category1;
        // dd($post->toArray());

        // //$post->category1()->detach();
        // //$post->category1()->sync([1,2]);
        // // $post->category1()->attach([1,2]);
        // // $post = Post::with('category1')->first();
        // //return $post;


                //category to Post
        $category1 = Category1::find(3);
        return $category1->post;
        //dd($category1->toArray());

        //$post->category1()->detach();
        //$post->category1()->sync([1,2]);
        // $post->category1()->attach([1,2]);
        // $post = Post::with('category1')->first();


    }
}
