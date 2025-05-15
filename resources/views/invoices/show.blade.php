<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

                <div class="flex flex-row justify-between">
                    <div class="flex flex-row">
                        <div class="mr-2">
                            <h1>Factuur nummer:</h1>
                            <h1>Datum aangemaakt:</h1>
                        </div>

                        <div>
                            <h1>{{ $invoice[0]->invoiceNumber }}</h1>
                            <h1>{{ $invoice[0]->invoiceDate }}</h1>
                        </div>
                    </div>

                    <div class="flex flex-row">
                        <a href="#" class="p-4">
                            <button>
                                Bewerk
                            </button>
                        </a>

                        <a href="#" class="p-4">
                            <button>
                                Download
                            </button>
                        </a>

                        <a href="#" class="p-4">
                            <button>
                                Verwijder
                            </button>
                        </a>
                    </div>
                </div>

                <div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>