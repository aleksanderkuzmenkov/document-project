<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    use HasFactory;

    
    public static function getData(){
        
        return Persons::where('user_id', auth()->user()->id);
    }
}
