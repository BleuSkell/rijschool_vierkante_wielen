<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row justify-center">
            @if ($errors->any())
                <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-gray-200 overflow-hidden shadow-sm rounded-lg px-5 py-2 w-96 lg:w-full border border-solid border-4 border-[#B9A359]">
                <form action="{{ route('payments.store') }}" method="post" class="flex flex-col">
                    @csrf
                    @method('post')

                    <input type="hidden" name="invoiceId" id="invoiceId" value="{{ $invoiceId }}">

                    <label for="paymentMethod">Selecteer hoe je wilt betalen</label>
                    <select name="paymentMethod" id="paymentMethod" required>
                        <option value="IDeal">IDeal</option>
                        <option value="Rabobank">Rabobank</option>
                        <option value="ABNAmro">ABNAmro</option>
                    </select>

                    <label for="bankingDetails">Bankgegevens</label>
                    <input type="text" name="bankingDetails" id="bankingDetails" required>

                    <label for="bankingDetailsCheck">Bankgegevens controleren</label>
                    <input type="text" name="bankingDetailsCheck" id="bankingDetailsCheck" required>
                    
                    <button type="submit">Betalen</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>