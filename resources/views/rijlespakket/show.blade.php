<x-app-layout>
    <div class="bg-gray-800 min-h-screen flex flex-col items-center py-10">
        <div class="w-full max-w-xl bg-gray-900 rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold text-white mb-6 text-center">{{ $package->type }}</h1>
            <ul class="text-white mb-6">
                <li><strong>Aantal lessen:</strong> {{ $package->numberOfLessons }}</li>
                <li><strong>Prijs per les:</strong> €{{ number_format($package->pricePerLesson, 2, ',', '.') }}</li>
                <li><strong>Actief:</strong> {{ $package->isActive ? 'Ja' : 'Nee' }}</li>
                <li><strong>Opmerking:</strong> {{ $package->note }}</li>
            </ul>
            <a href="{{ route('rijlespakket.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Terug</a>
        </div>
    </div>
</x-app-layout>
