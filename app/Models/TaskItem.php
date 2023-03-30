<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskItem extends Model
{
    use HasFactory;
    
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
    
    public function getCompletedFlagAttribute($value)
    {
        return $value == 1;
    }
}