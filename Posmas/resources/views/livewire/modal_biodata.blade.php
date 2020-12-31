<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <!-- <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        Heroicon name: exclamation
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div> -->
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                            Konfirmasi Data
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                Mohon periksa kembali data diri anda dengan teliti untuk menghindari kesalahan pada proses selanjutnya.
                            </p>
                        </div>
                        <div class="mt-4">
                            <p class="text-sm text-gray-500">NIK : {{$biodata["nik"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Nama Lengkap : {{$biodata["nama"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Tempat, Tanggal Lahir : {{$biodata["tempat_lahir"]}}, {{$biodata["tgl_lahir"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Jenis Kelamin : {{$biodata["jenis_kelamin"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Alamat : {{$biodata["alamat"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">RT/RW : {{$biodata["rt_rw"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Kelurahan : {{$biodata["kel_desa"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Kecamatan : {{$biodata["kecamatan"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Kabupaten/Kota : {{$biodata["kab_kota"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Agama : {{$biodata["agama"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Status Perkawinan : {{$biodata["status_kawin"]}}</p>
                        </div>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">Pekerjaan : {{$biodata["pekerjaan"]}}</p>
                        </div>
                    </div>
                </div>
                <form class="pt-4 text-center sm:mt-0 sm:ml-4 sm:text-left" action="/action_page.php" method="get">
                    <!-- <label for="layanan" class=" mt-4 text-lg leading-6 font-medium text-gray-900">Pilih keterangan layanan</label>
                    <input list="layanans" name="layanan" id="layanan" class="border-solid">
                    <datalist id="layanans" class="border-solid">
                        <option id="localhost:8000/ktp-baru/" value="Pembuatan KTP baru">
                        <option value="Pembaruan KTP">
                        <option value="Pencetakan KTP hilang">
                    </datalist> -->
                    <label class="block mt-4">
                        <x-jet-label for="lokasi" value="{{ __('Pilih Keterangan Layanan') }}" />
                        <!-- <span class="text-gray-700">Lokasi</span> -->
                        <select id="lokasi" name="lokasi" :value="old('lokasi')" required autofocus autocomplete="lokasi" class="form-select mt-1 block w-full">
                            <option>Pembuatan KTP Baru</option>
                            <!-- <option>$5,000</option>
                                                <option>$10,000</option>
                                                <option>$25,000</option> -->
                        </select>
                    </label>

                    <!-- <input type="submit"> -->
                </form>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <a href="{{ route('ktp-baru') }}" id="btn" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Lanjutkan
                    </a>
                    <button wire:click="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                    <!-- <script>
                        $('#btn').click(function() {
                            var textval = $('#textcat').val();
                            $('#category option').each(function() {
                                if ($(this).val() == textval) {
                                    alert($(this).attr('id'));
                                    window.location = $(this).attr('id');
                                }
                            });
                        });
                    </script> -->
                </div>
            </div>


        </div>
    </div>
</div>