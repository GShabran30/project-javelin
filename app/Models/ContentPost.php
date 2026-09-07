<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContentPost extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','platform','status','publish_date'];
    //
}
