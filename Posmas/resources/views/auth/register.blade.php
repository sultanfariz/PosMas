<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="nik" value="{{ __('Nomor Induk Kependudukan') }}" />
                <x-jet-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" required autofocus autocomplete="nik" />
            </div>

            <div class="mt-4">
                <x-jet-label for="no_kk" value="{{ __('Nomor Kartu Keluarga') }}" />
                <x-jet-input id="no_kk" class="block mt-1 w-full" type="text" name="no_kk" :value="old('no_kk')" required autofocus autocomplete="no_kk" />
            </div>

            <div class="mt-4">
                <x-jet-label for="nama" value="{{ __('Nama Lengkap') }}" />
                <x-jet-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="nama" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="no_telp" value="{{ __('Nomor Telepon') }}" />
                <x-jet-input id="no_telp" class="block mt-1 w-full" type="text" name="no_telp" :value="old('no_telp')" required autofocus autocomplete="no_telp" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>