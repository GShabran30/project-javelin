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

    public function store(Request $request){
        $validated = $request->validate([
            'bucket_name' => 'required|string|max:255',
            'amount' => 'required|integer|min:1',
            'month' => 'required|date_format:Y-m'
        ]);

        $validated['month'] = $validated['month'] . '-01';

        BudgetEntry::create($validated);

        return redirect('/vault');
    }
    //
}
