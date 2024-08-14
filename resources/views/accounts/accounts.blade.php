@extends('layouts.app')

@section('Webtitle')
Accounts
@endsection

@section('content')
<section class="bg-[#181818] mx-auto justify-center items-center h-full w-full overflow-hidden">
    <!-- Foreground Content -->

    <div>
        @include('modal/addAccount')
        @include('modal/editAccount')
        @include('modal/deleteAccount')
    </div>

    <div class="z-20 relative w-full mx-auto justify-center items-center overflow-hidden px-[3rem] xl:w-[94rem] animate-blink">

        <div class="p-8 px-26">
            <div class="mt-19 md:mt-18 flex">
                <h1 class="text-white text-4xl sk">
                    <div class="flex items-center">
                        <span class="sk-bold text-[#05D9FF]">Accounts</span>
                        <span class="text-center pb-3 ml-2">&#x1F4B3;</span>
                    </div>
                    <p class="text-xl text-[#7A7A7A] mt-1">
                        Create and manage your accounts.
                    </p>
                </h1>
                <div class="flex flex-row items-center ms-auto">
                    <div class="flex flex-row">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF" class="size-8 mr-3">
                            <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                        </svg>
                        <p class="my-auto sk text-xl text-white">{{ now()->format('F d, Y') }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-[#2B2B2B] text-white rounded-xl mt-10 p-8 border border-[#244C53] mb-4">
                <div class="flex flex-col">
                    <div class="sk-bold text-xl text-start w-full flex flex-row">
                        Active Accounts
                        <button type="button" class="ml-auto" data-hs-overlay="#addAccount">
                            <p class="my-auto px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF" class="size-6 hover:fill-[#00B1D0]">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                                </svg>
                            </p>
                        </button>
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
                                <tr class="text-sm text-center py-4 text-[#AAAAAA] border-b border-[#4C4C4C]">
                                    <th class="py-4">#</th>
                                    <th class="py-4">ID</th>
                                    <th class="py-4">Account Name</th>
                                    <th class="py-4">Balance</th>
                                    <th class="py-4">Minimum Balance</th>
                                    <th class="py-4">Maximum Balance</th>
                                    <th class="py-4">Date</th>
                                    <th class="py-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($accounts) && $accounts->count() > 0)
                                @php $rowNumber = 1; @endphp
                                @foreach ($accounts as $account)
                                    <tr class="border-b text-base text-center border-[#4C4C4C]">
                                        <td class="py-4">{{ $rowNumber }}</td>
                                        <td class="py-4">{{ $account->id }}</td>
                                        <td class="py-4">{{ $account->account_name }}</td>
                                        <td class="py-4">{{ $account->balance }}</td>
                                        <td class="py-4">{{ $account->min_balance }}</td>
                                        <td class="py-4">{{ $account->max_balance }}</td>
                                        @php $timestamp = strtotime($account->created_at) @endphp
                                        <td class="py-4">{{ date('F d, Y', $timestamp) }}</td>
                                    
                                        <td class="py-4">

                                            <div class="flex justify-center">
                                                <div class="flex flex-row space-x-2">
                                                    <!-- Edit Button -->
                                                    <button type="button" data-hs-overlay="#editAccount-{{ $account->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#05D9FF" class="size-5 hover:fill-[#00B1D0]">
                                                            <path fill-rule="evenodd" d="M14.828 2.586a2 2 0 1 1 2.828 2.828L7.828 15.242a8 8 0 0 1-3.255 2.049L2.6 19.243a.75.75 0 0 1-.95-.95l1.952-1.973a8 8 0 0 1 2.05-3.255l9.879-9.879ZM13.415 4l.586.586-8.879 8.879a6.5 6.5 0 0 0-1.582 2.837l-.94 2.366 2.366-.94a6.5 6.5 0 0 0 2.837-1.582L18 6.586 17.415 6 13.415 4ZM16.828 3a.5.5 0 0 1 .707 0l2.121 2.121a.5.5 0 0 1 0 .707l-1.414 1.414-2.828-2.828L16.828 3ZM10 15.5V19h3.5l5.086-5.086-3.585-3.586L10 15.5ZM9.5 14H6v-3.5L14.914 2.086l3.586 3.586L9.5 14Z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Delete Button -->
                                                    
                                                    <button type="button" data-hs-overlay="#deleteAccount-{{ $account->id }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FF6347" class="size-5 hover:fill-[#E05242]">
                                                            <path fill-rule="evenodd" d="M6.75 4.5a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 .75.75V5h2.25a.75.75 0 0 1 0 1.5h-1.066l-.74 13.05a2.25 2.25 0 0 1-2.245 2.2H8.301a2.25 2.25 0 0 1-2.245-2.2L5.316 6.5H4.25a.75.75 0 0 1 0-1.5H6.75V4.5Zm8.625 2.25v13.5H8.625v-13.5H15.375ZM10.875 2.25a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 .75.75v.75H10.875V2.25Z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </button>
                                                        
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            @php $rowNumber++; @endphp
                        @endforeach
                    @else
                        <tr>
                            <td class="py-4 text-center" colspan="6">No Data</td>
                        </tr>
                    @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Image -->
    <div class="absolute h-screen w-full bg-[#181818] inset-0 z-0 flex">
        <div class="absolute w-1/2 mx-auto justify-center items-center">
            <div class="w-full h-full justify-center items-center">
                <img src="/image/Abstract2.png" class="absolute object-cover bottom-0 right-0 transform translate-x-[100%] translate-y-[100%] z-30 h-[30rem] opacity-70 hidden md:block" alt="">
            </div>
        </div>
        <div class="w-full h-2/5 bg-[#1D1D1D] z-10">
            <img src="/image/GridBG.png" class="object-cover w-screen h-full" alt="Grid Background">
        </div>
    </div>
</section>
@endsection

