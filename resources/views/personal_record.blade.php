<div>
    <table class="min-w-full bg-white">
        <thead>
        <tr class="bg-blue-300 border-b">
            <th class="px-6 py-3 text-left text-white uppercase">ID</th>
            <th class="px-6 py-3 text-left text-white uppercase">Forename</th>
            <th class="px-6 py-3 text-left text-white uppercase">Surname</th>
            <th class="px-6 py-3 text-left text-white uppercase">Email</th>
            <th class="px-6 py-3 text-left text-white uppercase">Phone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr class="border-b hover:bg-gray-200">
                <td class="px-6 py-4">{{ $record['id'] }}</td>
                <td class="px-6 py-4">{{ $record['forename'] }}</td>
                <td class="px-6 py-4">{{ $record['surname'] }}</td>
                <td class="px-6 py-4">{{ $record['email'] }}</td>
                <td class="px-6 py-4">{{ $record['phone'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
