<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex justify-center items-center mt-4">
<div class="block max-w-fit p-5 bg-white border border-gray-200 rounded-lg shadow">
    <form>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="nama_depan" class="block mb-2 text-sm font-medium text-gray-900">Nama Depan</label>
                <input type="text" id="nama_depan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="nama_belakang" class="block mb-2 text-sm font-medium text-gray-900">Nama Belakang</label>
                <input type="text" id="nama_belakang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Nomor HP</label>
                <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                       pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" autocomplete="on" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" autocomplete="on" required>
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required>
            </div>
            <div>
                <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">
                    Confirm password</label>
                <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required>
            </div>

            <div>
                <label for="nama_bank" class="block mb-2 text-sm font-medium text-gray-900">Nama Bank</label>
                <select id="nama_bank" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Pilih Bank</option>
                    <option value="US">BNI</option>
                    <option value="CA">BCA</option>
                    <option value="FR">Mandiri</option>
                </select>
            </div>
            <div>
                <label for="cabang_bank" class="block mb-2 text-sm font-medium text-gray-900">Cabang Bank</label>
                <input type="text" id="cabang_bank" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            </div>

            <div>
                <label for="nomor_rekening" class="block mb-2 text-sm font-medium text-gray-900">Nomor Rekening</label>
                <input type="text" id="nomor_rekening" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            </div>

            <div>
                <label for="ktp" class="block mb-2 text-sm font-medium text-gray-900">KTP</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5"  id="ktp" type="file">
                <p class="mt-1 text-sm text-gray-500" id="ktp">JPG atau JPEG Maksimal 5 mb</p>
            </div>
            <div>
                <label for="npwp" class="block mb-2 text-sm font-medium text-gray-900">NPWP</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5"  id="npwp" type="file">
                <p class="mt-1 text-sm text-gray-500" id="npwp">JPG atau JPEG Maksimal 5 mb</p>
            </div>
            <div>
                <label for="foto_close_up" class="block mb-2 text-sm font-medium text-gray-900">Foto Close Up</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5"  id="foto_close_up" type="file">
                <p class="mt-1 text-sm text-gray-500" id="foto_close_up">JPG atau JPEG Maksimal 5 mb</p>
            </div>
        </div>

        <div>
            <h2>
                Mendaftar Sebagai:
            </h2>
        </div>
        <div class="flex justify-around">
            <div class="flex items-center mr-4">
                <input id="petani-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100
            border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2
            dark:bg-gray-700 dark:border-gray-600">
                <label for="petani-checkbox" class="ml-2 text-sm font-medium text-gray-900">Petani</label>
            </div>
            <div class="flex items-center mr-4">
                <input id="driver-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100
            border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2
            dark:bg-gray-700 dark:border-gray-600">
                <label for="driver-checkbox" class="ml-2 text-sm font-medium text-gray-900">Driver</label>
            </div>
            <div class="flex items-center mr-4">
                <input id="pic-pabrik-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100
            border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2
            dark:bg-gray-700 dark:border-gray-600">
                <label for="pic-pabrik-checkbox" class="ml-2 text-sm font-medium text-gray-900">PIC Pabrik</label>
            </div>
        </div>

        {{--Start Of Petani Section--}}
        <div id="petani-section" class="hidden">
            <div>
                <label for="girik" class="block mb-2 text-sm font-medium text-gray-900">GIRIK</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5"  id="girik" type="file">
                <p class="mt-1 text-sm text-gray-500" id="girik">JPG atau JPEG Maksimal 5 mb</p>
            </div>
            <div>
                <h2>
                    Alamat Petani:
                </h2>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="alamat_lengkap_petani" class="block mb-2 text-sm font-medium text-gray-900">Alamat Lengkap</label>
                    <textarea id="alamat_lengkap_petani" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
            rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>

            </div>

            <div>
                <h2>
                    Alamat Kebun Petani:
                </h2>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="alamat_kebun_petani" class="block mb-2 text-sm font-medium text-gray-900">Alamat Lengkap</label>
                    <textarea id="alamat_kebun_petani" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
            rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>

            </div>
        </div>
        {{--End Of Petani Section--}}


        {{--Start Of Driver Section--}}
        <div id="driver-section" class="hidden">
            <div>
                <label for="sim_b1" class="block mb-2 text-sm font-medium text-gray-900">SIM B1</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5"  id="sim_b1" type="file">
                <p class="mt-1 text-sm text-gray-500" id="sim_b1">JPG atau JPEG Maksimal 5 mb</p>
            </div>
            <div>
                <label for="stnk_driver" class="block mb-2 text-sm font-medium text-gray-900">STNK</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5"  id="stnk_driver" type="file">
                <p class="mt-1 text-sm text-gray-500" id="stnk_driver">JPG atau JPEG Maksimal 5 mb</p>
            </div>
            <div>
                <h2>
                    Alamat Driver:
                </h2>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="alamat_lengkap_driver" class="block mb-2 text-sm font-medium text-gray-900">Alamat Lengkap</label>
                    <textarea id="alamat_lengkap_driver" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
            rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>

            </div>
        </div>
        {{--End Of Driver Section--}}

        {{--Start Of PIC Pabrik Section--}}
        <div id="pic-pabrik-section" class="hidden">
            <div>
                <label for="siup" class="block mb-2 text-sm font-medium text-gray-900">SIUP</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5"  id="siup" type="file">
                <p class="mt-1 text-sm text-gray-500" id="siup">JPG atau JPEG Maksimal 5 mb</p>
            </div>
            <div>
                <h2>
                    Alamat Pabrik:
                </h2>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="alamat_lengkap_pabrik" class="block mb-2 text-sm font-medium text-gray-900">Alamat Lengkap</label>
                    <textarea id="alamat_lengkap_pabrik" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
            rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>

            </div>
        </div>
        {{--End Of PIC Pabrik Section--}}

        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
    focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mt-4 text-center justify-self-center
    col-span-full">Submit</button>
        </div>

    </form>
</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const petaniCheckbox = document.getElementById("petani-checkbox");
        const petaniSection = document.getElementById("petani-section");
        const driverCheckbox = document.getElementById("driver-checkbox");
        const driverSection = document.getElementById("driver-section");
        const picPabrikCheckbox = document.getElementById("pic-pabrik-checkbox");
        const picPabrikSection = document.getElementById("pic-pabrik-section");

        // Function to hide all sections
        function hideAllSections() {
            petaniSection.style.display = "none";
            driverSection.style.display = "none";
            picPabrikSection.style.display = "none";
        }

        // Add an event listener to the checkboxes
        petaniCheckbox.addEventListener("change", function () {
            hideAllSections();
            if (petaniCheckbox.checked) {
                petaniSection.style.display = "block";
            }
        });

        driverCheckbox.addEventListener("change", function () {
            hideAllSections();
            if (driverCheckbox.checked) {
                driverSection.style.display = "block";
            }
        });

        picPabrikCheckbox.addEventListener("change", function () {
            hideAllSections();
            if (picPabrikCheckbox.checked) {
                picPabrikSection.style.display = "block";
            }
        });
    });

</script>

</body>
</html>
