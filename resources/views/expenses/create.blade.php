<x-app-layout>

    <body>
        <x-slot name="header">
            <div class="flex justify-between align-items">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Add form') }}
                </h2>
                <p>
                    <a class="inline-flex items-center gap-x-1 text-sm text-foreground hover:text-primary-hover focus:outline-hidden focus:text-primary-focus"
                        href={{ route('dashboard') }}>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                        Back to home
                    </a>
                </p>
            </div>
        </x-slot>
        <form action="/expenses" method="POST">
            @csrf
            <div class="space-y-3 px-4 w-80 m-auto py-3">
                <x-text-input :value="old('amount')" name="amount" type="number" step="0.01" class="block mt-1 w-full"
                    placeholder="Amount" />
                <x-text-input :value="old('category')" name="category" type="text" class="block mt-1 w-full"
                    placeholder="Category" />
                <x-text-input :value="old('spent_at')" name="spent_at" type="date" class="block mt-1 w-full" />
                <x-text-input :value="old('description')" name="description" type="text" class="block mt-1 w-full"
                    placeholder="Description" />
                <x-primary-button type="submit" class="w-full ">SEND</x-primary-button>

            </div>

        </form>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

    </body>

</x-app-layout>
