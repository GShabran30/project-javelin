@extends('layouts.app')
@section('content')

<h1 class="text-2xl font-bold mb-6">Project Javelin — Command Center</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Vault Protocol</div>
        <div class="p-4">
            @if($lastBudgets)
                <p class="text-xl text-teal-600"> last record: </p>
                <p class="text-2xl font-bold text-teal-600">{{ $lastBudgets->bucket_name }}</p>
                <p class="bg-teal-700 text-white rounded-lg px-2 mt-2 w-fit">Total amount of Money : {{Number::currency($totalBudgets, in: 'IDR')}}</p>
            @else
                <p class="text-xl text-teal-600"> No Entries Yet </p>
            @endif   
                <p class="text-gray-500 mt-1">Budget buckets</p>
                <a href="/vault" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Spearhead</div>
        <div class="p-4">
            @if($lastSessions)
            <p class="text-xl text-teal-600"> Last Session: </p>
            <p class="text-2xl font-bold text-teal-600">{{ $lastSessions->topic }}</p>
            <p class="text-gray-500 mt-1">Study sessions</p>
            @else
                <p class="text-xl text-teal-600"> No Entries Yet </p>
            @endif 
            <a href="/spearhead" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Signal Flare</div>
        <div class="p-4">
            @if($lastPosts)
            <p class="text-xl  text-teal-600"> Last content: </p>
            <p class="text-2xl font-bold text-teal-600">{{ $lastPosts->title }}</p>
            <p class="text-gray-500 mt-1">Content posts</p>
            @else
                <p class="text-xl text-teal-600"> No Entries Yet </p>
            @endif 
            <a href="/signalflare" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Iron Core</div>
        <div class="p-4">
            @if($lastIssues)
            <p class="text-xl  text-teal-600"> Last issue: </p>
            <p class="text-2xl font-bold text-teal-600">{{ $lastIssues->issue }}</p>
            <p class="text-gray-500 mt-1">Issues logged</p>
            @else
                <p class="text-xl text-teal-600"> No Entries Yet </p>
            @endif
            <a href="/ironcore" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Forge</div>
        <div class="p-4">
            @if($lastTools)
            <p class="text-xl  text-teal-600"> Last tool/automation Log: </p>
            <p class="text-2xl font-bold text-teal-600">{{ $lastTools->name }}</p>
            <p class="text-gray-500 mt-1">Tools tracked</p>
            @else
                <p class="text-xl text-teal-600"> No Entries Yet </p>
            @endif
            <a href="/forge" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

</div>

@endsection