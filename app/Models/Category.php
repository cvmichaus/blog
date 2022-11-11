<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

        //relacion 1 a muchos
        public function posts(){
            return $this->hasMany(Post::class);
        }
}
