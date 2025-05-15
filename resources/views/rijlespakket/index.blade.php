<x-app-layout>
    <div class="bg-gray-800 text-black min-h-screen">
        <h1 class="text-center text-4xl font-bold border border-gray-700 rounded-lg p-4 max-w-3xl mx-auto mt-8 text-white bg-black">
            Rijles Pakketten
        </h1>


        <img src="{{ asset('images/carspeed-10.png') }}" alt="" class="w-full max-w-4xl h-80 object-cover mx-auto mt-8 rounded-lg shadow-lg">

        <div class="py-56">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Super Deal -->
                        <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black transform transition-transform duration-300 hover:scale-105 hover:bg-gray-700">
                        <img src="{{ asset('images/Starter-pakket-10.png') }}" alt="Super Deal" class="mx-auto mb-4 rounded-full">
                        <h3 class="text-xl font-bold">Super Deal</h3>
                        <p class="mt-2">Deze pakket is een super deal met 10 lessen van 1 uur. Inbegrepen losse lessen kun je er natuurlijk bij komen. De instructeurs geven je eerlijk advies.</p>
                    </div>
                    <!-- Zilver Pakket -->
                    <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black transform transition-transform duration-300 hover:scale-105 hover:bg-gray-700">
                        <img src="{{ asset('images/zilver-pakket-10.png') }}" alt="Zilver Pakket" class="mx-auto mb-4 rounded-full">
                        <h3 class="text-xl font-bold">Zilver Pakket</h3>
                        <p class="mt-2">Deze pakket is de zilver pakket met 10 lessen van 2 uur en theorie informatie. Wordt uitgelegd tijdens lessen en eerlijk advies en praktijkexamen.</p>
                    </div>
                    <!-- Goud Pakket -->
                    <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black transform transition-transform duration-300 hover:scale-105 hover:bg-gray-700">
                        <img src="{{ asset('images/goud-pakket-10.png') }}" alt="Goud Pakket" class="mx-auto mb-4 rounded-full">
                        <h3 class="text-xl font-bold">Goud Pakket</h3>
                        <p class="mt-2">Deze pakket is de Goud pakket met 19 lessen van 1,5 uur en theorie informatie plus examen. Wegen en examen gericht van de CBR examen met eerlijk advies met een praktijkexamen en 1 gratis herkansing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>