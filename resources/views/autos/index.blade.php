<x-app-layout>
<div class="bg-gray-800 text-black min-h-screen">
    <div class="banner-container w-full">
        <img src="{{ asset('Images/carsall.jpg') }}" alt="" class="w-full h-auto object-cover max-h-[300px] sm:max-h-[400px] md:max-h-[500px] lg:max-h-[600px]">
    </div>

    <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0" style="max-width: 50rem; margin-left: auto; margin-right: auto;">
        <h1 class="text-4xl font-bold border border-gray-700 rounded-lg p-4 bg-black text-white" style="margin-top: 2rem;">
            Auto's
        </h1>
        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
            <label class="flex items-center">
                <span class="mr-2 text-white">Toon Data</span>
                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                    <input type="checkbox" id="dataToggle"
                        class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"
                        checked />
                    <label for="dataToggle"
                        class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                </div>
            </label>
            <a href="{{ route('autos.create') }}" 
               class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4 mb-2 transition duration-200">
                Auto toevoegen
            </a>
        </div>
    </div>

    <p class="text-white border border-gray-700 rounded-lg p-4 mt-6 bg-gray-900" style="max-width: 50rem; margin-left: auto; margin-right: auto;">
        Welkom bij Rijschool Vierkante Wielen! Wij zijn trots om onze diverse en goed onderhouden vloot van lesauto's aan te bieden. Onze auto's zijn speciaal geselecteerd om jou de beste rijervaring te bieden. Of je nu een beginner bent of al wat ervaring hebt, wij hebben de juiste auto voor jou.
        Onze instructeurs zijn ervaren en gecertificeerd, en ze zorgen ervoor dat je je op je gemak voelt in de auto. Veiligheid staat bij ons voorop, en daarom zorgen we ervoor dat al onze voertuigen regelmatig worden onderhouden en gecontroleerd. We willen dat jij met vertrouwen de weg op gaat, en dat begint met een betrouwbare lesauto.
        Neem een kijkje in onze vloot en ontdek welke auto het beste bij jou past. Of je nu kiest voor een compacte hatchback of een ruime SUV, wij hebben de perfecte auto voor jouw rijopleiding. Bij Rijschool Vierkante Wielen zorgen we ervoor dat je niet alleen leert rijden, maar ook plezier hebt tijdens het proces.
    </p>

    <div id="dataContainer" class="overflow-x-auto mt-10 flex justify-center">
        <table class="w-full max-w-3xl bg-gray-900 text-white rounded-lg shadow-lg">
            <thead>
                <tr>
                    <th class="px-4 py-3 border-b border-gray-700">Merk</th>
                    <th class="px-4 py-3 border-b border-gray-700">Model</th>
                    <th class="px-4 py-3 border-b border-gray-700">Kenteken</th>
                    <th class="px-4 py-3 border-b border-gray-700">Brandstof</th>
                    <th class="px-4 py-3 border-b border-gray-700">Actief</th>
                    <th class="px-4 py-3 border-b border-gray-700">Opmerking</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                <tr class="hover:bg-gray-800">
                    <td class="px-4 py-3 border-b border-gray-700">{{ $car->brand }}</td>
                    <td class="px-4 py-3 border-b border-gray-700">{{ $car->model }}</td>
                    <td class="px-4 py-3 border-b border-gray-700">{{ $car->licensePlate }}</td>
                    <td class="px-4 py-3 border-b border-gray-700">{{ $car->fuelType }}</td>
                    <td class="px-4 py-3 border-b border-gray-700">
                        @if($car->isActive)
                            <span class="text-green-400 font-semibold">Ja</span>
                        @else
                            <span class="text-red-400 font-semibold">Nee</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 border-b border-gray-700">{{ $car->note }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="errorContainer" class="py-12 hidden flex justify-center">
        <p class="text-red-500">Geen auto's gevonden. Probeer later opnieuw.</p>
    </div>

        <h1 class="text-center text-4xl font-bold border border-gray-700 rounded-lg p-4" style="max-width: 50rem; margin-left: auto; margin-right: auto; margin-top: 2rem; color: white; background-color: black;">
        Starter autos
        </h1>
    <h1 class="text-center text-4xl font-bold border border-gray-700 rounded-lg p-4" style="max-width: 50rem; margin-left: auto; margin-right: auto; margin-top: 2rem; color: white; background-color: black;">
        Toyota Corrola 2002
    </h1>

    <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black">
        <div class="flex flex-wrap justify-center gap-6">
            <img src="{{ asset('images/Auto1/front.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto1/side1.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto1/back.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto1/side2.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto1/inside.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
        </div>
    </div>


    <h1 class="text-center text-4xl font-bold border border-gray-700 rounded-lg p-4" style="max-width: 50rem; margin-left: auto; margin-right: auto; margin-top: 2rem; color: white; background-color: black;">
        Honda Civic 2001
    </h1>

    <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black">
        <div class="flex flex-wrap justify-center gap-6">
            <img src="{{ asset('images/Auto2/front.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto2/side1.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto2/back.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto2/side2.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto2/inside.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
        </div>
    </div>


    <h1 class="text-center text-4xl font-bold border border-gray-700 rounded-lg p-4" style="max-width: 50rem; margin-left: auto; margin-right: auto; margin-top: 2rem; color: white; background-color: black;">
        Ford Focus 2011
    </h1>

    <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black">
        <div class="flex flex-wrap justify-center gap-6">
            <img src="{{ asset('images/Auto3/front.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto3/side1.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto3/back.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto3/side2.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto3/inside.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
        </div>
    </div>


        <h1 class="text-center text-4xl font-bold border border-gray-700 rounded-lg p-4" style="max-width: 50rem; margin-left: auto; margin-right: auto; margin-top: 2rem; color: white; background-color: black;">
        BMW 3-serie 2003
    </h1>

    <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black">
        <div class="flex flex-wrap justify-center gap-6">
            <img src="{{ asset('images/Auto4/front.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto4/side1.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto4/back.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto4/side2.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto4/inside.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
        </div>
    </div>


            <h1 class="text-center text-4xl font-bold border border-gray-700 rounded-lg p-4" style="max-width: 50rem; margin-left: auto; margin-right: auto; margin-top: 2rem; color: white; background-color: black;">
        Audi A4 1998
    </h1>

    <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 text-center border-4 border-black">
        <div class="flex flex-wrap justify-center gap-6">
            <img src="{{ asset('images/Auto5/front.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto5/side1.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto5/back.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto5/side2.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
            <img src="{{ asset('images/Auto5/inside.png') }}" alt="" class="rounded-full w-64 max-w-full mb-4">
        </div>
    </div>


</div>
</x-app-layout>

<script>
    document.getElementById('dataToggle').addEventListener('change', function() {
        const dataContainer = document.getElementById('dataContainer');
        const errorContainer = document.getElementById('errorContainer');
        if (this.checked) {
            dataContainer.classList.remove('hidden');
            errorContainer.classList.add('hidden');
        } else {
            dataContainer.classList.add('hidden');
            errorContainer.classList.remove('hidden');
        }
    });
</script>

<style>
    .toggle-checkbox:checked {
        right: 0;
        border-color: #38A169;
    }
    .toggle-checkbox:checked+.toggle-label {
        background-color: #38A169;
    }
</style>