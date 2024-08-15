@extends('layouts.app')

@section('Webtitle')
    Dashboard
@endsection

@section('content')
    <section class="bg-[#181818] sk mx-auto justify-center items-center h-full w-full overflow-hidden">
        <!-- Foreground Content -->
        <div
            class="z-20 relative  pt-8 sm:pt-0  mx-auto justify-center items-center overflow-hidden sm:px-[3rem] w-full xl:w-[94rem] animate-blink">

            <div class="sm:p-4 p-4 sm:px-26">
                <div class=" pt-4 sm:pt-0  flex">
                    <h1 class="text-white sm:text-4xl text-xl  sk">
                        Hello, <span class="sk-bold text-[#05D9FF]"> {{ Auth::user()->username }}</span> &#128075;
                        <p class="text-base sm:text-xl flex  text-[#7A7A7A] mt-1">
                            Welcome to the Dashboard <span class="sm:block hidden">, track your finances here! </span> </p>
                    </h1>
                    <div class=" flex-row items-center ms-auto hidden sm:flex ">
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
                <div class="mt-[1rem] sm:mt-[2rem]  text-white">
                    <div class="w-full flex-row sm:flex pb-4">
                        <div
                            class="w-full absolute sm:relative right-0 sm:w-7/12 mr-0 sm:mr-4 flex sm:flex-col overflow-x-auto sm:overflow-x-hidden ">
                            <div
                                class="bg-[#2B2B2B]  min-w-[200px] sm:min-w-auto rounded-xl p-4 pr-9 sm:pr-0  border border-[#244C53] sm:mb-4 mb-3 ml-4 mr-2 sm:m-0">
                                <div class="flex flex-col">
                                    <p class="text-[#AAAAAA] text-xs sm:text-base"">Deposit</p>
                                    <h1 class="text-2xl sm:text-4xl sk-bold py-1 sm:py-3 text-[#05D9FF]">
                                        @if (!empty($totalDeposit))
                                            {{-- Display calculated total amount from the controller --}}
                                            {{ number_format($totalDeposit, 2) }}
                                        @else
                                            <span class="whitespace-nowrap ">No Data</span>
                                        @endif

                                    </h1>
                                    <p class="sk text-[0.6rem] sm:text-sm text-[#AAAAAA]">
                                        Your last income was <span class="text-[#05D9FF] sk-bold">
                                            @if (!empty($totalWithdraw))
                                                {{-- Display calculated total amount from the controller --}}
                                                {{ number_format($totalWithdraw, 2) }}
                                            @else
                                                <span class="whitespace-nowrap ">No Data</span>
                                            @endif
                                        </span> last
                                        month!
                                    </p>
                                </div>
                            </div>
                            <div
                                class="bg-[#2B2B2B] min-w-[200px] sm:min-w-auto rounded-xl p-4 pr-9 sm:pr-0 border border-[#244C53] sm:mb-4 mb-3 mr-2 sm:m-0">
                                <div class="flex flex-col">
                                    <p class="text-[#AAAAAA] text-xs sm:text-base">Expenses</p>
                                    <h1 class="text-2xl sm:text-4xl sk-bold py-1 sm:py-3 text-[#FF1F1F]">
                                        @if (!empty($totalWithdraw))
                                        {{-- Display calculated total amount from the controller --}}
                                        {{ number_format($totalWithdraw, 2) }}
                                        @else <span class="whitespace-nowrap">
                                            No Data
                                        </span>
                                        @endif
                                    </h1>
                                    <p class="sk text-[0.6rem]  sm:text-sm text-[#AAAAAA]">
                                        Your last expense was <span class="text-[#FF1F1F] sk-bold">
                                            @if (!empty($totalPastWithdraw))
                                                {{ number_format($totalPastWithdraw, 2) }}
                                            @else
                                                <span>No Data</span>
                                            @endif
                                        </span> last
                                        month!
                                    </p>
                                </div>
                            </div>
                            <div
                                class="bg-[#2B2B2B]  min-w-[200px] sm:min-w-auto rounded-xl p-4 pr-9 sm:pr-0 border border-[#244C53] sm:mb-4 mb-3 mr-4 sm:m-0">
                                <div class="flex flex-col">
                                    <p class="text-[#AAAAAA] text-xs sm:text-base"">Total Balance</p>
                                    <h1 class="text-2xl sm:text-4xl sk-bold py-1 sm:py- ">
                                        @if (!empty($totalAmount))
                                            {{-- Display calculated total amount from the controller --}}
                                            {{ number_format($totalAmount, 2) }}
                                        @else
                                            <span class="whitespace-nowrap">No Data</span>
                                        @endif

                                    </h1>
                                    <p class="sk text-[0.6rem] sm:text-sm text-[#AAAAAA]">
                                        Your last balance was <span class=" whitespace-nowrap sk-bold">
                                            @if (!empty($totalPastAmount))
                                                {{ number_format($totalPastAmount, 2) }}
                                                @else
                                                <span>No Data</span>
                                            @endif
                                       
                                        </span> last
                                        month!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full pt-[8.2rem] sm:pt-0 mr-4 ">
                            <div
                                class="bg-[#2B2B2B] text-lg rounded-xl sk-bold p-4 border  h-full border-[#244C53] mt-2 sm:mt-0 ">
                                <div class="flex">
                                    Transaction Statistics
                                    {{-- <button>
                                    <p class="my-auto px-2 "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF" class="size-6 hover:fill-[#00B1D0]">
                                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                                        </svg>
                                    </p>
                                </button> --}}
                                </div>
                                </p>
                                <!-- Legend Indicator -->
                                <div class="sk flex justify-start items-center gap-x-4 mb-3 sm:mb-6">
                                    <div class="inline-flex items-center">
                                        <span class="size-2.5 inline-block bg-[#05D9FF] rounded-sm me-2"></span>
                                        <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                                            Deposit
                                        </span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="size-2.5 inline-block bg-[#FF1F1F] rounded-sm me-2"></span>
                                        <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                                            Expense
                                        </span>
                                    </div>
                                </div>
                                <!-- End Legend Indicator -->
                                <div id="hs-curved-area-charts"></div>
                            </div>
                        </div>
                        <div class="w-full sm:w-3/5 sm:mt-0 mt-4 ">
                            <div
                                class="bg-[#2B2B2B]  text-lg rounded-xl sk-bold  w-full p-4 border h-full [32rem] border-[#244C53] ">
                                <div class="flex">
                                    Account Listing
                                    <button type="button" id="ViewAccountFromDashboard" class="my-auto px-2 "><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF"
                                            class="size-6 hover:fill-[#00B1D0]">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <script>
                                        document.getElementById("ViewAccountFromDashboard").addEventListener("click", function() {
                                            window.location.href = "{{ route('accounts.accounts') }}";
                                        })
                                    </script>
                                </div>
                                <div id="AccountView"
                                    class="sk  overflow-y-auto w-full h-full
                                 [&::-webkit-scrollbar]:w-2
                                 [&::-webkit-scrollbar-track]:rounded-full
                                 [&::-webkit-scrollbar-track]:bg-gray-100
                                 [&::-webkit-scrollbar-thumb]:rounded-full
                                 [&::-webkit-scrollbar-thumb]:bg-gray-300
                                 dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                                 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                                    <table class="table-auto text-center w-full">
                                        <table class=" table-auto text-center py-4 w-full ">
                                            <thead class="text-center py-4 ">
                                                <tr class="text-sm py-4 text-[#AAAAAA] border-b border-[#4C4C4C]">
                                                    <th class="text-center py-4 text-sm "">#</th>
                                                    <th class="text-center py-4 text-sm "">Account Name</th>
                                                    <th class=" text-center py-4 ">Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- show list of accounts --}}
                                                @if (!empty($account) && count($account) > 0)
                                                    @php $rowNumber = 1; @endphp
                                                    @foreach ($account as $account1)
                                                        <tr class="border-b text-base text-center border-[#4C4C4C]">
                                                            <td class="py-4">{{ $rowNumber }}</td>
                                                            <td class="py-4">{{ $account1->account_name }}</td>
                                                            <td class="py-4 ">{{ $account1->balance }}</td>
                                </div>
                                </tr>
                                @php $rowNumber++; @endphp
                                @endforeach
                            @else
                                <tr>
                                    <td class="py-4 text-sm text-[#AAAAAA]">No Data</td>
                                </tr>
                                @endif
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full pb-12 sm:pb-0 sm:flex text-white">
                <div class="w-full  mr-4">
                    <div class="bg-[#2B2B2B]  text-lg rounded-xl sk-bold p-4 border sm:h-auto  border-[#244C53] ">
                        <div class="flex">
                            Recent Transaction
                            <button>
                                <p class="my-auto px-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF"
                                        class="size-6 hover:fill-[#00B1D0]">
                                        <path fill-rule="evenodd"
                                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </p>
                            </button>
                        </div>
                        <div id="TransactionView"
                            class="sk overflow-y-auto w-full max-h-[14rem]
                                    [&::-webkit-scrollbar]:w-2
                                 [&::-webkit-scrollbar-track]:rounded-full
                                 [&::-webkit-scrollbar-track]:bg-gray-100
                                 [&::-webkit-scrollbar-thumb]:rounded-full
                                 [&::-webkit-scrollbar-thumb]:bg-gray-300
                                 dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                                 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                            <table class="table-auto  text-start w-full">
                                <thead class="text-start ">
                                    <tr
                                        class="text-[0.7rem] px-10 sm:py-4 sm:px-4 sm:text-sm py-1 text-start text-[#AAAAAA] border-b border-[#4C4C4C] whitespace-nowrap">
                                        <th class="px-4 p-3">#</th>
                                        <th class="px-4">Account Name</th>
                                        <th class="px-4">Type</th>
                                        <th class="px-4">Amount</th>
                                        <th class="px-4">Transaction Category</th>
                                        <th class="px-4">Date</th>
                                    </tr>
                                </thead>
                                <tbody class=" text-[0.6rem] text-start sm:text-sm">
                                    @if (!empty($transactions) && count($transactions) > 0)
                                        @php $rowNumber = 1; @endphp
                                        @foreach ($transactions as $transaction)
                                            <tr class="border-b  text-start border-[#4C4C4C]">
                                                <td class="py-4 text-center">{{ $rowNumber }}</td>
                                                {{-- <td class="py-4">{{ $transaction->id }}</td> --}}
                                                <td class="py-4">{{ $transaction->account_name }}</td>
                                                <td class="py-4">{{ ucfirst($transaction->type) }}</td>
                                                <td class="py-4">{{ number_format($transaction->amount, 2) }}</td>
                                                <td class="py-4">{{ $transaction->category }}</td>
                                                @php $timestamp = strtotime($transaction->date) @endphp
                                                <td class="py-4">{{ date('F d, Y', $timestamp) }}</td>
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
                            <div>
                            </div>
                        </div>
                        <div class="flex  justify-end items-end">
                            <button class="items-center text-[#00B1D0] justify-end text-sm mt-3 hover:text-[#3BE1FF]"
                                id="TransactionSeeAll">
                                See All
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full  sm:w-[31rem] mt-4 sm:mt-0">
                    <div class="bg-[#2B2B2B]  text-lg rounded-xl sk-bold p-4 border sm:h-auto  border-[#244C53] ">
                        <div class="flex">
                            Schedule
                            <button>
                                <p class="my-auto px-2 "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="#05D9FF" class="size-6 hover:fill-[#00B1D0]">
                                        <path fill-rule="evenodd"
                                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </p>
                            </button>
                        </div>
                        <div id="ScheduleView"
                            class=" sk overflow-y-auto w-full max-h-[14rem]
                                 [&::-webkit-scrollbar]:w-2
                                 [&::-webkit-scrollbar-track]:rounded-full
                                 [&::-webkit-scrollbar-track]:bg-gray-100
                                 [&::-webkit-scrollbar-thumb]:rounded-full
                                 [&::-webkit-scrollbar-thumb]:bg-gray-300
                                 dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                                 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                            <table class="table-auto text-start w-full">
                                <table class=" table-auto text-start py-4 w-full ">
                                    <thead class="text-start">
                                        <tr class=" text-xs sm:text-base text-center py-4   text-[#AAAAAA] border-b border-[#4C4C4C]">
                                            <th class="px-4 py-4 ">#</th>
                                            <th class=" px-4 py-4 ">Name</th>
                                            <th class=" px-4 py-4  ">Start Date</th>
                                            <th class=" px-4 py-4  ">Endt Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($schedules) && count($schedules) > 0)
                                        @php $rowNumber = 1; @endphp
                                        @foreach ($schedules as $schedules)  

                                        <tr class=" border-b border-[#4C4C4C]">
                                            <td class="py-4 "> {{$rowNumber}}</td>
                                            <td class="py-4 "> {{$schedules->name}}</td>
                                            @php $timestamp = strtotime($schedules->start_date) @endphp
                                        <td class="py-4">{{ date('F d, Y', $timestamp) }}</td>
                                        @php $timestamp = strtotime($schedules->end_date) @endphp
                                        <td class="py-4">{{ date('F d, Y', $timestamp) }}</td>
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
                        <div class="flex  justify-end items-end">
                            <button class="items-center text-[#00B1D0] justify-end text-sm mt-3 hover:text-[#3BE1FF]"
                                id="ScheduleSeeAll">
                                See All
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Background Image -->
        <div class="absolute h-screen w-full bg-[#181818] inset-0 z-0 flex">
            <div class="absolute w-1/2 mx-auto justify-center items-center hidden  sm:block">
                <div class=" w-full h-full  justify-center items-center">
                    <img src="/image/Abstract2.png"
                        class="absolute object-cover bottom-0 right-0 transform translate-x-[100%] translate-y-[100%] z-30 h-[30rem] opacity-70 hidden md:block"
                        alt="">
                </div>
            </div>
            <div class="w-full h-2/5 bg-[#1D1D1D] z-10 hidden sm:block">
                <img src="/image/GridBG.png" class="object-cover w-screen h-full" alt="Grid Background">
            </div>
        </div>
        <script>
            document.getElementById("ViewAccounts").addEventListener("click", function() {
                window.location.href = "{{ route('accounts.accounts') }}";
            })
            document.getElementById("ViewDashboard").addEventListener("click", function() {
                window.location.href = "{{ route('dashboard.dashboard') }}";
            })
        </script>

        {{-- for monthly statistics --}}
        <script>
            var incomeData = @json(array_values($incomeData));
            var expenseData = @json(array_values($expenseData));
        </script>
    </section>
@endsection
