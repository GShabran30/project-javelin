    @extends('layouts.app')

    @section('content')

    <h1 class="font-bold text-2xl mb-2">Vault Protocol</h1>
    
    <form class="bg-white p-10 shadow-2xl rounded-2xl" method="POST" action="/vault">
    @csrf

    <div>
        <label class="text-sm text-gray-500" >Bucket Name</label>
        <input class="border border-gray-300 rounded-sm px-3 w-full" type="text" name="bucket_name" required>
    </div>
    <div>
        <label class="text-sm text-gray-500" >Amount</label>
        <input class="border border-gray-300 rounded-sm px-3 w-full" type="number" name="amount" required>
    </div>
    <div>
        <label class="text-sm text-gray-500">Date</label>
        <input class="border border-gray-300 rounded-sm px-3 w-full" type="month" name="month" required>
    </div>

    <div>
        <button class="bg-teal-700 text-white rounded-lg px-2 mt-4" type="submit">Add to Vault</button>
    </div>

    </form>


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
                <td class="px-4 py-2">{{ \Carbon\Carbon::parse($entry->month)->format('F Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <div class="bg-teal-700 text-white rounded-lg px-2 mt-4">
            Total amount of Money : {{Number::currency($totals, in: 'IDR')}}
        </div>

    @endsection