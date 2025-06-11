<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">
            Instructeurs
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('instructors.create') }}" 
                   class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Nieuwe Instructeur
                </a>
            </div>

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (!empty($instructors))
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gebruiker</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nummer</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actief</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Notitie</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aangemaakt</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gewijzigd</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acties</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($instructors as $instructor)
                                    <tr>
                                        <td class="px-4 py-2">{{ $instructor->user_name }}</td>
                                        <td class="px-4 py-2">{{ $instructor->number }}</td>
                                        <td class="px-4 py-2">
                                            <span class="{{ $instructor->isActive ? 'text-green-600' : 'text-red-600' }}">
                                                {{ $instructor->isActive ? 'Ja' : 'Nee' }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-2">{{ $instructor->note ?? '-' }}</td>
                                        <td class="px-4 py-2">{{ $instructor->dateCreated ?? '-' }}</td>
                                        <td class="px-4 py-2">{{ $instructor->dateModified ?? '-' }}</td>
                                        <td class="px-4 py-2 space-x-2">
                                            <a href="{{ route('instructors.show', $instructor->id) }}"
                                               class="text-blue-600 hover:underline">Bekijken</a>
                                            <a href="{{ route('instructors.edit', $instructor->id) }}"
                                               class="text-yellow-600 hover:underline">Bewerken</a>
                                            <form action="{{ route('instructors.destroy', $instructor->id) }}" method="POST" class="inline-block"
                                                  onsubmit="return confirm('Weet je zeker dat je deze instructeur wilt verwijderen?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:underline">Verwijderen</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="mt-4 text-gray-500">Geen instructeurs gevonden.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>