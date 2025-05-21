<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row justify-center">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg p-4 w-96 lg:w-full">
                @if ($payments)
                    @foreach ($payments as $payment)
                        <div>
                            <h1>Betaling voor factuur:</h1>
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