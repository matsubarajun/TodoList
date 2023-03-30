<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    public function taskItems()
    {
        return $this->hasMany(TaskItem::class);
    }
    
    public function delete()
    {
        $this->taskItems()->delete();
        
        return parent::delete();
    }
}
