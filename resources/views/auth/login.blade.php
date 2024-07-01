@extends('auth.layouts.app')

@section('webtitle')
loginn
@endsection

@section('content')
    <section class="bg-[#1D1D1D] h-screen">
        <div class="flex min-h-full justify-center bg-[#1D1D1D] ">
            <div class="flex flex-col justify-center  sm:w-1/2">
                <div>
                    <div class=" p-3 max-w-full sm:mx-auto sm:max-w-md  animate-fade-in-right ">
                        <div class="px-8 py-9 w-full bg-white rounded-[15px] ">


                            <img src="/image/BUDYET-LOGO.png" alt="BUDYET-LOGO" class="block w-8.08 h-7  mt-8 item-start">

                            <div class="mt-9" id="LoginInfo">
                                <h2 id="" class="text-2xl flex flex-row sk-bold text-[#272727] animate-blink">
                                    <div>&#9996;</div> <span class="">Login</span>
                                    <div class="flex-grow"></div>
                                </h2>


                                <p class="flex text-sm py-1  text-[#747474] animate-blink">
                                    Welcome to Bud-Yet, your online <br> Finance Manager.
                                </p>
                            </div>

                            <div class="mt-9 hidden " id="RegisterInfo">

                                <h2 class="text-2xl flex flex-row sk-bold text-[#272727] animate-blink ">
                                    <div>&#x1F4C8;</div> <span class="">Register</span>
                                    <div class="flex-grow"></div>
                                </h2>



                                <p class="flex text-sm py-1  text-[#747474] animate-blink">
                                    Create an account and Experience easy <br> budgeting and smart money management.
                                </p>
                            </div>

                            {{-- Login Forms --}}
                            <form action="POST" action="{{ route('login') }}">
                                @csrf
                                <div id="LoginForm" class="my-[5.5rem] animate-blink">
                                    <div class="max-w-sm space-y-3">
                                        <div class="relative">
                                            <input type="text" name="username" id="username" value="{{ old('username') }}" required
                                                class="peer py-3 px-4 ps-11 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Enter email">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-4">
                                                <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="relative">
                                            <input type="password" id="password" name="password"
                                                class="peer py-3 px-4 ps-11 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Enter password">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-4">
                                                <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z">
                                                    </path>
                                                    <circle cx="16.5" cy="7.5" r=".5"></circle>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>

                            {{-- Register Form --}}

                            <form action="POST" action="{{ route('register.account') }}">
                                <div class="my-8 hidden animate-blink " id="RegisterForm">

                                    <div class="max-w-sm space-y-3">
                                        <div class="relative">

                                            <div class="flex flex-row">
                                                <div class="relative flex-grow mr-2">
                                                    <input type="first_name" id="first_name"
                                                        class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                        placeholder="First Name">
                                                    <div
                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-70 peer-disabled:pointer-events-none">

                                                    </div>
                                                </div>


                                                <div class="relative flex-grow">
                                                    <input type="text" id="last_name" name="last_name"  value="{{ old('last_name') }}" required
                                                        class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                        placeholder="Last Name">
                                                    <div
                                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none  ps-4 peer-disabled:opacity-70 peer-disabled:pointer-events-none">

                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="relative">
                                            <input type="text" id="username" name="username" value="{{ old('username') }}" required
                                                class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="UserName" id="">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-4">

                                            </div>
                                        </div>
                                        <div class="relative">
                                            <input type="password" id="password" name="password" required
                                                class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Enter Password">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-4">

                                            </div>
                                        </div>
                                        <div class="relative">
                                            <input type="password" form="password_confirmation" name="password"
                                                class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Re-enter Password">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-4">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>


                            <div class="py-6 animate-blink " id="RegisterNow">
                                <button type="submit"
                                    class="inline-block rounded-[12px] bg-[#05D9FF] px-7 pb-2.5 pt-3 text-sm font-medium  leading-normal text-[#272727] transition duration-300 ease-in-out hover:bg-[#00B1D0]  focus:bg-[#00B1D0] focus:outline-none focus:ring-0 active:bg-[#00B1D0] active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] w-full sk-bold "
                                    data-te-ripple-init data-te-ripple-color="light">
                                    Login
                                </button>


                                <div id="" class="text-xs text-[#959595] text-center py-2 ">
                                    <span>Don't have an account?</span>
                                    <div class="flex justify-center items-center">
                                        <button id="RegisterToggle"
                                            class="text-xs text-center text-[#272727] hover:text-[#00B1D0]">Register
                                            Now!</button>
                                    </div>
                                </div>



                            </div>



                            <div class="py-6 hidden animate-blink" id="LoginNow">
                                <button type="submit"
                                    class="  rounded-[12px] bg-[#05D9FF] px-7 pb-2.5 pt-3 text-sm font-medium  leading-normal text-[#272727] transition duration-300 ease-in-out hover:bg-[#00B1D0]  focus:bg-[#00B1D0] focus:outline-none focus:ring-0 active:bg-[#00B1D0] active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] w-full sk-bold "
                                    data-te-ripple-init data-te-ripple-color="light">
                                    Register
                                </button>

                                <div id="" class="text-xs text-[#959595] text-center py-2">
                                    <span>Already have an Account?</span>
                                    <div class="flex justify-center items-center">
                                        <button id="LoginToggle"
                                            class="text-xs text-center text-[#272727] hover:text-[#00B1D0]">Login
                                            Now!</button>
                                    </div>
                                </div>




                            </div>


                        </div>
                    </div>


                </div>
            </div>
            <div class="flex bg-no-repeat bg-cover w-full mx-auto md:flex hidden">
                <div class="w-full h-screen overflow-hidden relative ">
                    <!-- Carousel Container -->
                    <div data-hs-carousel='{"loadingClasses": "opacity-0", "isAutoPlay": true}'
                        class="absolute  left-5 top-[70%] bottom-0 flex items-center justify-center z-10 w-7/12">
                        <div class="hs-carousel relative overflow-hidden w-full h-full">
                            <div
                                class="hs-carousel-body font-gotham font-bold text-5xl  absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                                <!-- Carousel Slides -->
                                <div class="hs-carousel-slide text-[#D6FF65] l animate-fade-in-left">
                                    Welcome to Bud-Yet
                                </div>
                                <div class="hs-carousel-slide text-[#CFB1FB]">
                                    Efficiently Start &<br>
                                    Manage Your Income
                                </div>
                                <div class="hs-carousel-slide text-[#FED4D6]">
                                    Create an account &<br>
                                    start saving money
                                </div>
                            </div>

                        </div>

                        <div
                            class="absolute space-x-2 left-0 top-[55%] bottom-0 flex items-start justify-start hs-carousel-pagination">
                            <span
                                class="hs-carousel-active:bg-[#D6FF65] hs-carousel-active:border-[#D6FF65] h-3 w-8 hs-carousel-active:w-14 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-[#D6FF65] dark:hs-carousel-active:border-[#D6FF65]"></span>

                            <span
                                class="hs-carousel-active:bg-[#CFB1FB] hs-carousel-active:border-[#CFB1FB] h-3 w-8 hs-carousel-active:w-14 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-[#CFB1FB] dark:hs-carousel-active:border-[#CFB1FB]"></span>

                            <span
                                class="hs-carousel-active:bg-[#FED4D6] hs-carousel-active:border-border-[#FED4D6] h-3 w-8 hs-carousel-active:w-14 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-[#FED4D6] dark:hs-carousel-active:border-[#FED4D6]"></span>
                        </div>


                    </div>
                    <div class="">
                        <img src="/image/Abstract-1.png" class="absolute right-0 h-[35rem] opacity-50 animate-spin "
                            alt="">
                    </div>
                    <!-- Background Image -->
                    <img src="/image/Vector.png" alt="BUDYET-LOGO" class="object-cover h-full w-full z-0"
                        style="background-repeat: no-repeat;">
                </div>
            </div>




        </div>

        </div>

        <script src="./node_modules/preline/dist/preline.js"></script>

    </section>
@endsection
