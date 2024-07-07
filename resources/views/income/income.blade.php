@extends('layouts.app')

@section('Webtitle')
    Income
@endsection

@section('content')
    <section class="bg-[#181818] mx-auto justify-center items-center h-full w-full overflow-hidden">
        <!-- Foreground Content -->

        <div>
            @include('modal/addSchedule')
            @include('modal/editSchedule')

        </div>

        <div
            class="z-20 relative w-full mx-auto justify-center items-center overflow-hidden px-[3rem] xl:w-[94rem] animate-blink">

            <div class="p-8 px-26">
                <div class="mt-19 md:mt-18   flex">

                    <h1 class="text-white text-4xl  sk">
                        <div class="flex items-center">
                            <div class="my-auto">
                                <input type="text" name="" class="text-black" id=""> 
                                <button type="button" class="py-3 px-4 my-auto inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"> Submit Income</button>
                            </div>
                         
                            <span class="sk-bold text-[#05D9FF]">
                             
                            </span>
                            <span class="text-center mx-auto ml-2">&#x1F4B5;</span>
                        </div>
                        <p class="text-xl text-[#7A7A7A] mt-1">
                            Add your income. </p>
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

                <div class="w-full flex h-full">

                    <div class="bg-[#2B2B2B] text-white w-full h-full rounded-xl mt-10 p-8 border border-[#244C53] mb-4">
                        <div class="flex flex-col">

                            <div class="sk-bold text-xl text-start w-full  flex flex-row">
                                Income Table
                                <button type="button" class="disabled:pointer-events-none" data-hs-overlay="#addSchedule">
                                    <p class="my-auto px-2 "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="#05D9FF" class="size-6 hover:fill-[#00B1D0]">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </p>
                                </button>
                            </div>
                            <div id="TransactionView"
                                class="sk flex overflow-y-auto w-full h-full
                         [&::-webkit-scrollbar]:w-2
                         [&::-webkit-scrollbar-track]:rounded-full
                         [&::-webkit-scrollbar-track]:bg-gray-100
                         [&::-webkit-scrollbar-thumb]:rounded-full
                         [&::-webkit-scrollbar-thumb]:bg-gray-300
                         dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                         dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">


                                <table class="table-auto text-start w-full">
                                    <thead class="text-start">
                                        <tr class="text-sm text-center py-4  text-[#AAAAAA] border-b border-[#4C4C4C]">
                                            <th class=" py-4 ">#</th>
                                            <th class=" py-4">ID</th>
                                            <th class=" py-4 ">Account Name</th>
                                            <th class=" py-4 ">Balance</th>
                                            <th class=" py-4 ">Date</th>
                                            <th class=" py-4  ">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b text-base text-center border-[#4C4C4C]">
                                            <td class="py-4 "> 1</td>
                                            <td class="py-4">01</td>
                                            <td class="py-4 ">BDO Checking</td>
                                            <td class="py-4  ">20,300.00</td>
                                            <td class="py-4 ">01/07/2024</td>
                                            <td class="py-4  ">
                                                <div class="flex justify-center">
                                                    <div class="flex flex-row "><button class="px-1 "><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="#FF4E4E " class="size-5 hover:fill-[#FF0000]"
                                                                data-hs-overlay="#deleteAccount">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                                    clip-rule="evenodd" />
                                                            </svg></button>
                                                        <button
                                                            class="px-1 border-l border-[#4C4C4C] disabled:pointer-events-none "
                                                            data-hs-overlay="#editSchedule">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="#8FFF74" class="size-5 hover:fill-[#42FF13]">
                                                                <path
                                                                    d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                                                <path
                                                                    d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                                            </svg></button>
                                                    </div>
                                            </td>
                            </div>
                            </tr>
                            <tr class="border-b text-base text-center border-[#4C4C4C]">
                                <td class="py-4 "> 1</td>
                                <td class="py-4">01</td>
                                <td class="py-4 ">BDO Checking</td>
                                <td class="py-4  ">20,300.00</td>
                                <td class="py-4 ">01/07/2024</td>
                                <td class="py-4  ">
                                    <div class="flex justify-center">
                                        <div class="flex flex-row "><button class="px-1 "><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FF4E4E "
                                                    class="size-5 hover:fill-[#FF0000]" data-hs-overlay="#deleteAccount">
                                                    <path fill-rule="evenodd"
                                                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                        clip-rule="evenodd" />
                                                </svg></button>
                                            <button class="px-1 border-l border-[#4C4C4C] disabled:pointer-events-none "
                                                data-hs-overlay="#editAccount">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#8FFF74"
                                                    class="size-5 hover:fill-[#42FF13]">
                                                    <path
                                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                                    <path
                                                        d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                                </svg></button>
                                        </div>
                                </td>
                        </div>
                        </tr>
                        </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <div class="bg-[#2B2B2B] w-full h-full ml-4 text-white rounded-xl mt-10 p-8 border border-[#244C53] mb-4">
                <div class="flex flex-col">

                    <div class="sk-bold text-xl text-start w-full  flex flex-row">
                        Accounts Table
                        <button type="button" class="disabled:pointer-events-none" data-hs-overlay="#addSchedule">
                            <p class="my-auto px-2 "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="#05D9FF" class="size-6 hover:fill-[#00B1D0]">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </p>
                        </button>
                    </div>
                    <div id="TransactionView"
                        class="sk flex overflow-y-auto w-full h-full
                 [&::-webkit-scrollbar]:w-2
                 [&::-webkit-scrollbar-track]:rounded-full
                 [&::-webkit-scrollbar-track]:bg-gray-100
                 [&::-webkit-scrollbar-thumb]:rounded-full
                 [&::-webkit-scrollbar-thumb]:bg-gray-300
                 dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">


                        <table class="table-auto text-start w-full">
                            <thead class="text-start">
                                <tr class="text-sm text-center py-4  text-[#AAAAAA] border-b border-[#4C4C4C]">
                                    <th class=" py-4 ">#</th>
                                    <th class=" py-4">ID</th>
                                    <th class=" py-4 ">Account Name</th>
                                    <th class=" py-4 ">Balance</th>
                                    <th class=" py-4 ">Date</th>
                                    <th class=" py-4  ">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b text-base text-center border-[#4C4C4C]">
                                    <td class="py-4 "> 1</td>
                                    <td class="py-4">01</td>
                                    <td class="py-4 ">BDO Checking</td>
                                    <td class="py-4  ">20,300.00</td>
                                    <td class="py-4 ">01/07/2024</td>
                                    <td class="py-4  ">
                                        <div class="flex justify-center">
                                            <div class="flex flex-row "><button class="px-1 "><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="#FF4E4E " class="size-5 hover:fill-[#FF0000]"
                                                        data-hs-overlay="#deleteAccount">
                                                        <path fill-rule="evenodd"
                                                            d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                            clip-rule="evenodd" />
                                                    </svg></button>
                                                <button
                                                    class="px-1 border-l border-[#4C4C4C] disabled:pointer-events-none "
                                                    data-hs-overlay="#editSchedule">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="#8FFF74" class="size-5 hover:fill-[#42FF13]">
                                                        <path
                                                            d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                                        <path
                                                            d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                                    </svg></button>
                                            </div>
                                    </td>
                    </div>
                    </tr>
                    <tr class="border-b text-base text-center border-[#4C4C4C]">
                        <td class="py-4 "> 1</td>
                        <td class="py-4">01</td>
                        <td class="py-4 ">BDO Checking</td>
                        <td class="py-4  ">20,300.00</td>
                        <td class="py-4 ">01/07/2024</td>
                        <td class="py-4  ">
                            <div class="flex justify-center">
                                <div class="flex flex-row "><button class="px-1 "><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FF4E4E "
                                            class="size-5 hover:fill-[#FF0000]" data-hs-overlay="#deleteAccount">
                                            <path fill-rule="evenodd"
                                                d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                clip-rule="evenodd" />
                                        </svg></button>
                                    <button class="px-1 border-l border-[#4C4C4C] disabled:pointer-events-none "
                                        data-hs-overlay="#editAccount">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#8FFF74"
                                            class="size-5 hover:fill-[#42FF13]">
                                            <path
                                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                            <path
                                                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                        </svg></button>
                                </div>
                        </td>
                </div>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
        </div>
        </div>

        <!-- Inputs for storing Income (di lang pag panasa ako lang di bahala saylo) -->
        {{-- <div class="p-8">
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

        <!-- Background Image -->
        <div class="absolute h-screen w-full bg-[#181818] inset-0 z-0 flex">
            <div class="absolute w-1/2 mx-auto justify-center items-center">
                <div class=" w-full h-full  justify-center items-center">
                    <img src="/image/Abstract2.png"
                        class="absolute object-cover bottom-0 right-0 transform translate-x-[100%] translate-y-[100%] z-30 h-[30rem] opacity-70 hidden md:block"
                        alt="">
                </div>
            </div>
            <div class="w-full h-2/5 bg-[#1D1D1D] z-10">
                <img src="/image/GridBG.png" class="object-cover w-screen h-full" alt="Grid Background">
            </div>
        </div>





    </section>
@endsection
