<x-app-layout>
<div class="bg-gray-800 min-h-screen flex flex-col items-center py-10">
    <div class="w-full max-w-lg bg-gray-900 rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-white mb-6 text-center">Pakket toevoegen</h1>
        {{-- Toon validatiefouten --}}
        @if ($errors->any())
            <div class="mb-4">
                <ul class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    @foreach ($errors->all() as $error)
                        <li>
                            @if(str_contains($error, 'type') && str_contains($error, 'unique'))
                                Pakket bestaat al.
                            @else
                                {{ $error }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
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
