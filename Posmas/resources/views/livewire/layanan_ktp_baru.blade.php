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
                                <form enctype="multipart/form-data" method="POST" action="{{ route('create-ktp-baru') }}">
                                    @csrf
                                    <h2 class="text-xl">Unggah Berkas Persyaratan</h2>
                                    <p class="text-xs mb-3">Masukkan file dalam ekstensi jpg,png,jpeg,pdf</p>

                                    <div>
                                        <x-jet-label for="fotokopi_kk" value="{{ __('Fotokopi Kartu Keluarga') }}" />
                                        <x-jet-input id="fotokopi_kk" title="Masukkan file dalam ekstensi jpg,png,jpeg" class="block mt-1 w-full" type="file" name="fotokopi_kk" :value="old('fotokopi_kk')" autofocus autocomplete="fotokopi_kk" />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="fotokopi_akta" value="{{ __('Fotokopi Akta Kelahiran') }}" />
                                        <x-jet-input id="fotokopi_akta" title="Masukkan file dalam ekstensi jpg,png,jpeg" class="block mt-1 w-full" type="file" name="fotokopi_akta" :value="old('fotokopi_akta')" autofocus autocomplete="fotokopi_akta" />
                                    </div>

                                    <h2 class="text-xl mt-10 mb-3">Atur Penjadwalan</h2>
                                    <div class="mt-4">
                                        <label class="block mt-4">
                                            <x-jet-label for="service_point" value="{{ __('Service Point') }}" />
                                            <select id="service_point" name="service_point" :value="old('service_point')" required autofocus autocomplete="service_point" class="form-select mt-1 block w-full">
                                                <option>Kantor Disdukcapil Bogor</option>
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
                                        <x-jet-button type="submit" class="ml-4">
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
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>