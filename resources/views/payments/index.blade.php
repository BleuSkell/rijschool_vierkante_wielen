<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row justify-center">
            <div class="bg-gray-200 overflow-hidden shadow-sm rounded-lg px-5 py-2 w-96 lg:w-full border border-solid border-4 border-[#B9A359]">
                @if ($payments)
                    @foreach ($payments as $payment)
                        <div class="flex flex-col bg-white p-2 rounded-lg shadow-md mt-4 mb-4">
                            <div class="flex flex-row justify-between mb-2">
                                <div>
                                    <h1>Betaling voor factuur: {{ $payment->invoiceNumber }}</h1>
                                    <p>Status: {{ $payment->status }}</p>
                                </div>
                                
                                <div>
                                    <p>Datum: {{ $payment->date }}</p>
                                </div>
                            </div>

                            <div class="flex flex-row justify-between">
                                <a href="" class="
                                    bg-blue-500 text-white font-bold py-2 px-4 rounded
                                    hover:bg-blue-700 transition duration-150 ease-in-out    
                                ">
                                    Bewerken
                                </a>

                                <form action="" method="POST" onsubmit="return confirm('Weet je zeker dat je deze factuur wilt verwijderen?');">
                                    @csrf
                                    @method('DELETE')

                                    <button 
                                        type="submit" 
                                        class="
                                            bg-red-600 text-white font-bold py-2 px-4 rounded
                                            hover:bg-red-700 transition duration-150 ease-in-out
                                        ">
                                        Verwijderen
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else   
                    <h1 class="text-center font-bold text-lg tracking-wide">
                        Er zijn op dit moment geen betalingen beschikbaar
                    </h1>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>