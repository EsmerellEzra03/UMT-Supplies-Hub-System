<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create
        </h2>
       
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form class="space-y-5">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Used/New</label>
                        <input type="text" id="name" class="w-50 py-3 mt-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Used/New" required>
                    </div>

                    <button type="submit" class="w-20 py-3 mt-5 bg-[#063970] rounded-md font-medium text-white focus:outline-none hover:shadow-none">
                        Save
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>

        <!-- <div class="grid place-items-center mx-2 my-20 sm:my-auto">
            <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 px-6 py-10 sm:px-10 sm:py-6 bg-white rounded-lg shadow-md lg:shadow-lg">
                
            </div>
        </div> -->
</x-app-layout>