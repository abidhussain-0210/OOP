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
                    //ONE TO MANY
                    //user To Post
        $user = User::with('post')->find(2);
        return $user;
        
                    //post To user
        $post = Post::with('user')->find(2);
        return $post;

    }
}
