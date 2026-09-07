    @extends('layouts.app')

    @section('content')
    <h1 class="font-bold text-2xl mb-2">Iron Core - IT Issue Log</h1>

    <form method="POST" action="/ironcore" class="bg-white p-10 shadow-2xl rounded-2xl">
        @csrf
        <div>
            <label class="text-sm text-gray-500">Issue</label>
            <input class="border border-gray-300 rounded-sm px-3 w-full" type="text" name="issue" required>
        </div>
        <div>
            <label class="text-sm text-gray-500">Solution</label>
            <textarea class="border border-gray-300 rounded-sm px-3 w-full" name="solution"></textarea>
        </div>
        <div>
            <label class="text-sm text-gray-500">Time to fix (minutes)</label>
            <input class="border border-gray-300 rounded-sm px-3 w-full" type="number" name="time_to_fix_minutes" min="1" required>
        </div>
        <div>
            <label class="text-sm text-gray-500">Logged at</label>
            <input class="border border-gray-300 rounded-sm px-3 w-full" type="date" name="logged_at" required>
        </div>
        <button class="bg-teal-700 text-white rounded-lg px-2 mt-4" type="submit">Log Session</button>
    </form>

    <hr class="mt-3">

    <h2 class="font-bold text-2xl mb-2">Logged Sessions</h2>
    <table class="w-full mt-6">
        <thead class="bg-gray-800 text-white text-left">
            <tr>
                <th class="px-4 py-2">Issue</th>
                <th class="px-4 py-2">Solution</th>
                <th class="px-4 py-2">Time to fix (minutes)</th>
                <th class="px-4 py-2">Logged at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sessions as $session)
            <tr>
                <td class="px-4 py-2">{{ $session->issue }}</td>
                <td class="px-4 py-2">{{ $session->solution }}</td>
                <td class="px-4 py-2">{{ $session->time_to_fix_minutes }} min</td>
                <td class="px-4 py-2">{{ $session->logged_at }}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    @endsection