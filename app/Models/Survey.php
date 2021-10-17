<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'option1',
        'option2',
        'option3',
        'option4',
        'option5',
        'option6',
        'option7',
        'option8',
        'option9',
        'option10',
        'option11',
        'option12',
        'option13',
        'option14',
        'option15',
        'option16',
        'option17',
        'option18',
        'option19',
        'option20',
        'option21',
        'option22',
        'option23',
        'option24',
        'option25',
        'option26',
        'option27',
        'option28',
    ];
    protected $casts = [
        'dia' => 'datetime',

    ];
}
