@extends('layouts.app')

@section('content')

    <h1 class="font-bold text-2xl mb-2">Forge Tool - Tool and Automation Log</h1>

    <form class="bg-white p-10 shadow-2xl rounded-2xl" method="POST" action="/forge">
        @csrf
        <div>
            <label class="text-sm text-gray-500">name</label>
            <input class="border border-gray-300 rounded-sm px-3 w-full" type="text" name="name" required>
        </div>
        <div>
            <label class="text-sm text-gray-500">status</label>
            <input type="text" class="border border-gray-300 rounded-sm px-3 w-full" name="status" required>
        </div>
        <div>
            <label class="text-sm text-gray-500">link</label>
            <input type="text" class="border border-gray-300 rounded-sm px-3 w-full" name="link">
        </div>
        <button class="bg-teal-700 text-white rounded-lg px-2 mt-4" type="submit">Log Session</button>
    </form>

    <hr class="mt-3">

    <h2 class="font-bold text-2xl mb-2">Logged Sessions</h2>
    <table class="w-full mt-6">
        <thead class="bg-gray-800 text-white text-left">
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Link</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($sessions as $session)
            <tr>
                <td class="px-4 py-2">{{ $session->name }}</td>
                <td class="px-4 py-2">{{ $session->status }}</td>
                <td class="px-4 py-2">{!! $session->link ? '<a href="'.$session->link.'">'.$session->link.'</a>' : '-' !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection