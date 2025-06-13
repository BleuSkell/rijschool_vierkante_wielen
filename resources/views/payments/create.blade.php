<x-app-layout>
    <div class="py-12">
        @if ($errors->any())
            <div class="flex flex-row justify-center">
                <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4 w-[50%]">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row justify-center">
            <form action="{{ route('payments.store') }}" 
                method="post" 
                class="bg-white overflow-hidden shadow-sm py-8 w-96 lg:w-4/5 border-4 border-[#B9A359]"
            >
                @csrf
                @method('post')
                
                <div class="flex flex-col items-center gap-4">
                    <input type="hidden" name="invoiceId" id="invoiceId" value="{{ $invoiceId }}">

                    <div class="flex items-center w-[90%]">
                        <div class="w-[3.5rem] h-[3.5rem] rounded-full bg-[#B9A359] text-white flex items-center justify-center text-2xl">
                            1
                        </div>

                        <div class="flex-1 h-1 bg-[#B9A359]"></div>
                    </div>

                    <div class="flex flex-col w-[80%] my-2">
                        <label for="paymentMethod">Selecteer hoe je wilt betalen</label>

                        <select name="paymentMethod" id="paymentMethod" class="border-2 border-[#B9A359] rounded-md p-2" required>
                            <option value="IDeal">IDeal</option>
                            <option value="Rabobank">Rabobank</option>
                            <option value="ABNAmro">ABNAmro</option>
                        </select>
                    </div>

                    <div class="flex items-center w-[90%] my-2">
                        <div class="w-[3.5rem] h-[3.5rem] rounded-full bg-[#B9A359] text-white flex items-center justify-center text-2xl">
                            2
                        </div>

                        <div class="flex-1 h-1 bg-[#B9A359]"></div>
                    </div>

                    <div class="flex flex-col w-[80%] my-2">
                        <label for="bankingDetails">Voer je IBAN in</label>
                        <input type="text" name="bankingDetails" id="bankingDetails" class="border-2 border-[#B9A359] rounded-md p-2" required>
                    </div>

                    <div class="flex flex-col w-[80%] my-2">
                        <label for="bankingDetailsCheck">Vul je IBAN opnieuw in</label>
                        <input type="text" name="bankingDetailsCheck" id="bankingDetailsCheck" class="border-2 border-[#B9A359] rounded-md p-2" required>
                    </div>

                    <div class="w-[80%] flex justify-end">
                        <button type="submit"
                            class=" bg-[#B9A359] text-white rounded-md p-2
                                        hover:bg-[#867233]
                                        transition duration-150 ease-in-out"
                        >
                            Betalen
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>