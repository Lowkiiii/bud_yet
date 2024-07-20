<div class="z-50 relative w-auto mx-auto justify-center items-center  xl:w-[92rem]">
    <div class=" z-50 bg-[#1B1B1B] fixed border-b border-[#244C53] sk px-4 py-3 w-full  text-[#05D9FF] flex sm:hidden">
        <img src="/image/BY-WHITE.png" class="h-5" alt="">
        <span class="px-4 {{ request()->routeIs('dashboard.dashboard') ? 'block' : 'hidden' }}">Dashboard</span>
        <span class="px-4 {{ request()->routeIs('accounts.accounts') ? 'block' : 'hidden' }}">Accounts</span>
        <span class="px-4 {{ request()->routeIs('schedule.schedule') ? 'block' : 'hidden' }}">Schedule</span>
        <span class="px-4 {{ request()->routeIs('income.income') ? 'block' : 'hidden' }}">Income</span>
        <span class="px-4 {{ request()->routeIs('transaction.transaction') ? 'block' : 'hidden' }}">Transaction</span>

        <div class="hs-dropdown relative inline-flex w-full justify-end items-end">
            <span class="my-auto text-[0.6rem] text-[#AAAAAA] mr-2 sk">{{ Auth::user()->username }}</span>
            <button id="hs-dropdown-default" type="button"
                                class="hs-dropdown-toggle w-8 h-8  rounded-full overflow-hidden relative border border-[#05D9FF]"
                                id="menuButton">
                                <div class="relative group">
                                    <label for="file_input" class="cursor-pointer">
                                        <img src="image/dog-Close.png" alt="Profile"
                                            class="w-full h-full rounded-full object-cover">
                                    </label>
                                </div>
                            </button>
          
            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 w-56 hidden z-10 mt-2 min-w-45 border-[#244C53]  border bg-[#1B1B1B] rounded-lg p-2" aria-labelledby="hs-dropdown-unstyled">
                <div class="py-2 first:pt-0 last:pb-0">
                    <div class="flex items-center gap-x-1 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 bg-[#2B2B2B] cursor-pointer"
                        onclick="document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5 logout-text">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                        </svg>

                        <form id="logout-form" method="POST" action="{{ route('logout') }}"
                            class="inline">
                            @csrf
                            <button type="submit" class="hidden">Logout</button>
                        </form>
                        <span class="logout-text text-gray-800 dark:text-neutral-400 sk">Logout</span>
                    </div>
                </div>
            </div>
          </div>
    </div>
    

    <div>
        @include('layouts/headerMobile')
    </div>
    
    <div class="z-50 px-[4.5rem] hidden sm:block">
        <div class="py-8 text-white">
            <div class="flex flex-row">
                <button type="button" id="ViewLogoDashboard">
                    <img src="/image/BY-WHITE.png" class="h-7" alt="">
                </button>
                <div class="sk ml-24 flex text-lg text-[#7A7A7A]">
                    <button id="ViewDashboard"
                        class="flex items-center px-6 justify-center {{ request()->routeIs('dashboard.dashboard') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <p class="ml-1  ">

                            Dashboard
                        </p>
                    </button>
                    <button id="ViewAccounts"
                        class="flex items-center px-6 justify-center {{ request()->routeIs('accounts.accounts') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                        </svg>



                        <p class="ml-1">Accounts</p>
                    </button>
                    <button type="button" id="ViewSchedule"
                        class="flex items-center px-6 justify-center {{ request()->routeIs('schedule.schedule') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd"
                                d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="ml-1">Schedule</p>
                    </button>
                    <button type="button" id="ViewIncome"
                        class="flex items-center px-6 justify-center {{ request()->routeIs('income.income') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]"">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                        </svg>
                        <p class="ml-1">Income</p>
                    </button>
                    <button type="button" id="ViewTransaction"
                        class="flex items-center px-6 justify-center {{ request()->routeIs('transaction.transaction') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                        <p class="ml-1">Transaction</p>
                    </button>




                </div>
                <div class="flex my-auto flex-grow justify-end items-end">
                    <div class="relative flex text-sm items-center">
                        <span class="my-auto mr-2 sk">{{ Auth::user()->username }}</span>

                        <!-- Profile Picture Button -->


                        <!-- Menu Container -->
                        <div class="hs-dropdown relative inline-flex">
                            <button id="hs-dropdown-default" type="button"
                                class="hs-dropdown-toggle w-11 h-11 rounded-full overflow-hidden relative border border-[#05D9FF]"
                                id="menuButton">
                                <div class="relative group">
                                    <label for="file_input" class="cursor-pointer">
                                        <img src="image/dog-Close.png" alt="Profile"
                                            class="w-full h-full rounded-full object-cover">
                                    </label>
                                </div>
                            </button>

                            <div class="sk hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border border-[#244C53] after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                                aria-labelledby="hs-dropdown-default">
                                <div class="py-2 first:pt-0 last:pb-0">
                                    <div class="flex items-center gap-x-1 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 bg-[#2B2B2B] cursor-pointer"
                                        onclick="document.getElementById('logout-form').submit();">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5 logout-text">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                        </svg>

                                        <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                            class="inline">
                                            @csrf
                                            <button type="submit" class="hidden">Logout</button>
                                        </form>
                                        <span class="logout-text text-gray-800 dark:text-neutral-400 sk">Logout</span>
                                    </div>
                                </div>
                            </div>

                            <style>
                                .cursor-pointer:hover .logout-text {
                                    color: #05D9FF;
                                    /* Change this color to your preferred hover color */
                                }
                            </style>



                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
<script>
    document.getElementById("ViewAccounts").addEventListener("click", function() {
        window.location.href = "{{ route('accounts.accounts') }}";
    })
    document.getElementById("ViewIncome").addEventListener("click", function() {
        window.location.href = "{{ route('income.income') }}";
    })

    document.getElementById("ViewLogoDashboard").addEventListener("click", function() {
        window.location.href = "{{ route('dashboard.dashboard') }}";
    })
    document.getElementById("ViewDashboard").addEventListener("click", function() {
        window.location.href = "{{ route('dashboard.dashboard') }}";
    })

    document.getElementById("ViewSchedule").addEventListener("click", function() {
        window.location.href = "{{ route('schedule.schedule') }}";
    })
    document.getElementById("ViewTransaction").addEventListener("click", function() {
        window.location.href = "{{ route('transaction.index') }}";
    })

    const menuButton = document.getElementById('menuButton');
    const menu = document.getElementById('menu');

    menuButton.addEventListener('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        menu.classList.toggle('hidden');
    });
    document.addEventListener('click', function(event) {
        if (!menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
</script>
</div>
</div>
