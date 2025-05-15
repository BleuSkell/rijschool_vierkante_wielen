<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                @foreach ($invoices as $invoice)
                    <div class="flex flex-row justify-between border-b border-black p-2">
                        <div class="flex flex-row">
                            <div class="mr-2">
                                <h3>Factuur nummer:</h3>
                                <h3>Datum aangemaakt:</h3>
                            </div>

                            <div>
                                <h3>{{ $invoice->invoiceNumber }}</h3>
                                <h3>{{ $invoice->invoiceDate }}</h3>
                            </div>
                        </div>

                        <div class="flex flex-row">
                            <div class="text-right mr-2">
                                <p>&euro; {{ $invoice->amountExcBtw }}</p>
                                <p class="border-b border-black">{{ $invoice->btw }}%</p>
                                <p>&euro; {{ $invoice->amountIncBtw }}</p>
                            </div>

                            <div>
                                <p>Bedrag exc. Btw</p>
                                <p>Btw percentage</p>
                                <p>Bedrag inc. Btw</p>
                            </div>
                        </div>

                        <div class="flex flex-row">
                            <div class="mr-2">
                                <p>Status:</p>
                                <p>Notities:</p>
                            </div>

                            <div>
                                <p>{{ $invoice->invoiceStatus }}</p>
                                <p>{{ $invoice->note }}</p>
                            </div>
                        </div>

                        <div>
                            <a href="">
                                <button class="">
                                    Details
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>