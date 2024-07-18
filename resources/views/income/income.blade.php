@extends('layouts.app')

@section('Webtitle')
Income
@endsection

@section('content')
<section class="bg-[#181818] mx-auto justify-center items-center h-full w-full overflow-hidden">
    <!-- Foreground Content -->

    <div>
        @include('modal/deleteAccount')
        @include('modal/addIncome')

    </div>

    <div
    class="z-20 relative  pt-8 sm:pt-0  mx-auto justify-center items-center overflow-hidden sm:px-[3rem] w-full xl:w-[94rem] animate-blink">

    <div class="sm:p-4 p-4 sm:px-26">
        <div class="pt-4 sm:pt-0 flex">
            <h1 class="text-white sm:text-4xl text-xl  sk">
                <div class="flex items-center">
                        <span class="sk-bold text-[#05D9FF]">
                            Income &#x1F4B5;
                        </span>

                    </div>
                    <p class="text-base sm:text-xl text-[#7A7A7A] mt-0 sm:mt-1">
                        Add your income. </p>
                </h1>
                <div class="hidden sm:flex flex-row items-center ms-auto ">
                    <div class="flex flex-row">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF" class="size-8 mr-3">
                            <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                        </svg>
                        <p class="my-auto sk text-xl text-white">{{ now()->format('F d, Y') }}</p>
                    </div>
                </div>
            </div>

            <div class="w-full relative sm:flex h-full">

                <div class="bg-[#2B2B2B] text-white w-full sm:w-1/2 h-full rounded-xl mt-4 sm:mt-10 p-4 sm:p-8 border border-[#244C53] mb-4">
                    <div class="flex flex-col">

                        <div class="sk-bold text-base sm:text-xl text-start w-full  flex flex-row">
                            Current Income
                            <button type="button" class="disabled:pointer-events-none" data-hs-overlay="#addIncome">
                                <p class="my-auto px-1 sm:px-2 "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF" class="size-5 sm:size-6 hover:fill-[#00B1D0]">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                                    </svg>
                                </p>
                            </button>
                        </div>
                        <div class="flex flex-col">

                            <h1 class="text-xl sm:text-4xl sk-bold py-1 sm:py-3 text-[#05D9FF]">
                                @if (!empty($totalIncome))
                                {{-- Display calculated total amount from the controller --}}
                                {{ number_format($totalIncome, 2) }}
                                @else
                                <span class="whitespace-nowrap">No Data</span>
                            @endif
                            </h1>
                            <p class="sk text-xs sm:text-sm text-[#AAAAAA]">
                                Your last income was <span class="text-[#05D9FF] sk-bold">
                                    @if (!empty($totalPastIncome))
                                    {{ number_format($totalPastIncome, 2) }}
                                    @else
                                    <span>No Data</span>
                                    @endif
                                </span> last
                                month!
                            </p>
                        </div>
                    </div>

                </div>

                <div class="bg-[#2B2B2B] w-full ml-0 sm:ml-4 text-white rounded-xl mt-4 sm:mt-10 p-4 sm:p-8 border border-[#244C53] mb-4">
                    <div class="flex flex-col">

                        <div class="sk-bold text-xl text-start w-full  flex flex-row">
                            Active Accounts
                        </div>
                        <div id="TransactionView" class="sk flex overflow-y-auto w-full h-full
                             [&::-webkit-scrollbar]:w-2
                             [&::-webkit-scrollbar-track]:rounded-full
                             [&::-webkit-scrollbar-track]:bg-gray-100
                             [&::-webkit-scrollbar-thumb]:rounded-full
                             [&::-webkit-scrollbar-thumb]:bg-gray-300
                             dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                             dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">


                            <table class="table-auto text-start w-full">
                                <thead class="text-start">
                                    <tr class="text-xs sm:text-sm text-center py-4  text-[#AAAAAA] border-b border-[#4C4C4C]">
                                        <th class=" py-4 px-3">#</th>
                                        {{-- <th class=" py-4">ID</th> --}}
                                        <th class=" py-4 px-3 ">Income Name</th>
                                        <th class=" py-4 px-3 ">Balance</th>
                                        <th class=" py-4 px-3 ">Date</th>
                                        <th class=" py-4 px-3 ">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($userIncome) && count($userIncome) > 0)
                                    @php $rowNumber = 1; @endphp
                                    @foreach ($userIncome as $userIncome)
                                    <tr class="border-b text-base text-center border-[#4C4C4C]">
                                        <td class="py-4 ">{{ $rowNumber }}</td>
                                        {{-- <td class="py-4 "> {{ $userIncome->id }}</td> --}}
                                        <td class="py-4 "> {{ $userIncome->income_name }}</td>
                                        <td class="py-4 "> {{ $userIncome->amount }}</td>
                                        @php $timestamp = strtotime($userIncome->date) @endphp
                                        <td class="py-4">{{ date('F d, Y', $timestamp) }}</td>
                                        {{-- <td class="py-4 "> {{ $userIncome->date }}</td> --}}
                                        <td class="py-4  ">
                                            <div class="flex justify-center">
                                                <div class="flex flex-row "><button class="px-1 "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FF4E4E " class="size-5 hover:fill-[#FF0000]" data-hs-overlay="#deleteAccount">
                                                            <!-- SVG content -->
                                                        </svg></button>
                                                </div>
                                        </td>
                                    </tr>
                                    @php $rowNumber++; @endphp
                                    @endforeach
                                    @else
                                    <tr>
                                        <td class="py-4 whitespace-nowrap">No Data</td>
                                    </tr>
                                    @endif
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
                <img src="/image/Abstract2.png" class="absolute object-cover bottom-0 right-0 transform translate-x-[100%] translate-y-[100%] z-30 h-[30rem] opacity-70 hidden md:block" alt="">
            </div>
        </div>
        <div class="w-full h-2/5 bg-[#1D1D1D] z-10 sm:block hidden">
            <img src="/image/GridBG.png" class="object-cover w-screen h-full" alt="Grid Background">
        </div>
    </div>

</section>
@endsection