<x-app-layout>
    <div class="container mx-auto p-4 text-white">
        <h1 class="text-2xl font-bold mb-4">Overzicht Rijlessen</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-500 text-white p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @if($drivingLessons->count())
            <div class="bg-gray-200 text-black rounded p-4">
                @foreach($drivingLessons as $lesson)
                    <div class="flex justify-between items-center bg-white p-2 mb-2 rounded">
                        <div>
                            <strong>Datum:</strong> {{ \Carbon\Carbon::parse($lesson->startDate)->format('d-m-Y') }}<br>
                            <strong>Tijd:</strong> {{ \Carbon\Carbon::parse($lesson->startDate)->format('H:i') }} - {{ \Carbon\Carbon::parse($lesson->endDate)->format('H:i') }}
                        </div>
                        <div class="flex gap-2">
                            <a href="#" class="text-blue-500 hover:underline">wijzig</a>
                            <a href="#" class="text-red-500 hover:underline">verwijder</a>
                        </div>
                    </div>
                @endforeach

                <div class="text-center mt-4">
                    {{ $drivingLessons->links() }}
                </div>
            </div>
        @else
            <p class="text-lg mt-4">Geen rijlessen gepland</p>
        @endif
    </div>
</x-app-layout>
