<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function mcqs(){
        return $this->hasMany(Mcq::class, 'category_id' );
    }
}
