<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IssueLog;

class IssueLogController extends Controller
{
    public function index(){
        $sessions = IssueLog::all();
        return view('ironcore',['sessions' => $sessions]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'issue'=>'required|string|max:255',
            'solution'=>'required|string',
            'time_to_fix_minutes'=>'required|integer|min:1',
            'logged_at'=>'required|date',
        ]);

        IssueLog::create($validated);

        return redirect('/ironcore');
    }
    //
}
