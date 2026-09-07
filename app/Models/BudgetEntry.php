<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class BudgetEntry extends Model
{
    use HasFactory;

    protected $fillable = ['bucket_name','amount','month'];
    //
}
