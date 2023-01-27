<?php

namespace App\Models\User\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\Student\StudentGrade
 *
 * @method static \Illuminate\Database\Eloquent\Builder|StudentGrade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentGrade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentGrade query()
 * @mixin \Eloquent
 */
class StudentGrade extends Model
{
    use HasFactory;

    protected $table = "student_grade";

    protected $guarded = [];
}
