@extends('layouts.app')
@section('content')

<h1 class="text-2xl font-bold mb-6">Project Javelin — Command Center</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Vault Protocol</div>
        <div class="p-4">
            <p class="text-4xl font-bold text-teal-600">{{ $budgets->count() }}</p>
            <p class="text-gray-500 mt-1">Budget buckets</p>
            <a href="/vault" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Spearhead</div>
        <div class="p-4">
            <p class="text-4xl font-bold text-teal-600">{{ $sessions->count() }}</p>
            <p class="text-gray-500 mt-1">Study sessions</p>
            <a href="/spearhead" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Signal Flare</div>
        <div class="p-4">
            <p class="text-4xl font-bold text-teal-600">{{ $posts->count() }}</p>
            <p class="text-gray-500 mt-1">Content posts</p>
            <a href="/signalflare" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Iron Core</div>
        <div class="p-4">
            <p class="text-4xl font-bold text-teal-600">{{ $issues->count() }}</p>
            <p class="text-gray-500 mt-1">Issues logged</p>
            <a href="/ironcore" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow">
        <div class="bg-gray-800 text-white px-4 py-3 rounded-t-lg font-semibold">Forge</div>
        <div class="p-4">
            <p class="text-4xl font-bold text-teal-600">{{ $tools->count() }}</p>
            <p class="text-gray-500 mt-1">Tools tracked</p>
            <a href="/forge" class="text-teal-600 hover:underline text-sm mt-3 inline-block">Open →</a>
        </div>
    </div>

</div>

@endsection