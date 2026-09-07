<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudySession extends Model
{
    use HasFactory;
    
    protected $fillable = ['topic','unit','duration_minutes','session_date'];
    //
}
