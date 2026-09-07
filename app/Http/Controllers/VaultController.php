<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BudgetEntry;

class VaultController extends Controller
{
    public function index(){
        $entries = BudgetEntry::all();
        return view('vault',['entries' => $entries]);
    }
    //
}
