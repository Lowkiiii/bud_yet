<div class="z-30  relative w-auto mx-auto justify-center items-center    xl:w-[92rem]">
    <div class="px-[4.5rem]">
        <div class="py-8 text-white">
            <div class="flex flex-row">
                <img src="/image/BY-WHITE.png" class="h-8" alt="">
                <div class="ml-24 flex text-lg text-[#7A7A7A]">
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                            <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                            <path fill-rule="evenodd"
                                d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"
                                clip-rule="evenodd" />
                        </svg>


                        <p class="ml-1">Accounts</p>
                    </button>
                    <button id="ViewSchedule"
                        class="flex items-center px-6 justify-center {{ request()->routeIs('') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd"
                                d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                                clip-rule="evenodd" />
                        </svg>

                        <p class="ml-1">Schedule</p>
                    </button>
                    <button
                        class="flex items-center px-6 justify-center {{ request()->routeIs('') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]"">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>



                        <p class="ml-1">Transaction</p>
                    </button>
                   



                </div>
                <div class="flex my-auto flex-grow justify-end items-end">
                    <div class="relative flex items-center">
                        <span class="my-auto mr-2">{{ Auth::user()->username }}</span>
                
                        <!-- Profile Picture Button -->
                        <button class="w-11 h-11 rounded-full overflow-hidden relative border border-[#05D9FF]" id="menuButton">
                            <div class="relative group">
                                <label for="file_input" class="cursor-pointer">
                                    <img src="image/dog-Close.png" alt="Profile" class="w-full h-full rounded-full object-cover">
                                </label>
                            </div>
                        </button>
                
                        <!-- Menu Container -->
                        <div id="menu" class="absolute hidden bg-[#2B2B2B] p-1 border border-[#244C53] rounded-lg shadow-lg w-55 transform translate-y-full bottom-[-1rem] left-[12.5rem] -translate-x-1/2 z-30">
                            <div class="flex flex-row justify-center items-center py-1 px-3 text-blackQ hover:text-[#05D9FF]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" height="15" width="15" viewBox="0 0 384.971 384.971" xml:space="preserve">
                                    <path d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03C192.485,366.299,187.095,360.91,180.455,360.91z" />
                                    <path d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z" />
                                </svg>
                                <ul class="p-1 w-auto font-semibold">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit">Logout</button>
                                        </form>
                                    </li>
                                </ul>
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

        document.getElementById("ViewDashboard").addEventListener("click", function() {
            window.location.href = "{{ route('dashboard.dashboard') }}";
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
