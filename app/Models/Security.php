<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    use HasFactory;




    // public static function checkUser()
    // {
    //     $users = Self::all();
    //     if(count($users) < 1){
    //         $data = [
    //             'id'=>1,
    //         ];
    //         foreach (config('app.languages') as $key => $value) {
    //             $data[$key]['title'] = $value;
    //         }
    //         Self::create($data);
    //     }

    //     return Self::first();
        
    // }
}
