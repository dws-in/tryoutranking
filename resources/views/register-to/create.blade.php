<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Register Tryout
        </h2>
    </x-slot>

    <div class="w-full">
        <div class="bg-white flex-auto p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <form action="{{ route('register-to.store', $tryout->id) }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="user_name" class="block mb-2 font-bold text-gray-600">Name</label>
                    <input type="text" id="user_name" name="user_name" placeholder="name"
                        class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                </div>

                <div class="mb-5">
                    <label for="school_name" class="block mb-2 font-bold text-gray-600">School Name</label>
                    <input type="text" id="school_name" name="school_name" placeholder="school name"
                        class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                </div>

                <div class="mb-5">
                    <label for="graduation_date" class="block mb-2 font-bold text-gray-600">Graduation Date</label>
                    <input type="date" id="graduation_date" name="graduation_date" placeholder="yyyy-mm-dd"
                        class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                </div>

                <div class="mb-5">
                    <label for="phone_number" class="block mb-2 font-bold text-gray-600">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" placeholder="phone number"
                        class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                </div>

                <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
