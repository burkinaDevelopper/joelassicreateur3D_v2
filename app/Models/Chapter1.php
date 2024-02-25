<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter1 extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course1(){
        return $this->belongsTo(Course1::class);
    }
}
