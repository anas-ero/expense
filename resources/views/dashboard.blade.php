<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between align-items">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <button>
                <a href="/expenses/create">Create form</a>
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    @if ($expenses->isEmpty())
                        <div class="bg-yellow-50 border border-yellow-200 text-sm text-yellow-800 rounded-lg p-4 dark:bg-yellow-500/20 dark:border-yellow-900 dark:text-yellow-500"
                            role="alert" tabindex="-1" aria-labelledby="hs-with-description-label">
                            <div class="flex">
                                <div class="shrink-0">
                                    <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z" />
                                        <path d="M12 9v4" />
                                        <path d="M12 17h.01" />
                                    </svg>
                                </div>
                                <div class="ms-4">
                                    <h3 id="hs-with-description-label" class="text-sm font-semibold">
                                        Cannot find any expenses
                                    </h3>
                                    <div class="mt-1 text-sm text-yellow-800 dark:text-yellow-300">
                                        We are unable to fetch your expenses.
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="grid grid-cols-4 gap-4">
                                @foreach ($expenses as $expense)
                                    <div
                                        class="flex flex-col bg-card border border-card-line shadow-2xs rounded-xl p-4 sm:p-6">
                                        <div>
                                            <h3 class="font-semibold text-foreground">
                                                {{ $expense->amount }}
                                            </h3>
                                            <p class="mt-1 text-muted-foreground-1">
                                                {{ $expense->description }}

                                            </p>
                                            <p class="mt-1 text-muted-foreground-1">
                                                {{ $expense->category }}

                                            </p>
                                            <p class="mt-2 text-xs text-muted-foreground-1">
                                                Last updated {{ $expense->updated_at->diffForHumans() }}
                                            </p>
                                        </div>

                                        <div class="my-1">
                                            <button type="button"
                                                class="p-2 my-2 text-sm font-medium  rounded-md bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-hover disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-trash-icon lucide-trash">
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6" />
                                                    <path d="M3 6h18" />
                                                    <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="p-2 my-2 text-sm font-medium  rounded-md bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-hover disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-pen-icon lucide-pen">
                                                    <path
                                                        d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                </svg>
                                            </button>

                                        </div>
                                        <!-- End Button Group -->
                                    </div>
                                @endforeach
                            </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
