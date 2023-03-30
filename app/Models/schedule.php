<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;




    public function classrooms(){
        return $this->belongsTo(Classroom::class,'classroom_id');
    }
    public function faculties(){
        return $this->belongsTo(Facultie::class,'facultie_id');
    }
}
