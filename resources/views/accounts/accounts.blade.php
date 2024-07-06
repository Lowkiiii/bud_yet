@extends('layouts.app')

@section('Webtitle')
    Dashboard
@endsection

@section('content')
    <section class="bg-[#181818] mx-auto justify-center items-center h-full w-full overflow-hidden">
        <!-- Foreground Content -->

       <div>
        @include('modal/addAccount')
       </div>

        <div
            class="z-20 relative w-full mx-auto justify-center items-center overflow-hidden px-[3rem] xl:w-[94rem] animate-blink">

            <div class="p-8 px-26">
                <div class="mt-19 md:mt-18  flex">

                    <h1 class="text-white text-4xl  sk">
                        <div class="flex items-center">
                            <span class="sk-bold text-[#05D9FF]">Accounts</span>
                            <span class="text-center pb-3 ml-2">&#x1F4B3;</span>
                        </div>
                        <p class="text-xl text-[#7A7A7A] mt-1">
                            Create and manage your accounts. </p>
                    </h1>
                    <div class="flex flex-row items-center ms-auto ">
                        <div class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF" class="size-8 mr-3">
                                <path
                                    d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                <path fill-rule="evenodd"
                                    d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="my-auto sk text-xl text-white">{{ now()->format('F d, Y') }}</p>
                        </div>

                    </div>



                </div>


            </div>


        </div>


        <!-- Background Image -->
        <div class="absolute h-full w-full bg-[#181818] inset-0 z-0 flex">



            <div
                class="absolute pt-[16rem] w-full h-screen   mx-auto flex flex-col overflow-y-hidden justify-center items-center z-50 text-white animate-blink">
                <div class="sk-bold text-xl text-start px-24 w-full flex flex-row">
                    Active Accounts
                    <button type="button" class="disabled:pointer-events-none" data-hs-overlay="#hs-basic-modal">
                        <p class="my-auto px-2 "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF"
                                class="size-6 hover:fill-[#00B1D0]">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </p>
                    </button>
                </div>
                <div id="TransactionView"
                    class="sk flex  px-24 overflow-y-auto w-full max-h-[330px]
                     [&::-webkit-scrollbar]:w-2
                     [&::-webkit-scrollbar-track]:rounded-full
                     [&::-webkit-scrollbar-track]:bg-gray-100
                     [&::-webkit-scrollbar-thumb]:rounded-full
                     [&::-webkit-scrollbar-thumb]:bg-gray-300
                     dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                     dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">


                    <table class="table-fixed text-start w-full">
                        <thead class="text-start">
                            <tr class="text-sm py-4 text-start text-[#AAAAAA] border-b border-[#4C4C4C]">
                                <th class="text-start py-4 ">#</th>
                                <th class="text-start py-4">ID</th>
                                <th class="text-start py-4 ">Account Name</th>
                                <th class="text-start py-4 ">Balance</th>
                                <th class="text-start py-4 ">Date</th>
                                <th class="text-start py-4 ">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-[#4C4C4C]">
                                <td class="py-4 text-sm"> &#x1F354; Food</td>
                                <td class="py-4 text-sm">BDO Checking</td>
                                <td class="py-4 text-sm">Withdraw</td>
                                <td class="py-4 text-sm text-[#FF1F1F]">-200.00</td>
                                <td class="py-4 text-sm">01/07/2024</td>
                            </tr>
                            <tr class="border-b border-[#4C4C4C]">
                                <td class="py-4 text-sm"> &#x1F354; Food</td>
                                <td class="py-4 text-sm">BDO Checking</td>
                                <td class="py-4 text-sm">Withdraw</td>
                                <td class="py-4 text-sm text-[#FF1F1F]">-200.00</td>
                                <td class="py-4 text-sm">01/07/2024</td>
                            </tr>
                            <tr class="border-b border-[#4C4C4C]">
                                <td class="py-4 text-sm"> &#x1F354; Food</td>
                                <td class="py-4 text-sm">BDO Checking</td>
                                <td class="py-4 text-sm">Withdraw</td>
                                <td class="py-4 text-sm text-[#FF1F1F]">-200.00</td>
                                <td class="py-4 text-sm">01/07/2024</td>
                            </tr>
                            <tr class="border-b border-[#4C4C4C]">
                                <td class="py-4 text-sm"> &#x1F354; Food</td>
                                <td class="py-4 text-sm">BDO Checking</td>
                                <td class="py-4 text-sm">Withdraw</td>
                                <td class="py-4 text-sm text-[#FF1F1F]">-200.00</td>
                                <td class="py-4 text-sm">01/07/2024</td>
                            </tr>

                            <tr class="border-b border-[#4C4C4C]">
                                <td class="py-4 text-sm"> &#x1F354; Food</td>
                                <td class="py-4 text-sm">BDO Checking</td>
                                <td class="py-4 text-sm">Withdraw</td>
                                <td class="py-4 text-sm text-[#FF1F1F]">-200.00</td>
                                <td class="py-4 text-sm">01/07/2024</td>
                            </tr>
                            <tr class="border-b border-[#4C4C4C]">
                                <td class="py-4 text-sm"> &#x1F354; Food</td>
                                <td class="py-4 text-sm">BDO Checking</td>
                                <td class="py-4 text-sm">Withdraw</td>
                                <td class="py-4 text-sm text-[#FF1F1F]">-200.00</td>
                                <td class="py-4 text-sm">01/07/2024</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="absolute w-1/2 mx-auto justify-center items-center">
                <div class="w-full h-full justify-center items-center">
                    <img src="/image/Abstract2.png"
                        class="absolute object-cover bottom-0 right-0 transform translate-x-[100%] translate-y-[100%] z-30 h-[30rem] opacity-30 hidden md:block"
                        alt="">
                </div>
            </div>

            <div class="w-full h-2/5 bg-[#1D1D1D] z-10">
                <img src="/image/GridBG.png" class="object-cover w-screen h-full" alt="Grid Background">
            </div>
        </div>



    </section>
@endsection
