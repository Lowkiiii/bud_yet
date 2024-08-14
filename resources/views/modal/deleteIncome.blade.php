@foreach ($userIncome as $userIncome)
<div id="deleteIncome-{{ $userIncome->id }}" class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none flex justify-center items-center">
    <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div class="flex flex-col bg-[#2B2B2B] border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 border-[#244C53]">
            <div class="flex justify-between items-center py-3 px-4 border-b border-[#4C4C4C]">
                <h3 class="sk-bold text-xl text-gray-800 dark:text-white">Delete Income &#x1FAF0;</h3>
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#deleteIncome-{{ $userIncome->id }}">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="px-8 py-3 mt-2 text-white sk overflow-y-auto">
                Are you sure you want to <span class="text-red-500 sk-bold">Delete</span> the income?
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-[#4C4C4C]">
                <form action="{{ route('income.destroy', $userIncome->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 border-[#4C4C4C] dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#deleteIncome-{{ $userIncome->id }}">
                        Close
                    </button>
                    <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none sk-bold">
                        Yes Delete!
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
