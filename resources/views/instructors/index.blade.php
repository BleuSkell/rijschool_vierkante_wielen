<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">
            Instructors
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Number</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Active</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Note</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Modified</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($instructors as $instructor)
                                <tr>
                                    <td class="px-4 py-2">{{ $instructor->user->name }}</td>
                                    <td class="px-4 py-2">{{ $instructor->number }}</td>
                                    <td class="px-4 py-2">
                                        <span class="{{ $instructor->isActive ? 'text-green-600' : 'text-red-600' }}">
                                            {{ $instructor->isActive ? 'Yes' : 'No' }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-2">{{ $instructor->note ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $instructor->dateCreated ?? '-' }}</td>
                                    <td class="px-4 py-2">{{ $instructor->dateModified ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($instructors->isEmpty())
                        <p class="mt-4 text-gray-500">No instructors found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
