<x-app-layout>
    <div class="bg-gray-900 min-h-screen py-10">
        <div class="max-w-4xl mx-auto px-4 text-black">
            <h2 class="text-center text-white text-2xl font-bold mb-2">Overzicht Rijlessen</h2>

            {{-- Golden Line Separator --}}
            <div class="h-1 w-full bg-yellow-500 mb-6"></div>

            <div class="text-end mb-4">
                <a href="#" class="text-white text-sm hover:underline">voeg rijles</a>
            </div>

            <div class="bg-gray-300 p-6 rounded shadow-md">
                @if ($lessons->count())
                    @foreach ($lessons as $lesson)
                        <div class="flex justify-between items-center mb-4 bg-white p-4 rounded">
                            <div>
                                <div class="font-semibold">{{ $lesson->startDate }}</div>
                                <div>Instructeur: {{ $lesson->instructor->user->name ?? 'Onbekend' }}</div>
                            </div>
                            <div class="space-x-2">
                                <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 px-3 py-1 text-sm rounded">wijzig</a>
                                <a href="#" class="text-white bg-red-600 hover:bg-red-700 px-3 py-1 text-sm rounded">verwijder</a>
                            </div>
                        </div>
                    @endforeach

                    {{-- Pagination --}}
                    <div class="flex justify-center items-center mt-6 text-white space-x-4 text-lg">
                        {{ $lessons->links() }}
                    </div>
                @else
                    <div class="bg-white text-center p-4 rounded">
                        Geen meldingen gevonden
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
