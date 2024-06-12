<?php

namespace App\Models;

use App\Models\Couple;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'city',
        'hospital_act',
        'couples_id',
    ];

    public function couples(): BelongsTo
    {
        return $this->belongsTo(Couple::class);
    }

    
}
