<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row justify-center">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-4 w-96 lg:w-full">
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
                @else   
                    <h1 class="text-center font-bold text-lg tracking-wide">
                        Er zijn op dit moment geen facturen beschikbaar
                    </h1>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>