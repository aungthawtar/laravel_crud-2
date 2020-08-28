<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content','image'];

    // public function setTitleAttribute($value){
    //     $this->attributes['title'] = ucfirst($value);
    // }

    // public function getTitleAttribute($value){
    //     return $this->title;
    // }
}
