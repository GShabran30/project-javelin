<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentPost;

class ContentPostController extends Controller
{
    public function index(){
        $sessions = ContentPost::all();
        return view('signalflare',['sessions' => $sessions]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'platform'=>'required|string|max:255',
            'status'=>'required|string|max:255',
            'publish_date'=>'required|date',
        ]);

        ContentPost::create($validated);

        return redirect('/signalflare');
    }

    public function update(Request $request, ContentPost $id){

        $validated = $request->validate([
            'title'=>'sometimes|string|max:255',
            'platform'=>'sometimes|string|max:255',
            'status'=>'sometimes|string|max:255',
            'publish_date'=>'sometimes|date',
        ]);

        $id->update($validated);
        
        return redirect('/signalflare');
    }
    
}
