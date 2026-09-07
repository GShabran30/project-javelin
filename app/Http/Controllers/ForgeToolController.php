<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForgeTool;

class ForgeToolController extends Controller
{
    public function index(){
        $sessions = ForgeTool::all();
        return view('forge',['sessions' => $sessions]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'status'=>'required|string|max:255',
            'link'=>'nullable|string|max:255',
        ]);

        ForgeTool::create($validated);

        return redirect('/forge');
    }
    //
}
