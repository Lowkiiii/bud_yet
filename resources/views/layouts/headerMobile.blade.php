<div
        class="fixed w-full items-center justify-center mx-auto bottom-0 px-4 py-2 sm:hidden bg-[#1B1B1B] border-t border-[#244C53]">
        <div class="flex justify-around items-center mx-auto sk">
            <button id="ViewDashboardMobile"
                class="flex flex-col items-center justify-center px-2 {{ request()->routeIs('dashboard.dashboard') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <p class=" text-[.5rem]">
                    Home
                </p>
            </button>
            <button id="ViewAccountsMobile"
                class="flex flex-col items-center justify-center px-2 {{ request()->routeIs('accounts.accounts') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
            </svg>
                <p class="text-[.5rem]">
                    Accounts
                </p>
            </button>
            <button id="ViewScheduleMobile"
                class="flex flex-col items-center justify-center px-2 {{ request()->routeIs('schedule.schedule') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd"
                        d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                        clip-rule="evenodd" />
                </svg>
                <p class=" text-[.5rem]">
                    Schedule
                </p>
            </button>
            <button id="ViewIncomeMobile"
                class="flex flex-col items-center justify-center px-2 {{ request()->routeIs('income.income') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                        </svg>
                <p class="text-[.5rem]">
                    Income
                </p>
            </button>
            <button id="ViewTransactionMobile"
                class="flex flex-col items-center justify-center px-2 {{ request()->routeIs('transaction.transaction') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                <p class="text-[.5rem]">
                    Transaction
                </p>
            </button>

        </div>
    </div>

    <script>
           document.getElementById("ViewDashboardMobile").addEventListener("click", function() {
        window.location.href = "{{ route('dashboard.dashboard') }}";
    })
            document.getElementById("ViewAccountsMobile").addEventListener("click", function() {
        window.location.href = "{{ route('accounts.accounts') }}";
    })
    document.getElementById("ViewIncomeMobile").addEventListener("click", function() {
        window.location.href = "{{ route('income.income') }}";
    })

    document.getElementById("ViewScheduleMobile").addEventListener("click", function() {
        window.location.href = "{{ route('schedule.schedule') }}";
    })
    document.getElementById("ViewTransactionMobile").addEventListener("click", function() {
        window.location.href = "{{ route('transaction.transaction') }}";
    })

    </script>