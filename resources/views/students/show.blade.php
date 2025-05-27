<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold">
                Student Details
            </h2>
            <div class="flex space-x-4">
                <a href="{{ route('students.edit', $student->id) }}" 
                   class="inline-block bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                    Edit Student
                </a>
                <a href="{{ route('students.index') }}" 
                   class="inline-block bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Back to List
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
                            <dt class="text-sm font-medium text-gray-500">User Name</dt>
                            <dd class="mt-1 text-lg">{{ $student->user->name }}</dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Email</dt>
                            <dd class="mt-1 text-lg">{{ $student->user->email }}</dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Relation Number</dt>
                            <dd class="mt-1 text-lg">{{ $student->relationNumber }}</dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Status</dt>
                            <dd class="mt-1">
                                <span class="px-2 inline-flex text-lg rounded-full {{ $student->isActive ? 'text-green-600' : 'text-red-600' }}">
                                    {{ $student->isActive ? 'Active' : 'Inactive' }}
                                </span>
                            </dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Created At</dt>
                            <dd class="mt-1 text-lg">{{ $student->dateCreated ?? '-' }}</dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Last Modified</dt>
                            <dd class="mt-1 text-lg">{{ $student->dateModified ?? '-' }}</dd>
                        </div>

                        <div class="col-span-2">
                            <dt class="text-sm font-medium text-gray-500">Note</dt>
                            <dd class="mt-1 text-lg whitespace-pre-line">{{ $student->note ?? '-' }}</dd>
                        </div>

                        @if($student->enrollment)
                        <div class="col-span-2 mt-4 border-t pt-4">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Enrollment Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Package</dt>
                                    <dd class="mt-1 text-lg">{{ $student->enrollment->package->type ?? '-' }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Start Date</dt>
                                    <dd class="mt-1 text-lg">{{ $student->enrollment->startDate ?? '-' }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">End Date</dt>
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
