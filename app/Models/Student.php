<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->hasMany(User::class);
    }

    public function Classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
