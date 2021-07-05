<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Register Tryout
    </h2>
</x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">

            <form method="POST" action="{{ route('register-to.store', $tryout->id) }}">
            {{ csrf_field() }}
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="user_name" class="block mb-2 font-bold text-gray-600">Name</label>
                        <input type="text" id="user_name" name="user_name" placeholder="name"
                            class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="school_name" class="block mb-2 font-bold text-gray-600">School Name</label>
                        <input type="text" id="school_name" name="school_name" placeholder="school name"
                            class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="graduation_date" class="block mb-2 font-bold text-gray-600">Graduation Year</label>
                        <input type="date" id="graduation_date" name="graduation_date" placeholder="graduation year"
                            class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                    </div>

                    <div class="px-4 py-5 bg-white sm:p-6">
                        <label for="phone_number" class="block mb-2 font-bold text-gray-600">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" placeholder="phone number"
                            class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                    </div>
                    <button class="float-right bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<!--
    <div class="w-full">
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">

        </div>
    </div> -->
</x-app-layout>
