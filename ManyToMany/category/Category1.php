<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category1 extends Model
{
    use HasFactory;
    protected $table = 'category1';
    protected $guarded = [];

    public function post(){
    	return $this->belongsToMany(Post::class , 'category1_post');
    }
}
