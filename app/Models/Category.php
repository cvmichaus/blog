<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];


        public function getRouteKeyName()
        {
            return 'slug';
        }

        //relacion 1 a muchos
        public function posts(){
            return $this->hasMany(Post::class);
        }
}
