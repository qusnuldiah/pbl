<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AlumniSurvey extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_nim',
        'profession_category_id',
        'profession_id',
        'phone',
        'email',
        'first_work_date',
        'waiting_period',
        'institution_type',
        'institution_name',
        'institution_location',
        'institution_scale',
        'first_institution_work_date',
        'supervisor_name',
        'supervisor_position',
        'supervisor_email',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_nim');
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'profession_id');
    }

    public function professionCategory()
    {
        return $this->belongsTo(ProfessionCategory::class, 'profession_category_id');
    }
}
