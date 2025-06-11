<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold">
                Student Details
            </h2>
            <div class="flex space-x-4">
                <a href="{{ route('students.edit', $student->id) }}" 
                   class="inline-block bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                    Student Bewerken
                </a>
                <a href="{{ route('students.index') }}" 
                   class="inline-block bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Terug naar Overzicht
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Naam Gebruiker</dt>
                            <dd class="mt-1 text-lg">{{ $student->user->name }}</dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">E-mail</dt>
                            <dd class="mt-1 text-lg">{{ $student->user->email }}</dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Relatienummer</dt>
                            <dd class="mt-1 text-lg">{{ $student->relationNumber }}</dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                            <dd class="mt-1">
                                <span class="px-2 inline-flex text-lg rounded-full {{ $student->isActive ? 'text-green-600' : 'text-red-600' }}">
                                    {{ $student->isActive ? 'Actief' : 'Inactief' }}
                                </span>
                            </dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Aangemaakt op</dt>
                            <dd class="mt-1 text-lg">{{ $student->dateCreated ?? '-' }}</dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Laatst Gewijzigd</dt>
                            <dd class="mt-1 text-lg">{{ $student->dateModified ?? '-' }}</dd>
                        </div>

                        <div class="col-span-2">
                            <dt class="text-sm font-medium text-gray-500">Notitie</dt>
                            <dd class="mt-1 text-lg whitespace-pre-line">{{ $student->note ?? '-' }}</dd>
                        </div>

                        @if($student->enrollment)
                        <div class="col-span-2 mt-4 border-t pt-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Inschrijvingsinformatie</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Pakket</dt>
                                    <dd class="mt-1 text-lg">{{ $student->enrollment->package->type ?? '-' }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Startdatum</dt>
                                    <dd class="mt-1 text-lg">{{ $student->enrollment->startDate ?? '-' }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Einddatum</dt>
                                    <dd class="mt-1 text-lg">{{ $student->enrollment->endDate ?? '-' }}</dd>
                                </div>
                            </div>
                        </div>
                        @endif
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
