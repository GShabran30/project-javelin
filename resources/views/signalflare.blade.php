    @extends('layouts.app')

    @section('content')
    <h1 class="font-bold text-2xl mb-2">Signal Flare - content calendar</h1>

    <form class="bg-white p-10 shadow-2xl rounded-2xl" method="POST" action="/signalflare">
        @csrf
        <div>
            <label class="text-sm text-gray-500">Title</label>
            <input class="border border-gray-300 rounded-sm px-3 w-full" type="text" name="title" required>
        </div>

        <div>
            <label class="text-sm text-gray-500">Platform</label>
            <input class="border border-gray-300 rounded-sm px-3 w-full" type="text" name="platform" required>
        </div>

        <div>
            <label class="text-sm text-gray-500">Unit</label>
            <select class="border border-gray-300 rounded-sm px-3 w-full" name="status">
                <option>Idea</option>
                <option>Writing</option>
                <option>Ready</option>
                <option>Posted</option>
            </select>
        </div>

        <div>
            <label class="text-sm text-gray-500">Date</label>
            <input class="border border-gray-300 rounded-sm px-3 w-full" type="date" name="publish_date" required>
        </div>

        <button class="bg-teal-700 text-white rounded-lg px-2 mt-4" type="submit">Add Post</button>
    </form>

    <hr>

    <h2>Logged Sessions</h2>
    <table class="w-full mt-6">
        <thead class="bg-gray-800 text-white text-left">
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Platform</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Date Published</th>
                <th class="px-4 py-2">(Status Checker)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sessions as $session)
            <tr>
                <td class="px-4 py-2">{{ $session->title }}</td>
                <td class="px-4 py-2">{{ $session->platform }}</td>
                <td class="px-4 py-2">{{ $session->status }}</td>
                <td class="px-4 py-2">{{ $session->publish_date }}</td>
                <td class="px-4 py-2">
                    <form method="POST" action="/signalflare/{{$session->id}}">
                        @csrf
                        @method('PUT')

                        <div>
                            <label class="text-sm text-gray-500">Unit</label>
                            <select class="border border-gray-300 rounded-sm px-3 w-full" name="status">
                                <option disabled selected hidden>Choose status</option>
                                <option>Idea</option>
                                <option>Writing</option>
                                <option>Ready</option>
                                <option>Posted</option>
                            </select>
                        </div>

                        <button class="bg-teal-700 text-white rounded-lg px-2 mt-4" type="submit">Save status</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        
        
    </table>
    @endsection