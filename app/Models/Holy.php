<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Holy extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
