<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter2 extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course2(){
        return $this->belongsTo(Course2::class);
    }
}
