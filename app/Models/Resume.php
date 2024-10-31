<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $table = 'prefinal_table_resume'; // Specify the correct table name

    protected $fillable = [
        'name',
        'objective',
        'skills_design',
        'skills_problem_solving',
        'skills_management',
        'certifications',
        'address',
        'phone',
        'email',
        'additional_skills',
        'education',
        'work_history',
    ];
}
