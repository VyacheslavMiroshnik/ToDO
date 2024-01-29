<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Group extends Model
{
  protected $fillable = ['title', 'start_from', 'is_active'];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
