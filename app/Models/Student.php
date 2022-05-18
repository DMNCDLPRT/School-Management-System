<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['STUDENT_LRN', 'FIRST_NAME', 'MIDDLE_NAME', 'LAST_NAME', 'AGE', 'YEAR_LEVEL', 'SECTION'];
}
