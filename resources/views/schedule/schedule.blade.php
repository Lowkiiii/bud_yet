@extends('layouts.app')

@section('Webtitle')
    Schedule
@endsection

@section('content')
    <section class="bg-[#181818] mx-auto justify-center items-center h-full w-full overflow-hidden">
        <!-- Foreground Content -->

        <div>
            @include('modal/addSchedule')
            @include('modal/editSchedule')
            @include('modal/deleteSchedule')
            

        </div>


        <div
        class="z-20 relative  pt-8 sm:pt-0  mx-auto justify-center items-center overflow-hidden sm:px-[3rem] w-full xl:w-[94rem] animate-blink">

            <div class="sm:p-4 p-4 sm:px-26">
                <div class="pt-4 sm:pt-0    flex">

                    <h1 class="text-white sm:text-4xl text-xl  sk">
                        <div class="flex items-center">
                            <span class="sk-bold text-[#05D9FF]">Schedule</span>
                            <span class="text-center pb-1 sm:pb-3 ml-1 sm:ml-2">&#x1F4C5;</span>
                        </div>
                        <p class="text-base sm:text-xl text-[#7A7A7A] mt-0 sm:mt-1">
                            Prepare your expnenses for the month. </p>
                    </h1>
                    <div class="hidden sm:flex flex-row items-center ms-auto ">
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


                <div class="bg-[#2B2B2B] text-white rounded-xl mt-4 sm:mt-10 p-4 sm:p-8 border border-[#244C53] mb-4">
                    <div class="flex flex-col">

                        <div class="sk-bold text-xl text-start w-full  flex flex-row">
                            Active Schedules
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
                                    <tr class=" text-xs sm:text-base text-center py-4   text-[#AAAAAA] border-b border-[#4C4C4C]">
                                        <th class="px-4 py-4 ">#</th>
                                        <th class=" px-4 py-4 ">Name</th>
                                        <th class="px-4 py-4 ">Amount</th>
                                        <th class="px-4 py-4  ">Frequency</th>
                                        <th class=" px-4 py-4  ">Start Date</th>
                                        <th class=" px-4 py-4  ">End Date</th>
                                        <th class="px-4 py-4  ">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($schedule) && count($schedule) > 0)
                                    @php $rowNumber = 1; @endphp
                                    @foreach ($schedule as $schedule)
                                    <tr class="border-b text-xs sm:text-base text-center border-[#4C4C4C]">
                                        <td class="py-4 "> {{$rowNumber}}</td>
                                        <td class="py-4 ">{{ $schedule->name }}</td>
                                        <td class="py-4  ">{{ $schedule->amount }}</td>
                                        <td class="py-4 ">{{ $schedule->frequency }}</td>
                                        @php $timestamp = strtotime($schedule->start_date) @endphp
                                        <td class="py-4">{{ date('F d, Y', $timestamp) }}</td>
                                        @php $timestamp = strtotime($schedule->end_date) @endphp
                                        <td class="py-4">{{ date('F d, Y', $timestamp) }}</td>
                                        
                                        <td class="py-4  ">
                                            <div class="flex justify-center">
                                                <div class="flex flex-row "><button class="px-1 "><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="#FF4E4E " class="size-5 hover:fill-[#FF0000]"
                                                            data-hs-overlay="#deleteSchedule-{{ $schedule->id }}">
                                                            <path fill-rule="evenodd"
                                                                d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                                clip-rule="evenodd" />
                                                        </svg></button>
                                                    <button
                                                        class="px-1 border-l border-[#4C4C4C] disabled:pointer-events-none "
                                                        data-hs-overlay="#editSchedule-{{ $schedule->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="#8FFF74" class="size-5 hover:fill-[#42FF13]">
                                                            <path
                                                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                                            <path
                                                                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @php $rowNumber++; @endphp
                                    @endforeach
                                    @else
                                    <tr>
                                        <td class="py-4  ">No Data</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
            <div class="w-full h-2/5 bg-[#1D1D1D] z-10 sm:blocl hidden">
                <img src="/image/GridBG.png" class="object-cover w-screen h-full" alt="Grid Background">
            </div>
        </div>


    </section>
    @include('modal.addSchedule', ['accounts' => $accounts])
@endsection
