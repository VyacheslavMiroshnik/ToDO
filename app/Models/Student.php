<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Student extends Model
{
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    protected $fillable = ['surname','name'];
}
