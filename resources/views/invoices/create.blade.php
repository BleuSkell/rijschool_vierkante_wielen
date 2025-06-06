<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row justify-center">
            <form 
                action=""
                method="post"
                class="bg-white overflow-hidden shadow-sm py-8 w-96 lg:w-4/5 border-4 border-[#B9A359]"
            >
                <div class="flex flex-col items-center gap-4">
                    <div class="flex items-center w-[90%]">
                        <div class="w-[3.5rem] h-[3.5rem] rounded-full bg-[#B9A359] text-white flex items-center justify-center text-2xl">
                            1
                        </div>

                        <div class="flex-1 h-1 bg-[#B9A359]"></div>
                    </div>

                    @if($students)
                        <div class="flex flex-col w-[80%] my-2">
                            <label for="student">Selecteer een leerling</label>

                            <select name="student" id="student" class="border-2 border-[#B9A359] rounded-md p-2">
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>    
                        </div>
                    @else
                        <p class="text-red-500">No students available. Please add a student first.</p>
                    @endif
                    
                    <div class="flex flex-row justify-between w-[80%]">
                        <div class="flex flex-col w-[45%]">
                            <label for="startDate">start datum</label>
                            <input type="date" name="startDate" id="startDate" readonly
                                    class="border-2 border-[#B9A359] rounded-md p-2">
                        </div>

                        <div class="flex flex-col w-[45%]">
                            <label for="endDate">eind datum</label>
                            <input type="date" name="endDate" id="endDate" readonly
                                    class="border-2 border-[#B9A359] rounded-md p-2">
                        </div>
                    </div>

                    <div class="flex flex-col w-[80%]">
                        <label for="packageSelect">Gekozen pakket</label>
                        <select name="package" id="packageSelect" class="border-2 border-[#B9A359] rounded-md p-2">
                            <option value="">Selecteer een student</option>
                        </select>    
                    </div>

                    <div class="flex items-center w-[90%] my-2">
                        <div class="w-[3.5rem] h-[3.5rem] rounded-full bg-[#B9A359] text-white flex items-center justify-center text-2xl">
                            2
                        </div>

                        <div class="flex-1 h-1 bg-[#B9A359]"></div>
                    </div>

                    <div class="flex flex-col gap-4 w-[80%]">
                        <div class="flex flex-col w-full">
                            <label for="amountExcBtw">Bedrag excl. BTW</label>
                            <input type="number" name="amountExcBtw" id="amountExcBtw" step="0.01"
                                    class="border-2 border-[#B9A359] rounded-md p-2">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="btw">BTW percentage</label>
                            <input type="number" name="btw" id="btw"
                                    class="border-2 border-[#B9A359] rounded-md p-2">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="amountIncBtw">Bedrag incl. BTW</label>
                            <input type="number" name="amountIncBtw" id="amountIncBtw" step="0.01"
                                    class="border-2 border-[#B9A359] rounded-md p-2">
                        </div>
                    </div>

                    <div class="w-[80%] flex justify-end">
                        <button type="submit" class="bg-[#B9A359] text-white rounded-md p-2">
                            Aanmaken
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const studentSelect = document.getElementById('student');
            const startDateInput = document.getElementById('startDate');
            const endDateInput = document.getElementById('endDate');
            const packageSelect = document.getElementById('packageSelect');
            const amountExcBtwInput = document.getElementById('amountExcBtw');

            studentSelect.addEventListener('change', async (e) => {
                const studentId = e.target.value;

                if (!studentId) return;

                const response = await fetch(`/student-details/${studentId}`);
                const data = await response.json();

                if (data.length > 0) {
                    const student = data[0];

                    // Vul de velden in
                    startDateInput.value = student.startDate;
                    endDateInput.value = student.endDate;

                    // Reset en vul het pakket-selectieveld
                    packageSelect.innerHTML = '';
                    const option = document.createElement('option');
                    option.value = student.pakketId;
                    option.textContent = student.type;
                    packageSelect.appendChild(option);

                    // Vul het bedrag exclusief BTW
                    amountExcBtwInput.value = student.pakketPrijsExcBtw;
                }
            });
        });
    </script>

</x-app-layout>