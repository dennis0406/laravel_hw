<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <form action="" method="post">
            @csrf
            <!-- Name field -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name room')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" />
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Describe field --}}
            <div class="mt-4">
                <x-label for="desc" :value="__('Describe room')" />

                <x-input id="desc" class="block mt-1 w-full" type="text" name="desc" />
            </div>
            @error('desc')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- Price field --}}
            <div class="mt-4">
                <x-label for="price" :value="__('Price room')" />

                <x-input id="price" class="block mt-1 w-full" type="text" name="price" />
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Image field --}}
            <div class="mt-4">
                <x-label for="image" :value="__('Image room')" />

                <x-input id="image" class="block mt-1 w-full" type="file" name="image" />
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Button --}}
            <div class="flex items-center justify-end mt-4">

                <x-input class="btn" type="submit" />
            </div>

            <div class="info">
                @if (isset($newRoom))
                    <p>{{ $newRoom['name'] }}</p>
                    <p>{{ $newRoom['image'] }}</p>
                @endif
            </div>
        </form>



    </x-auth-card>
</x-guest-layout>
