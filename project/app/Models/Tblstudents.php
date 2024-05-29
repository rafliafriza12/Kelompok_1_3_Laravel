<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblstudents extends Model
{
    protected $table = 'tblstudents';
    use HasFactory;
    protected $fillable = [
        'registrationNumber',
        'studentName',
        'studentContactNo',
        'studentEmailId',
        'studentQualification',
        'studentAddress',
        'regDate',
        'isActive',
        'isDeskAssign',
    ];
}
