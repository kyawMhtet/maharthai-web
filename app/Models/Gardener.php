<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gardener extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        // 'instock_status',
        'name',
        'photo',
        'position' => 'Gardener',
        'date_of_birth',
        'nationality',
        'religion',
        'weight',
        'height',
        'salary',
        'language',
        'status',
        'full_part',
        'live_in_out',
        'experience',
        'skill',
        'pet',
        'pet_note',
        'note',
        'remark',
        'vaccine',
        'stockstatus',
    ];
}
