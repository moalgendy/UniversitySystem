<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public $table = 'exams';

    protected $guarded=[];

    public function mcqs(){
        return $this->belongsTo(Mcq::class,'id');
    }
}
