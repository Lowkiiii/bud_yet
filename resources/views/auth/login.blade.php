@extends('auth.layouts.app')

@section('webtitle')
Login
@endsection

@section('content')

<script>
 

    window.addEventListener('DOMContentLoaded', (event) => {
    // Output Laravel session messages into JavaScript variables
    var errorMessage = @json(session('error'));
    var successMessage = @json(session('success'));

    // Check and display error message alert
    if (errorMessage) {
        alert(errorMessage);
    }

    // Check and display success message alert
    if (successMessage) {
        alert(successMessage);
    }
});

</script>


<section class="bg-[#1D1D1D] h-screen">
    <div class="flex min-h-full justify-center bg-[#1D1D1D] ">
        <div class="flex flex-col justify-center w-full  sm:w-1/2">
         
                <div class=" p-2 w-full mx-auto sm:mx-auto sm:w-10/12 sm:max-w-md  animate-fade-in-right ">
                    <div class="px-8 py-9 w-full  bg-[#1D1D1D] rounded-[15px] sm:bg-white ">

                        <img src="/image/BY-WHITE.png" alt="BUDYET-LOGO" class="block sm:hidden w-8.08 h-7  mt-6 item-start">
                        <img src="/image/BUDYET-LOGO.png" alt="BUDYET-LOGO" class="sm:block hidden w-8.08 h-7  mt-6 item-start">

                        <div class="mt-6" id="LoginInfo">
                            <h2 id="" class="text-2xl flex flex-row sk-bold text-white sm:text-[#272727] animate-blink">
                                <div>&#9996;</div> <span class="">Login</span>
                                <div class="flex-grow"></div>
                            </h2>


                            <p class="flex text-sm py-1 text-white sm:text-[#747474] animate-blink">
                                Welcome to Bud-Yet, your online <br> Finance Manager.
                            </p>
                        </div>

                        <div class="mt-6 hidden " id="RegisterInfo">

                            <h2 class="text-2xl flex flex-row sk-bold text-white sm:text-[#272727] animate-blink ">
                                <div>&#x1F4C8;</div> <span class="">Register</span>
                                <div class="flex-grow"></div>
                            </h2>



                            <p class="flex text-sm py-1  text-[#747474] animate-blink">
                                Create an account and Experience easy <br> budgeting and smart money management.
                            </p>
                        </div>

                        {{-- Login Forms --}}
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div id="LoginForm" class="my-[5.5rem] animate-blink">
                                <div class="max-w-sm space-y-3">
                                    <div class="relative">
                                        <input type="text" name="username" id="username" required class="peer py-3 px-4 ps-11 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter username">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-4">
                                            <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <input id="hs-toggle-password" type="password" name="password" class="peer py-3 px-4 ps-11 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter Password" required>
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-4">
                                            <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z">
                                                </path>
                                                <circle cx="16.5" cy="7.5" r=".5"></circle>
                                            </svg>
                                        </div>


                                        <button type="button" data-hs-toggle-password='{
                                                "target": "#hs-toggle-password"
                                              }' class="absolute top-0 end-0 p-3.5">
                                            <svg class="flex-shrink-0 text-gray-400 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path class="hs-password-active:hidden" d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                                <path class="hs-password-active:hidden" d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                                <path class="hs-password-active:hidden" d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />

                                                <path class="hidden hs-password-active:block" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path class="hidden hs-password-active:block" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>

                                        </button>
                                    </div>


                                    <button type="" class="inline-block rounded-[12px] bg-[#05D9FF] px-7 pb-2.5 pt-3 text-sm font-medium  leading-normal text-[#272727] transition duration-300 ease-in-out hover:bg-[#24deff]  focus:bg-[#24deff] focus:outline-none focus:ring-0 active:bg-[#24deff] active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] w-full sk-bold " data-te-ripple-init data-te-ripple-color="light">
                                        Login
                                    </button>



                                </div>
                            </div>
                        </form>

                        {{-- Register Form --}}


                        <form method="POST" action="{{ route('register.account') }}">
                            @csrf
                            <div class="my-8 hidden animate-blink " id="RegisterForm">

                                <div class="max-w-sm space-y-3">
                                    <div class="relative">


                                        <div class="flex flex-row">
                                            <div class="relative flex-grow mr-2">
                                                <input type="text" id="first_name" name="first_name" class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="First Name">
                                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-70 peer-disabled:pointer-events-none">

                                                </div>
                                            </div>


                                            <div class="relative flex-grow">
                                                <input type="text" id="last_name" name="last_name" class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm  disabled:opacity-50 disabled:pointer-events-none dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Last Name">
                                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none  ps-4 peer-disabled:opacity-70 peer-disabled:pointer-events-none">

                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="relative">
                                        <input type="text" id="register_username" name="username" class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="UserName">



                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <!-- Optional: Add an icon or indicator here if needed -->
                                        </div>
                                    </div>

                                      <div class="relative">
                                        <input id="hs-toggle-password-Register"  id="register_password" type="password" name="password" class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter Password" required>
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-4">
                                           
                                        </div>


                                        <button type="button" data-hs-toggle-password='{
                                                "target": "#hs-toggle-password-Register"
                                              }' class="absolute top-0 end-0 p-3.5">
                                            <svg class="flex-shrink-0 text-gray-400 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path class="hs-password-active:hidden" d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                                <path class="hs-password-active:hidden" d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                                <path class="hs-password-active:hidden" d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />

                                                <path class="hidden hs-password-active:block" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path class="hidden hs-password-active:block" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>

                                        </button>
                                    </div>
                                    <div class="relative">
                                        <input id="hs-toggle-password-Register" type="password" form="password_confirmation" name="password_confirmation" class="peer py-3 px-4 ps-4 block w-full bg-[#E5E5E5] border-transparent rounded-[12px] text-sm dark:bg-[#E5E5E5] dark:border-transparent dark:text-black dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Confirm Password" required>
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-4">
                                           
                                        </div>


                                        <button type="button" data-hs-toggle-password='{
                                                "target": "#hs-toggle-password-Register"
                                              }' class="absolute top-0 end-0 p-3.5">
                                            <svg class="flex-shrink-0 text-gray-400 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path class="hs-password-active:hidden" d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                                <path class="hs-password-active:hidden" d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                                <path class="hs-password-active:hidden" d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />

                                                <path class="hidden hs-password-active:block" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path class="hidden hs-password-active:block" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>

                                        </button>
                                    </div>

                                    <button type="submit" class="inline-block rounded-[12px] bg-[#05D9FF] px-7 pb-2.5 pt-3 text-sm font-medium  leading-normal text-[#272727] transition duration-300 ease-in-out hover:bg-[#00B1D0]  focus:bg-[#00B1D0] focus:outline-none focus:ring-0 active:bg-[#00B1D0] active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] w-full sk-bold " data-te-ripple-init data-te-ripple-color="light">
                                        Register
                                    </button>

                                </div>
                            </div>
                        </form>

                        <div class="py-4 animate-blink " id="RegisterNow">


                            <div id="" class="text-xs 
                            text-[#959595] text-center py-2 ">
                                <span>Don't have an account?</span>
                                <div class="flex justify-center items-center">
                                    <button id="RegisterToggle" class="text-xs text-center text-white sm:text-[#272727] hover:text-[#00B1D0]">Register
                                        Now!</button>
                                </div>
                            </div>



                        </div>

                        <div class="py-4 animate-blink hidden " id="LoginNow">


                            <div id="" class="text-xs text-[#959595] text-center py-2 ">
                                <span>Already have an Account?</span>
                                <div class="flex justify-center items-center">
                                    <button id="LoginToggle" class="text-xs text-center text-white sm:text-[#272727] hover:text-[#00B1D0]">Login
                                        Now!</button>
                                </div>
                            </div>



                        </div>






                    </div>
                </div>


            
        </div>
        <div class="flex bg-no-repeat hidden bg-cover w-full mx-auto md:flex ">
            <div class="w-full h-screen overflow-hidden relative ">
                <!-- Carousel Container -->
                <div data-hs-carousel='{"loadingClasses": "opacity-0", "isAutoPlay": true}' class="absolute  left-5 top-[70%] bottom-0 flex items-center justify-center z-10 w-7/12">
                    <div class="hs-carousel relative overflow-hidden w-full h-full">
                        <div class="hs-carousel-body font-gotham font-bold text-5xl  absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
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

                    <div class="absolute space-x-2 left-0 top-[55%] bottom-0 flex items-start justify-start hs-carousel-pagination">
                        <span class="hs-carousel-active:bg-[#D6FF65] hs-carousel-active:border-[#D6FF65] h-3 w-8 hs-carousel-active:w-14 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-[#D6FF65] dark:hs-carousel-active:border-[#D6FF65]"></span>

                        <span class="hs-carousel-active:bg-[#CFB1FB] hs-carousel-active:border-[#CFB1FB] h-3 w-8 hs-carousel-active:w-14 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-[#CFB1FB] dark:hs-carousel-active:border-[#CFB1FB]"></span>

                        <span class="hs-carousel-active:bg-[#FED4D6] hs-carousel-active:border-border-[#FED4D6] h-3 w-8 hs-carousel-active:w-14 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-[#FED4D6] dark:hs-carousel-active:border-[#FED4D6]"></span>
                    </div>


                </div>
                <div class="absolute w-full mx-auto justify-center items-center">
                    <div class=" w-full h-full  justify-center items-center">
                        <img src="/image/Abstract-1.png" class="absolute object-cover bottom-0 right-0 transform translate-x-[-5%] translate-y-[100%] z-30 h-[35rem] opacity-60 hidden md:block" alt="">
                    </div>
                </div>
                <!-- Background Image -->
                <img src="/image/Vector.png" alt="BUDYET-LOGO" class="object-cover h-full w-full z-0" style="background-repeat: no-repeat;">
            </div>
        </div>




    </div>

    </div>


</section>
@endsection