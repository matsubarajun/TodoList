<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Remind extends Model
{
    use HasFactory,
        SerializeDate;
    
    protected $fillable = [
        'remind',
        'deadline',
    ];
    
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];
    
}
