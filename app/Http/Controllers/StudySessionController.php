<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudySession;

class StudySessionController extends Controller
{
    public function index(){
        $sessions = StudySession::all();
        return view('spearhead',['sessions' => $sessions]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'topic'=>'required|string|max:255',
            'unit'=>'required|string|max:255',
            'duration_minutes'=>'required|integer|min:1',
            'session_date'=>'required|date',
        ]);

        StudySession::create($validated);

        return redirect('/spearhead');
    }
    //
}
