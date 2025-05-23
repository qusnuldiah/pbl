<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudy extends Model
{

    use HasFactory;
    protected $fillable = ['name'];

    public function student()
    {
        return $this->hasMany(Student::class, 'nim');
    }
}
