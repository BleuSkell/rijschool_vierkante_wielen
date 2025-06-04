<x-app-layout>
<div class="bg-gray-800 min-h-screen flex flex-col items-center py-10">
    <div class="w-full max-w-lg bg-gray-900 rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-white mb-6 text-center">Pakket toevoegen</h1>
        <form id="packageForm" method="POST" action="{{ route('packages.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-white mb-2" for="type">Type</label>
                <input type="text" name="type" id="type" class="w-full rounded px-3 py-2 bg-gray-700 text-white" required>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="numberOfLessons">Aantal lessen</label>
                <input type="number" name="numberOfLessons" id="numberOfLessons" class="w-full rounded px-3 py-2 bg-gray-700 text-white" min="1" required>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="pricePerLesson">Prijs per les</label>
                <input type="number" step="0.01" name="pricePerLesson" id="pricePerLesson" class="w-full rounded px-3 py-2 bg-gray-700 text-white" min="0" required>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="isActive">Actief</label>
                <select name="isActive" id="isActive" class="w-full rounded px-3 py-2 bg-gray-700 text-white">
                    <option value="1">Ja</option>
                    <option value="0">Nee</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2" for="note">Opmerking</label>
                <textarea name="note" id="note" class="w-full rounded px-3 py-2 bg-gray-700 text-white"></textarea>
            </div>
            <!-- Switch voor unhappy (simuleert netwerkfout) -->
            <div class="mb-4 flex items-center">
                <label class="block text-white mb-2 mr-4" for="unhappySwitch">Network</label>
                <input type="checkbox" id="unhappySwitch" name="unhappySwitch" class="toggle-checkbox h-6 w-6 rounded bg-gray-700 border-2 border-gray-400 focus:ring-0">
            </div>
            <!-- Foutmelding bij unhappy -->
            <div id="errorMsg" class="text-red-500 mb-4 hidden">
                Sorry, geen network. Probeer het later opnieuw.
            </div>
            <div class="flex justify-between">
                <a href="{{ route('rijlespakket.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Annuleren</a>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Opslaan</button>
            </div>
        </form>
    </div>
</div>
</x-app-layout>

<script>
    document.getElementById('packageForm').addEventListener('submit', function(e) {
        const unhappy = document.getElementById('unhappySwitch').checked;
        const errorMsg = document.getElementById('errorMsg');
        if (unhappy) {
            e.preventDefault();
            errorMsg.classList.remove('hidden');
        }
    });
</script>
