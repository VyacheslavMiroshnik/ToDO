<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\User;

class Group extends Model
{
    public function student()
    {
        return $this->hasMany(Student::class);
    }
  protected $fillable = ['title','start_from','isActive'];
}
