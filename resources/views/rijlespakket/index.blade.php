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
                    <!-- Super Deal -->
                    <a href="{{ route('packages.show', 1) }}" class="block">
                        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black transform transition-transform duration-300 hover:scale-105 hover:bg-gray-700">
                            <img src="{{ asset('images/Starter-pakket-10.png') }}" alt="Super Deal" class="mx-auto mb-4 rounded-full">
                            <h3 class="text-xl font-bold">Super Deal</h3>
                            <p class="mt-2">Deze pakket is een super deal met 10 lessen van 1 uur. Inbegrepen losse lessen kun je er natuurlijk bij komen. De instructeurs geven je eerlijk advies.</p>
                        </div>
                    </a>
                    <!-- Zilver Pakket -->
                    <a href="{{ route('packages.show', 2) }}" class="block">
                        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black transform transition-transform duration-300 hover:scale-105 hover:bg-gray-700">
                            <img src="{{ asset('images/zilver-pakket-10.png') }}" alt="Zilver Pakket" class="mx-auto mb-4 rounded-full">
                            <h3 class="text-xl font-bold">Zilver Pakket</h3>
                            <p class="mt-2">Deze pakket is de zilver pakket met 10 lessen van 2 uur en theorie informatie. Wordt uitgelegd tijdens lessen en eerlijk advies en praktijkexamen.</p>
                        </div>
                    </a>
                    <!-- Goud Pakket -->
                    <a href="{{ route('packages.show', 3) }}" class="block">
                        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black transform transition-transform duration-300 hover:scale-105 hover:bg-gray-700">
                            <img src="{{ asset('images/goud-pakket-10.png') }}" alt="Goud Pakket" class="mx-auto mb-4 rounded-full">
                            <h3 class="text-xl font-bold">Goud Pakket</h3>
                            <p class="mt-2">Deze pakket is de Goud pakket met 19 lessen van 1,5 uur en theorie informatie plus examen. Wegen en examen gericht van de CBR examen met eerlijk advies met een praktijkexamen en 1 gratis herkansing.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>