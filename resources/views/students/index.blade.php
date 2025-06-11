<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">
            Studenten
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('students.create') }}" 
                   class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Nieuwe Student
                </a>
            </div>

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gebruiker</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Relatienummer</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actief</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Notitie</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aangemaakt</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gewijzigd</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acties</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($students as $student)
                                <tr>
                                    <td class="px-4 py-2">{{ $student->user->name }}</td>
                                    <td class="px-4 py-2">{{ $student->relationNumber }}</td>
                                    <td class="px-4 py-2">
                                        <span class="{{ $student->isActive ? 'text-green-600' : 'text-red-600' }}">
                                            {{ $student->isActive ? 'Ja' : 'Nee' }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-2">{{ $student->note ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $student->dateCreated ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $student->dateModified ?? '-' }}</td>
                                    <td class="px-4 py-2 space-x-2">
                                        <a href="{{ route('students.show', $student->id) }}"
                                           class="text-blue-600 hover:underline">Bekijken</a>
                                        <a href="{{ route('students.edit', $student->id) }}"
                                           class="text-yellow-600 hover:underline">Bewerken</a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline-block"
                                              onsubmit="return confirm('Weet je zeker dat je deze student wilt verwijderen?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">Verwijderen</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($students->isEmpty())
                        <p class="mt-4 text-gray-500">Geen studenten gevonden.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
