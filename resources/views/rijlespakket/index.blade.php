<x-app-layout>
    <div class="bg-gray-800 text-black min-h-screen">



            <div class="banner-container w-full">
                <img src="{{ asset('Images/carspeed.png') }}" alt="" class="w-full h-auto object-cover max-h-[300px] sm:max-h-[400px] md:max-h-[500px] lg:max-h-[600px]">
            </div>

        <h1 class="text-center text-4xl font-bold border border-gray-700 rounded-lg p-4" style="max-width: 50rem; margin-left: auto; margin-right: auto; margin-top: 2rem; color: white; background-color: black;">
            Rijles Pakketten
        </h1>

        <!-- Toevoegen knop -->
        <div class="flex justify-end" style="max-width: 50rem; margin-left: auto; margin-right: auto;">
            <a href="{{ route('packages.create') }}"
               class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 mb-2 transition duration-200">
                Pakket toevoegen
            </a>
        </div>

        <p class="text-white border border-gray-700 rounded-lg p-4 mt-6 bg-gray-900" style="max-width: 50rem; margin-left: auto; margin-right: auto;">
            Welkom bij Rijschool Vierkante Wielen!
            Fijn dat je interesse toont in onze rijschool. Bij ons staat persoonlijke begeleiding en 
            eerlijk advies centraal. We bieden verschillende lespakketten aan die zijn afgestemd
            op jouw rijervaring, leertempo en doelen. Of je nu een beginnende leerling bent of
            al wat ervaring hebt, wij hebben altijd een pakket dat bij jou past.
            We begrijpen dat het kiezen van het juiste pakket lastig kan zijn. Daarom helpen we
            je graag bij het maken van de juiste keuze. Als je er niet helemaal uitkomt of 
            twijfelt welk pakket het beste bij jou aansluit, aarzel dan niet om contact met ons
            op te nemen. Je kunt ons eenvoudig bellen of een e-mail sturen.
            Om je nog beter te kunnen adviseren, bieden we ook de mogelijkheid tot een proefles.
            Tijdens deze testrit maken we kennis en krijg je een goed beeld van onze lesmethode 
            en je eigen niveau. Op basis daarvan geven we je een eerlijk en persoonlijk advies, 
            zodat jij met een gerust hart aan je rijopleiding kunt beginnen.
            Bij Rijschool Vierkante Wielen draait het om vertrouwen, kwaliteit en resultaat. We 
            kijken ernaar uit om jou te begeleiden naar dat felbegeerde rijbewijs!
        </p>

        <div class="py-16">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($packages as $package)
                        <a href="{{ route('packages.show', $package->id) }}" class="block">
                            <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black transform transition-transform duration-300 hover:scale-105 hover:bg-gray-700">
                                {{-- Je kunt hier eventueel een afbeelding tonen op basis van $package->type of een standaardafbeelding --}}
                                <img src="{{ asset('images/Starter-pakket-10.png') }}" alt="{{ $package->type }}" class="mx-auto mb-4 rounded-full">
                                <h3 class="text-xl font-bold">{{ $package->type }}</h3>
                                <p class="mt-2">
                                    Aantal lessen: {{ $package->numberOfLessons }}<br>
                                    Prijs per les: €{{ number_format($package->pricePerLesson, 2, ',', '.') }}<br>
                                    Actief: {{ $package->isActive ? 'Ja' : 'Nee' }}<br>
                                    {{ $package->note }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>