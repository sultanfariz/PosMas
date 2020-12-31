<div>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-5">
        <!-- <button wire:click="showModal()" class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none mb-2">
            TAMBAH PERMOHONAN</button> -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 px-10">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg px-10">
                        <div class="grid grid-cols-4 flex items-center content-center">
                            <div class="flex items-center">
                            </div>
                            <div class="col-span-2 my-5">
                                <form method="POST" action="{{ route('ktp-baru') }}">
                                    @csrf
                                    <h2 class="text-xl mb-3">Unggah Berkas Persyaratan</h2>
                                    <div>
                                        <x-jet-label for="kk" value="{{ __('Fotokopi Kartu Keluarga') }}" />
                                        <x-jet-input id="kk" class="block mt-1 w-full" type="file" name="kk" :value="old('kk')" required autofocus autocomplete="kk" />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="akta" value="{{ __('Fotokopi Akta Kelahiran') }}" />
                                        <x-jet-input id="akta" class="block mt-1 w-full" type="file" name="akta" :value="old('akta')" required autofocus autocomplete="akta" />
                                    </div>

                                    <h2 class="text-xl mt-10 mb-3">Atur Penjadwalan</h2>
                                    <div class="mt-4">
                                        <!-- <x-jet-label for="lokasi" value="{{ __('Service Point') }}" /> -->
                                        <!-- <x-jet-input list="list_lokasi" id="lokasi" class="block mt-1 w-full" type="text" name="lokasi" :value="old('lokasi')" required autofocus autocomplete="lokasi" /> -->
                                        <!-- <datalist id="list_lokasi" class="border-solid">
                                            <option id="localhost:8000/ktp-baru/" value="Kantor Disdukcapil Bogor"> -->
                                        <!-- <option value="Pembaruan KTP">
                                                <option value="Pencetakan KTP hilang"> -->
                                        <!-- </datalist> -->
                                        <label class="block mt-4">
                                            <x-jet-label for="lokasi" value="{{ __('Service Point') }}" />
                                            <!-- <span class="text-gray-700">Lokasi</span> -->
                                            <select id="lokasi" name="lokasi" :value="old('lokasi')" required autofocus autocomplete="lokasi" class="form-select mt-1 block w-full">
                                                <option>Kantor Disdukcapil Bogor</option>
                                                <!-- <option>$5,000</option>
                                                <option>$10,000</option>
                                                <option>$25,000</option> -->
                                            </select>
                                        </label>
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="tanggal" value="{{ __('Tanggal') }}" />
                                        <x-jet-input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" :value="old('tanggal')" required />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a> -->
                                        <x-jet-button class="ml-4">
                                            {{ __('Kirim Permohonan') }}
                                        </x-jet-button>
                                    </div>
                                </form>
                            </div>
                            <div class="flex items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <!-- <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>

                    <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                        Shop
                    </a>

                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                        <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>

                    <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                        Sponsor
                    </a>
                </div>
            </div> -->

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>