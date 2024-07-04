<div class="z-30  relative w-full mx-auto justify-center items-center overflow-hidden md:w-[87rem]">
    <div class="px-8">
        <div class="py-8 text-white">
            <div class="flex flex-row">
                <img src="/image/BY-WHITE.png" class="h-8" alt="">
                <div class="ml-24 flex text-lg text-[#7A7A7A]">
                    <button
                        class="flex items-center px-6 justify-center {{ request()->routeIs('dashboard.dashboard') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>


                        <p class="ml-1  ">

                            Dashboard
                        </p>
                    </button {{ request()->routeIs('') ? 'text-[#05D9FF]' : 'text-[#7A7A7A]' }} hover:text-[#05D9FF]">
                    <button class="flex items-center px-6 justify-center hover:text-[#05D9FF]">
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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
