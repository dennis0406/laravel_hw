<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input value="{{ old('email') }}" type="email" class="form-control" id="email"
                    placeholder="Enter email" name="email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- <div>
                @include('block.error')
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>

            <div class="info">
                @if (isset($user))
                    <p>{{ $user['email'] }}</p>
                    <p>{{ $user['password'] }}</p>
                @endif
            </div>
        </form>



    </x-auth-card>
</x-guest-layout>
