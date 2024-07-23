<div id="addTransaction"
     class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none flex justify-center items-center">
            <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div
                    class="flex flex-col bg-[#2B2B2B] border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 border-[#244C53]">
                    <div class="flex justify-between items-center py-3 px-4 border-b border-[#4C4C4C]">
                        <h3 class="sk-bold text-xl text-gray-800 dark:text-white">
                          Add Transaction &#x1FAF0;
                        </h3>
                        <button type="button"
                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
                            data-hs-overlay="#addTransaction">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <div class="px-8 py-3 mt-2 overflow-y-auto ">
                        <form action="{{ route('transaction.store') }}" method="POST">
                            @csrf
                        <div class="relative mb-2">
                            <input type="text" name="amount" id="amount" class=" outline-none sk peer py-4 px-0 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm placeholder:text-transparent focus:border-t-transparent focus:border-x-transparent focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 text-white dark:focus:ring-neutral-600 focus:border-b-[#00B1D0]
                            focus:pt-6
                            focus:pb-2
                            [&:not(:placeholder-shown)]:pt-6
                            [&:not(:placeholder-shown)]:pb-2
                            autofill:pt-6
                            autofill:pb-2" placeholder="">
                            <label for="hs-floating-underline-input-email" class="sk absolute top-0 start-0 py-4 px-0 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                          peer-focus:scale-90 peer-focus:translate-x-0.5 peer-focus:-translate-y-1.5 peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                          peer-[:not(:placeholder-shown)]:scale-90 peer-[:not(:placeholder-shown)]:translate-x-0.5 peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500 sk">Amount</label>
                          </div>
                        <div class="relative">
                            <select name="account_id" class="py-4 bg-[#2B2B2B] outline-none rounded-lg focus:border-[#4C4C4C] px-4 pe-2 block w-full text-sm border-b border-[#4C4C4C] disabled:opacity-50 disabled:pointer-events-none sk dark:border-transparent dark:text-neutral-400 dark:focus:ring-[#4C4C4C]">
                                <option value="" disabled selected hidden>Account</option>
                                @foreach($accounts as $account)
                                    <option value="{{ $account->id }}">{{ $account->account_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="toAccountDiv" class="w-full relative py-2" style="display: none;">
                            <select name="to_account_id" id="toAccount" class="py-4 bg-[#2B2B2B] outline-none rounded-lg focus:border-[#4C4C4C] px-4 pe-2 block w-full text-sm border-b border-[#4C4C4C] disabled:opacity-50 disabled:pointer-events-none sk dark:border-transparent dark:text-neutral-400 dark:focus:ring-[#4C4C4C]">
                                <option value="" disabled selected hidden>To Account</option>
                                @foreach($accounts as $account)
                                    <option value="{{ $account->id }}">{{ $account->account_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="incomeSourceDiv" class="w-full relative py-2" style="display: none;">
                            <select name="income_id" id="incomeSource" class="py-4 bg-[#2B2B2B] outline-none rounded-lg focus:border-[#4C4C4C] px-4 pe-2 block w-full text-sm border-b border-[#4C4C4C] disabled:opacity-50 disabled:pointer-events-none sk dark:border-transparent dark:text-neutral-400 dark:focus:ring-[#4C4C4C]">
                                <option value="" disabled selected hidden>Select Income Source</option>
                                @foreach($incomes as $income)
                                    <option value="{{ $income->id }}">{{ $income->income_name }}</option>
                                @endforeach
                            </select>
                        </div>

                          <div class="w-full space-x-4 flex">
                            <div class="w-full relative  py-2 ">
                                <select name="type" id="transactionType" class="py-4 bg-[#2B2B2B] outline-none rounded-lg focus:border-[#4C4C4C] px-4 pe-2 block w-full text-sm border-b border-[#4C4C4C] disabled:opacity-50 disabled:pointer-events-none sk dark:border-transparent dark:text-neutral-400 dark:focus:ring-[#4C4C4C]">
                                    <option value="" disabled selected hidden>Transaction Type</option>
                                    <option value="deposit">Deposit</option>
                                    <option value="withdraw">Withdraw</option>
                                    <option value="transfer">Transfer</option>
                                </select>
                            </div>
                            
                            
                            <div class="w-full relative py-2 ">
                                <select name="category" id="categorySelect" class="py-4 bg-[#2B2B2B] outline-none rounded-lg focus:border-[#4C4C4C] px-4 pe-2 block w-full text-sm border-b border-[#4C4C4C] disabled:opacity-50 disabled:pointer-events-none sk dark:border-transparent dark:text-neutral-400 dark:focus:ring-[#4C4C4C]">
                                    <option value="" disabled selected hidden>Category</option>
                                    <option value="Food">Food</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Utilities">Utilities</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Shopping">Shopping</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Other">Other</option>
                                    
                                </select>
                            </div>
                            
                            <div id="otherCategoryDiv" class="w-full relative py-2" style="display: none;">
                                <input type="text" name="other_category" id="otherCategory" placeholder="Enter custom category" class="py-4 bg-[#2B2B2B] outline-none rounded-lg focus:border-[#4C4C4C] px-4 pe-2 block w-full text-sm border-b border-[#4C4C4C] disabled:opacity-50 disabled:pointer-events-none sk dark:border-transparent dark:text-neutral-400 dark:focus:ring-[#4C4C4C]">
                            </div>
                            
                            

                            <div class="text-xs flex-col flex font-semibold  items-start justify-start sk truncate text-white  w-full mt-2 ">

                                <input type="date" class="py-4 sk bg-[#2B2B2B] rounded-lg text-white outline-none px-4 pe-2 block w-full text-sm border-b border-[#4C4C4C] disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-neutral-400 hide-calendar-icon" id="date" name="date" placeholder="Date" />

                                <span class="text-red-500"></span>
                            </div>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-[#4C4C4C]">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border  bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 border-[#4C4C4C] dark:text-white dark:hover:bg-neutral-800"
                            data-hs-overlay="#addTransaction">
                            Close
                        </button>
                        <button type="submit"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-[#05D9FF] text-[#272727] hover:bg-[#00B1D0] disabled:opacity-50 disabled:pointer-events-none sk-bold">
                            Save changes
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        {{-- script for the transaction type select element --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var transactionTypeSelect = document.getElementById('transactionType');
                if (transactionTypeSelect) {
                    transactionTypeSelect.addEventListener('change', function() {
                        var toAccountDiv = document.getElementById('toAccountDiv');
                        var toAccountSelect = document.getElementById('toAccount');
                        if (this.value === 'transfer') {
                            toAccountDiv.style.display = 'block';
                            toAccountSelect.required = true;
                        } else {
                            toAccountDiv.style.display = 'none';
                            toAccountSelect.required = false;
                        }
                    });
                } else {
                    console.error('Transaction type select element not found');
                }
            });
        </script>


        {{-- script for the category select element --}}
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var categorySelect = document.getElementById('categorySelect');
            var otherCategoryDiv = document.getElementById('otherCategoryDiv');
            var otherCategoryInput = document.getElementById('otherCategory');
        
            if (categorySelect) {
                categorySelect.addEventListener('change', function() {
                    if (this.value === 'Other') {
                        otherCategoryDiv.style.display = 'block';
                        otherCategoryInput.required = true;
                    } else {
                        otherCategoryDiv.style.display = 'none';
                        otherCategoryInput.required = false;
                    }
                });
            }
        });
        
        </script>


        {{-- script for the transaction type select element --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var transactionTypeSelect = document.getElementById('transactionType');
            var toAccountDiv = document.getElementById('toAccountDiv');
            var incomeSourceDiv = document.getElementById('incomeSourceDiv');

            if (transactionTypeSelect) {
                transactionTypeSelect.addEventListener('change', function() {
                    if (this.value === 'transfer') {
                        toAccountDiv.style.display = 'block';
                        incomeSourceDiv.style.display = 'none';
                    } else if (this.value === 'deposit') {
                        toAccountDiv.style.display = 'none';
                        incomeSourceDiv.style.display = 'block';
                    } else {
                        toAccountDiv.style.display = 'none';
                        incomeSourceDiv.style.display = 'none';
                    }
                });
            }

        });
        </script>

