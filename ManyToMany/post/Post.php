<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $guarded = [];

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function category1(){
    	return $this->belongsToMany(Category1::class , 'category1_post');
    }
}
