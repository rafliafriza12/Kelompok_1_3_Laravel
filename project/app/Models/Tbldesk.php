<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbldesk extends Model
{
    protected $table = 'tbldesk';
    use HasFactory;
    protected $fillable = [
        'deskNumber',
        'laptopChargerScoket',
        'isOccupied',
        'postingDate',
    ];
}
