<x-app-layout>
<div class="bg-gray-800 min-h-screen flex flex-col items-center py-1">
    <div class="w-full max-w-lg bg-gray-900 rounded-lg shadow-lg p-2">
        <h1 class="text-3xl font-bold text-white mb-6 text-center">Auto toevoegen</h1>
        <form method="POST" action="{{ route('autos.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-white mb-2" for="brand">Merk</label>
                <input type="text" name="brand" id="brand" class="w-full rounded px-3 py-2 bg-gray-700 text-black placeholder-gray-300 focus:text-black" required>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="model">Model</label>
                <input type="text" name="model" id="model" class="w-full rounded px-3 py-2 bg-gray-700 text-black placeholder-gray-300 focus:text-black" required>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="licensePlate">Kenteken</label>
                <input type="text" name="licensePlate" id="licensePlate" class="w-full rounded px-3 py-2 bg-gray-700 text-black placeholder-gray-300 focus:text-black" required>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="fuelType">Brandstof</label>
                <select name="fuelType" id="fuelType" class="w-full rounded px-3 py-2 bg-gray-700 text-black focus:text-black" required>
                    <option value="">Kies brandstof</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Benzine">Benzine</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Petrol">Petrol</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="isActive">Actief</label>
                <select name="isActive" id="isActive" class="w-full rounded px-3 py-2 bg-gray-700 text-black focus:text-black">
                    <option value="1">Ja</option>
                    <option value="0">Nee</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="note">Opmerking</label>
                <textarea name="note" id="note" class="w-full rounded px-3 py-2 bg-gray-700 text-black placeholder-gray-300 focus:text-black"></textarea>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('autos') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Annuleren</a>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Opslaan</button>
            </div>
        </form>
    </div>
</div>
</x-app-layout>
