<form id="recordForm" action="{{ url('/store-record') }}" method="POST" class="max-w-sm mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    @csrf
    <div class="mb-4">
        <label for="forename" class="block font-bold mb-2">Forename:</label>
        <input type="text" name="forename" id="forename" class="border rounded w-full py-2 px-3" required>
    </div>

    <div class="mb-4">
        <label for="surname" class="block font-bold mb-2">Surname:</label>
        <input type="text" name="surname" id="surname" class="border rounded w-full py-2 px-3" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block font-bold mb-2">Email:</label>
        <input type="email" name="email" id="email" class="border rounded w-full py-2 px-3" required>
    </div>

    <div class="mb-4">
        <label for="phone" class="block font-bold mb-2">Phone:</label>
        <input type="text" name="phone" id="phone" class="border rounded w-full py-2 px-3" required>
    </div>

    <button type="submit" class="bg-blue-300 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded">Submit</button>
</form>

@if(session('message'))
    <p class="mt-4 text-green-600">{{ session('message') }}</p>
@endif
