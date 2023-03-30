<?php

namespace App\Models;

use App\Models\Section;
use App\Models\Classroom;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facultie extends Model
{
    use HasFactory;
    // use HasTranslations;
    // public $translatable = ['name'];

    protected $fillable=[
        'name','note'
    ];

    public function classrooms(){
        return $this->hasMany(Classroom::class, 'facultie_id');

    }
    public function sections(){
        return $this->hasMany(Section::class, 'facultie_id' );
    }
    
    public function schedul(){
        return $this->hasMany(Schedule::class, 'facultie_id' );
    }
}
