<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                @if ($invoices)
                    @foreach ($invoices as $invoice)
                        <div class="flex flex-row justify-between border-b-2 border-[#B9A359] p-2">
                            <div class="flex flex-row">
                                <div class="mr-2">
                                    <h3 class="font-bold tracking-wide">Factuur nummer:</h3>
                                    <h3 class="font-bold tracking-wide">Datum aangemaakt:</h3>
                                </div>

                                <div>
                                    <h3>{{ $invoice->invoiceNumber }}</h3>
                                    <h3>{{ $invoice->invoiceDate }}</h3>
                                </div>
                            </div>

                            <div class="flex flex-row">
                                <div class="text-right mr-2">
                                    <p>&euro; {{ $invoice->amountExcBtw }}</p>
                                    <p class="border-b border-black">{{ $invoice->btw }}% +</p>
                                    <p>&euro; {{ $invoice->amountIncBtw }}</p>
                                </div>

                                <div>
                                    <p class="font-bold tracking-wide">Bedrag exc. Btw</p>
                                    <p class="font-bold tracking-wide">Btw percentage</p>
                                    <p class="font-bold tracking-wide">Bedrag inc. Btw</p>
                                </div>
                            </div>

                            <div class="flex flex-row">
                                <div class="mr-2">
                                    <p class="font-bold tracking-wide">Status:</p>
                                    <p class="font-bold tracking-wide">Notities:</p>
                                </div>

                                <div>
                                    <p>{{ $invoice->invoiceStatus }}</p>
                                    <p>{{ $invoice->note }}</p>
                                </div>
                            </div>

                            <div>
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