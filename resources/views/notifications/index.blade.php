<x-app-layout>
    <div class="bg-[#1E1E1E] text-white min-h-screen p-4">
        <div class="max-w-4xl mx-auto">
            <div class="flex justify-between items-center border-b border-yellow-500 pb-2 mb-4">
                <h1 class="text-2xl font-bold">Overzicht Meldingen</h1>
                <a href="#" class="text-sm text-white hover:underline">voeg melding</a>
            </div>

            @if($notifications->count())
                <div class="space-y-4 bg-gray-300 p-4 rounded text-black">
                    @foreach($notifications as $notification)
                        <div class="bg-white p-3 rounded flex justify-between items-center shadow">
                            <div>
                                <p class="font-semibold">{{ $notification->message }}</p>
                                <p class="text-xs text-gray-600">{{ $notification->date }}</p>
                            </div>
                            <div class="flex gap-2">
                                <button class="bg-black text-white px-2 py-1 text-sm rounded">Verstuur</button>
                                <button class="bg-black text-white px-2 py-1 text-sm rounded">Feedback</button>
                            </div>
                        </div>
                    @endforeach

                    <!-- Paginatie -->
                    <div class="flex justify-center items-center space-x-4 pt-4">
                        {{ $notifications->links() }}
                    </div>
                </div>
            @else
                <p class="text-center mt-10 text-white">{{ $message ?? 'Geen meldingen gevonden' }}</p>
            @endif
        </div>
    </div>
</x-app-layout>