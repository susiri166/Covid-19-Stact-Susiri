<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    use HasFactory;
    protected $fillable=[
        'local_new_cases',
        'local_total_cases',
        'local_new_deaths',
        'local_active_cases',
        'global_new_cases',
        'global_total_cases'
        
    ];
}
