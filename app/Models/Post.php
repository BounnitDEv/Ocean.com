<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [

        'slug',
        'title',
        'image',
        'cover',
        'subject',
        'short_description',
        'description',
    ];

    public function getUrlAttribute(){
        return url('post', $this->slug); 
    }

    public function getImageUrlAttribute(){
        return url('storage') . '/' . $this->image; 
    }

    public function getCoverUrlAttribute(){
        return url('storage') . '/' . $this->cover; 
    }

}
