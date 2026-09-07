<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IssueLog extends Model
{
    protected $fillable = ['issue','solution','time_to_fix_minutes','logged_at'];
    //
}
