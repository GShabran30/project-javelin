    @extends('layouts.app')

    @section('content')
    <h1 class="font-bold text-2xl mb-2">Spearhead — Study Sessions</h1>

    <form method="POST" action="/spearhead" class="bg-white p-10 shadow-2xl rounded-2xl">
        @csrf
        <div>
            <label class="text-sm text-gray-500">Topic</label>
            <input type="text" name="topic"  class="border border-gray-300 rounded-sm px-3 w-full" required>
        </div>
        <div>
            <label class="text-sm text-gray-500">Unit</label>
            <select class="border border-gray-300 rounded-sm px-3 w-full" name="unit">
                <option>Spearhead</option>
                <option>Vault Protocol</option>
                <option>Signal Flare</option>
                <option>Iron Core</option>
                <option>Forge</option>
            </select>
        </div>
        <div>
            <label class="text-sm text-gray-500">Duration (minutes)</label>
            <input class="border border-gray-300 rounded-sm px-3 w-full" type="number" name="duration_minutes" min="1" required>
        </div>
        <div>
            <label class="text-sm text-gray-500">Date</label>
            <input class="border border-gray-300 rounded-sm px-3 w-full" type="date" name="session_date" required>
        </div>
        <button class="bg-teal-700 text-white rounded-lg px-2 mt-4" type="submit">Log Session</button>
    </form>

    <hr class="mt-3">

    <h2 class="font-bold text-2xl mb-2">Logged Sessions</h2>
    <table class="w-full mt-6">
        <thead class="bg-gray-800 text-white text-left">
            <tr>
                <th class="px-4 py-2">Topic</th>
                <th class="px-4 py-2">Unit</th>
                <th class="px-4 py-2">Duration</th>
                <th class="px-4 py-2">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sessions as $session)
            <tr class="border-b border-gray-200">
                <td class="px-4 py-2">{{ $session->topic }}</td>
                <td class="px-4 py-2">{{ $session->unit }}</td>
                <td class="px-4 py-2">{{ $session->duration_minutes }} min</td>
                <td class="px-4 py-2">{{ $session->session_date }}</td>
            </tr>    
            @endforeach
        </tbody>
    </table>
    @endsection