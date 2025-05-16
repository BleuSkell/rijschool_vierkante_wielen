<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">

                    <div class="flex flex-row justify-between p-4">
                        <div class="flex flex-col">
                            <h1 class="font-bold text-2xl">
                                Rijschool Vierkante Wielen
                            </h1>

                            <p>
                                info@vierkantewielen.nl
                            </p>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-bold text-2xl">
                                Factuurnummer {{ $invoice[0]->invoiceNumber }}
                            </h1>

                            <p class="text-right">
                                {{ $invoice[0]->invoiceNote }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col mt-4">
                        <h2 class="bg-gray-200 px-4 py-2 font-bold">
                            Inschrijvings details
                        </h2>

                        <div class="flex flex-col p-4">
                            <p>
                                Student nummer: {{ $invoice[0]->relationNumber }}
                            </p>

                            <p>
                                startdatum: {{ $invoice[0]->startDate }}
                            </p>

                            <p>
                                einddatum: {{ $invoice[0]->endDate }}
                            </p>

                            <p>
                                pakket: {{ $invoice[0]->enrollmentNote }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col mt-4">
                        <h3 class="bg-gray-200 px-4 py-2 font-bold">
                            Kosten
                        </h3>

                        <div class="flex flex-row justify-between w-[15rem] p-4">
                            <div>
                                <p>Bedrag exc Btw</p>
                                <p>Btw percentage</p>
                                <p>Bedrag inc Btw</p>
                            </div>

                            <div class="text-right w-[5rem]">
                                <p>&euro; {{ $invoice[0]->amountExcBtw }}</p>
                                <p class="border-b border-black">{{ $invoice[0]->btw }}% +</p>
                                <p>&euro; {{ $invoice[0]->amountIncBtw }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row justify-between p-4">
                        <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Bewerken
                        </a>

                        <form action="" method="POST" onsubmit="return confirm('Weet je zeker dat je deze factuur wilt verwijderen?');">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Verwijderen
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>