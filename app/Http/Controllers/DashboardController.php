<?php

namespace App\Http\Controllers;

use App\Models\BudgetEntry;
use App\Models\StudySession;
use App\Models\ContentPost;
use App\Models\IssueLog;
use App\Models\ForgeTool;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
            'lastBudgets'  => BudgetEntry::latest()->first(),
            'totalBudgets' => BudgetEntry::sum('amount'),
            'lastSessions' => StudySession::latest()->first(),
            'lastPosts'    => ContentPost::latest()->first(),
            'lastIssues'   => IssueLog::latest()->first(),
            'lastTools'    => ForgeTool::latest()->first(),
        ]);
    }

    //
}
