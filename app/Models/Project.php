<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [

        'slug',
        'name',
        'field',
        'client',
        'link',
        'image',
        'cover',
        'short_description',
        'description',
    ];

    public function getUrlAttribute(){
        return url('project', $this->slug); 
    }

    public function getImageUrlAttribute(){
        return url('storage') . '/' . $this->image; 
    }

    public function getCoverUrlAttribute(){
        return url('storage') . '/' . $this->cover; 
    }
    
}
