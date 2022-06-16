<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->

        <form method="POST" >
            @csrf

            <!-- Number A -->
            <div>
                <x-label for="soA" :value="__('soA')" />

                <x-input id="soA" class="block mt-1 w-full" type="number" name="soA" :value="old('soA')" required autofocus />
            </div>

            <!-- Number B -->
            <div class="mt-4">
                <x-label for="soB" :value="__('soB')" />

                <x-input id="soB" class="block mt-1 w-full"
                                type="number"
                                name="soB"
                                required />
            </div>


            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-3">
                    {{ __('Calculate') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
