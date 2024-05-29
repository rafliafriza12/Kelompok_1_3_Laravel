<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbldeskhistory extends Model
{
    protected $table = 'tbldeskhistory';
    use HasFactory;
    
     protected $fillable = [
        'stduentId',
        'deaskId',
        'assignRemark',
        'assignDate',
        'unassignDate',
        'unassignedRemark',
    ];
}
