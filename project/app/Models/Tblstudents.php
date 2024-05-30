<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblstudents extends Model
{
    protected $table = 'tblstudents';
    use HasFactory;
    public $timestamps = false;
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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (is_null($model->regDate)) {
                $model->regDate = Carbon::now();
            }
        });
    }

}
