<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BudgetEntry;
use App\Models\StudySession;
use App\Models\ContentPost;
use App\Models\IssueLog;
use App\Models\ForgeTool;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
            'budgets'  => BudgetEntry::all(),
            'sessions' => StudySession::all(),
            'posts'    => ContentPost::all(),
            'issues'   => IssueLog::all(),
            'tools'    => ForgeTool::all(),
        ]);
    }
    //
}
