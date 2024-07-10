<div id="addIncome"
        <div class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none flex justify-center items-center">
            <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div
                    class="flex flex-col bg-[#2B2B2B] border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 border-[#244C53]">
                    <div class="flex justify-between items-center py-3 px-4 border-b border-[#4C4C4C]">
                        <h3 class="sk-bold text-xl text-gray-800 dark:text-white">
                          Add Income &#x1FAF0;
                        </h3>
                        <button type="button"
                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                            data-hs-overlay="#addIncome">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="px-8 py-5 mt-2 overflow-y-auto">
                        <form action="{{ route('income.store') }}" method="POST" class="mt-2">
                            @csrf
                        <div class="relative">
                            <input type="text" name="income_name" id="income_name" class="outline-none sk peer py-4 px-0 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm placeholder:text-transparent focus:border-t-transparent focus:border-x-transparent focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 text-white dark:focus:ring-neutral-600 focus:border-b-[#00B1D0]
                            focus:pt-6
                            focus:pb-2
                            [&:not(:placeholder-shown)]:pt-6
                            [&:not(:placeholder-shown)]:pb-2
                            autofill:pt-6
                            autofill:pb-2" placeholder="">
                            <label for="hs-floating-underline-input-email" class="sk absolute top-0 start-0 py-4 px-0 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                              peer-focus:scale-90
                              peer-focus:translate-x-0.5
                              peer-focus:-translate-y-1.5
                              peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                              peer-[:not(:placeholder-shown)]:scale-90
                              peer-[:not(:placeholder-shown)]:translate-x-0.5
                              peer-[:not(:placeholder-shown)]:-translate-y-1.5
                              peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500 sk">Income Name</label>
                          </div>  
                          <div class="relative">
                            <input type="text" name="amount" id="amount" class="outline-none sk peer py-4 px-0 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm placeholder:text-transparent focus:border-t-transparent focus:border-x-transparent focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 text-white dark:focus:ring-neutral-600 focus:border-b-[#00B1D0]
                            focus:pt-6
                            focus:pb-2
                            [&:not(:placeholder-shown)]:pt-6
                            [&:not(:placeholder-shown)]:pb-2
                            autofill:pt-6
                            autofill:pb-2" placeholder="">
                            <label for="hs-floating-underline-input-email" class="sk absolute top-0 start-0 py-4 px-0 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none 
                              peer-focus:scale-90
                              peer-focus:translate-x-0.5
                              peer-focus:-translate-y-1.5
                              peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                              peer-[:not(:placeholder-shown)]:scale-90
                              peer-[:not(:placeholder-shown)]:translate-x-0.5
                              peer-[:not(:placeholder-shown)]:-translate-y-1.5
                              peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500 sk">Amount</label>
                          </div> 
                          <div class="text-xs flex-col flex font-semibold  items-start justify-start sk truncate text-white  w-full mt-2 ">

                            <input type="date" class="py-4 sk bg-[#2B2B2B] rounded-lg text-white outline-none px-4 pe-2 block w-full text-sm border-b border-[#4C4C4C] disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-neutral-400 hide-calendar-icon" id="date" name="date" placeholder="Start Date" />

                            <span class="text-red-500"></span>
                        </div>
                        
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-[#4C4C4C]">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border  bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 border-[#4C4C4C] dark:text-white dark:hover:bg-neutral-800"
                            data-hs-overlay="#addIncome">
                            Close
                        </button>
                        <button type="submit"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-[#05D9FF] text-[#272727] hover:bg-[#00B1D0] disabled:opacity-50 disabled:pointer-events-none sk-bold">
                            Save changes
                        </button>
                    </form>
{{-- 
                        <div class="p-8">
                            <h2 class="text-white text-2xl">Add New Income</h2>
                            <form action="{{ route('income.store') }}" method="POST" class="mt-4">
                                @csrf
                                <div class="mb-4">
                                    <label for="income_name" class="block text-white">Income Name:</label>
                                    <input type="text" name="income_name" id="income_name" class="w-full p-2 mt-1 rounded bg-gray-800 text-white">
                                </div>
                                <div class="mb-4">
                                    <label for="amount" class="block text-white">Amount:</label>
                                    <input type="number" name="amount" id="amount" class="w-full p-2 mt-1 rounded bg-gray-800 text-white">
                                </div>
                                <div class="mb-4">
                                    <label for="date" class="block text-white">Date:</label>
                                    <input type="date" name="date" id="date" class="w-full p-2 mt-1 rounded bg-gray-800 text-white">
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Add Income</button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>