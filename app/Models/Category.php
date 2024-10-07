<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     protected $guarded=['']; // Mass assignable attributes

     public function oneBlog(){
        return $this->hasOne(Blog::class, 'category_id', 'id');
     }


}
