<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Couple extends Model
{
    use HasFactory;
    public $fillable = [
    'family_name',
        'father_name',
        'mother_name',
        'parents_email',
        'parents_phone',
        'father_id',
        'mother_id',
        'wedding_act'
    ];

}
