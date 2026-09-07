    @extends('layouts.app')

    @section('content')

    <h1 class="font-bold text-2xl mb-2">Vault Protocol</h1>

    <table class="w-full mt-6">
        <thead class="bg-gray-800 text-white text-left">
            <tr>
                <th class="px-4 py-2">Bucket</th>
                <th class="px-4 py-2">Amount (Rp.)</th>
                <th class="px-4 py-2">Months</th>
            </tr>            
        </thead>
        <tbody>
            @foreach ($entries as $entry)
            <tr>
                <td class="px-4 py-2">{{$entry->bucket_name}}</td>
                <td class="px-4 py-2">{{number_format($entry->amount)}}</td>
                <td class="px-4 py-2">{{$entry->month}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection