<x-app-layout>
<div class="bg-gray-800 min-h-screen flex flex-col items-center py-1">
    <div class="w-full max-w-lg bg-gray-900 rounded-lg shadow-lg p-2">
        <h1 class="text-3xl font-bold text-white mb-6 text-center">Auto toevoegen</h1>
        <!-- Formulier voor het toevoegen van een auto -->
        <form id="carForm" method="POST" action="{{ route('autos.store') }}">
            @csrf
            <!-- Merk invoerveld -->
            <div class="mb-4">
                <label class="block text-white mb-2" for="brand">Merk</label>
                <input type="text" name="brand" id="brand" class="w-full rounded px-3 py-2 bg-gray-700 text-black placeholder-gray-300 focus:text-black" required>
            </div>
            <!-- Model invoerveld -->
            <div class="mb-4">
                <label class="block text-white mb-2" for="model">Model</label>
                <input type="text" name="model" id="model" class="w-full rounded px-3 py-2 bg-gray-700 text-black placeholder-gray-300 focus:text-black" required>
            </div>
            <!-- Kenteken invoerveld -->
            <div class="mb-4">
                <label class="block text-white mb-2" for="licensePlate">Kenteken</label>
                <input type="text" name="licensePlate" id="licensePlate" class="w-full rounded px-3 py-2 bg-gray-700 text-black placeholder-gray-300 focus:text-black" required>
            </div>
            <!-- Brandstof dropdown -->
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
            <!-- Actief dropdown -->
            <div class="mb-4">
                <label class="block text-white mb-2" for="isActive">Actief</label>
                <select name="isActive" id="isActive" class="w-full rounded px-3 py-2 bg-gray-700 text-black focus:text-black">
                    <option value="1">Ja</option>
                    <option value="0">Nee</option>
                </select>
            </div>
            <!-- Opmerking tekstvak -->
            <div class="mb-4">
                <label class="block text-white mb-2" for="note">Opmerking</label>
                <textarea name="note" id="note" class="w-full rounded px-3 py-2 bg-gray-700 text-black placeholder-gray-300 focus:text-black"></textarea>
            </div>
            <!-- Switch voor unhappy (simuleert netwerkfout) -->
            <div class="mb-4 flex items-center">
                <label class="block text-white mb-2 mr-4" for="unhappySwitch">Unhappy</label>
                <input type="checkbox" id="unhappySwitch" name="unhappySwitch" class="toggle-checkbox h-6 w-6 rounded bg-gray-700 border-2 border-gray-400 focus:ring-0">
            </div>
            <!-- Foutmelding bij unhappy -->
            <div id="errorMsg" class="text-red-500 mb-4 hidden">
                Sorry, geen network. Probeer het later opnieuw.
            </div>
            <!-- Actieknoppen -->
            <div class="flex justify-between">
                <a href="{{ route('autos') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Annuleren</a>
                <button type="submit" id="saveBtn" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Opslaan</button>
            </div>
        </form>
    </div>
</div>
</x-app-layout>

<script>
    // Voorkom verzenden als unhappy is aangevinkt, toon foutmelding
    document.getElementById('carForm').addEventListener('submit', function(e) {
        const unhappy = document.getElementById('unhappySwitch').checked;
        const errorMsg = document.getElementById('errorMsg');
        if (unhappy) {
            e.preventDefault();
            errorMsg.classList.remove('hidden');
        }
    });
</script>
