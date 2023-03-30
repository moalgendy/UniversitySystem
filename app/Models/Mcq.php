<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcq extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Category::class,'id');
    }

    public function exams(){
        return $this->hasMany(Exam::class, 'mcq_id' );
    }
}
