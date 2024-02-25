<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter3 extends Model
{
    use HasFactory;

     protected $guarded = [];

      public function course3(){
        return $this->belongsTo(Course3::class);
    }
}
