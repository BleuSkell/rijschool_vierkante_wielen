<x-app-layout>
    <div class="py-12">
        @if (session('success'))
            <div class="flex flex-row justify-center">
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-md shadow w-[50%]">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row justify-center">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-4 w-96 lg:w-full">
                <div class="flex flex-row justify-end">
                    <a href="{{ route('invoices.create') }}">
                        <button class="
                                bg-[#B9A359] text-white p-2 rounded-md
                                hover:bg-[#867233]
                                transition duration-150 ease-in-out
                                mr-2
                        ">
                            Factuur aanmaken
                        </button>
                    </a>
                </div>

                @if ($invoices)
                    @foreach ($invoices as $invoice)
                        <div class="
                                flex 
                                lg:flex-row lg:justify-between lg:p-2 lg:mb-0
                                border-b-2 border-[#B9A359]
                                flex-col items-center mb-4
                        ">
                            <div class="flex flex-row lg:mb-0 mb-2">
                                <div class="mr-2">
                                    <h3 class="font-bold tracking-wide">Factuur nummer:</h3>
                                    <h3 class="font-bold tracking-wide">Datum aangemaakt:</h3>
                                </div>

                                <div>
                                    <h3 class="text-right lg:text-left">{{ $invoice->invoiceNumber }}</h3>
                                    <h3 class="text-right lg:text-left">{{ $invoice->invoiceDate }}</h3>
                                </div>
                            </div>

                            <div class="flex flex-row lg:mb-0 mb-2">
                                <div class="mr-12 lg:mr-2">
                                    <p class="font-bold tracking-wide">Bedrag exc. Btw</p>
                                    <p class="font-bold tracking-wide">Btw percentage</p>
                                    <p class="font-bold tracking-wide">Bedrag inc. Btw</p>
                                </div>

                                <div class="text-right">
                                    <p>&euro; {{ $invoice->amountExcBtw }}</p>
                                    <p class="border-b border-black">{{ $invoice->btw }}% +</p>
                                    <p>&euro; {{ $invoice->amountIncBtw }}</p>
                                </div>
                            </div>

                            <div class="flex flex-row lg:mb-0 mb-2">
                                <div class="mr-2">
                                    <p class="font-bold tracking-wide">Status:</p>
                                    <p class="font-bold tracking-wide">Notities:</p>
                                </div>

                                <div>
                                    <p class="text-right lg:text-left">{{ $invoice->invoiceStatus }}</p>
                                    <p class="text-right lg:text-left">{{ $invoice->note }}</p>
                                </div>
                            </div>

                            <div class="lg:mb-0 mb-4">
                                <a href="{{ route('invoices.show', $invoice->id) }}">
                                    <button class="
                                        bg-[#B9A359] text-white p-2 rounded-md
                                        hover:bg-[#867233]
                                        transition duration-150 ease-in-out
                                    ">
                                        Details
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div class="flex justify-center mt-6">
                        <nav class="inline-flex">
                            @if ($invoices->onFirstPage())
                                <span class="px-3 py-1 bg-gray-300 text-gray-500 rounded-l">Vorige</span>
                            @else
                                <a href="{{ $invoices->previousPageUrl() }}" class="px-3 py-1 bg-[#B9A359] text-white rounded-l hover:bg-yellow-700">Vorige</a>
                            @endif

                            @foreach ($invoices->getUrlRange(1, $invoices->lastPage()) as $page => $url)
                                @if ($page == $invoices->currentPage())
                                    <span class="px-3 py-1 bg-[#B9A359] text-white">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="px-3 py-1 bg-white text-[#B9A359] hover:bg-yellow-100">{{ $page }}</a>
                                @endif
                            @endforeach

                            @if ($invoices->hasMorePages())
                                <a href="{{ $invoices->nextPageUrl() }}" class="px-3 py-1 bg-[#B9A359] text-white rounded-r hover:bg-yellow-700">Volgende</a>
                            @else
                                <span class="px-3 py-1 bg-gray-300 text-gray-500 rounded-r">Volgende</span>
                            @endif
                        </nav>
                    </div>
                @else   
                    <h1 class="text-center font-bold text-lg tracking-wide">
                        Er zijn op dit moment geen facturen beschikbaar
                    </h1>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>