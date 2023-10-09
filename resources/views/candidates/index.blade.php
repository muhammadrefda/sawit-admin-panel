<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Saw-IT</title>
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
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        type="text"
                        name="autocomplete"
                        list="nama_bank"/>
                        <datalist id="nama_bank">
                            <option value="BANK BRI">BANK BRI</option>
                            <option value="BANK EKSPOR INDONESIA">BANK EKSPOR INDONESIA</option>
                            <option value="BANK MANDIRI">BANK MANDIRI</option>
                            <option value="BANK BNI">BANK BNI</option>
                            <option value="BANK SYARIAH INDONESIA">BANK SYARIAH INDONESIA</option>
                            <option value="BANK DANAMON">BANK DANAMON</option>
                            <option value="PERMATA BANK">PERMATA BANK</option>
                            <option value="BANK BCA">BANK BCA</option>
                            <option value="BANK BII">BANK BII</option>
                            <option value="BANK PANIN">BANK PANIN</option>
                            <option value="BANK ARTA NIAGA KENCANA">BANK ARTA NIAGA KENCANA</option>
                            <option value="BANK NIAGA">BANK NIAGA</option>
                            <option value="BANK BUANA IND">BANK BUANA IND</option>
                            <option value="BANK LIPPO">BANK LIPPO</option>
                            <option value="BANK NISP">BANK NISP</option>
                            <option value="AMERICAN EXPRESS BANK LTD">AMERICAN EXPRESS BANK LTD</option>
                            <option value="CITIBANK N.A.">CITIBANK N.A.</option>
                            <option value="JP. MORGAN CHASE BANK, N.A.">JP. MORGAN CHASE BANK, N.A.</option>
                            <option value="BANK OF AMERICA, N.A">BANK OF AMERICA, N.A</option>
                            <option value="ING INDONESIA BANK">ING INDONESIA BANK</option>
                            <option value="BANK MULTICOR TBK.">BANK MULTICOR TBK.</option>
                            <option value="BANK ARTHA GRAHA">BANK ARTHA GRAHA</option>
                            <option value="BANK CREDIT AGRICOLE INDOSUEZ">BANK CREDIT AGRICOLE INDOSUEZ</option>
                            <option value="THE BANGKOK BANK COMP. LTD">THE BANGKOK BANK COMP. LTD</option>
                            <option value="THE HONGKONG & SHANGHAI B.C.">THE HONGKONG & SHANGHAI B.C.</option>
                            <option value="THE BANK OF TOKYO MITSUBISHI UFJ LTD">THE BANK OF TOKYO MITSUBISHI UFJ LTD</option>
                            <option value="BANK SUMITOMO MITSUI INDONESIA">BANK SUMITOMO MITSUI INDONESIA</option>
                            <option value="BANK DBS INDONESIA">BANK DBS INDONESIA</option>
                            <option value="BANK RESONA PERDANIA">BANK RESONA PERDANIA</option>
                            <option value="BANK MIZUHO INDONESIA">BANK MIZUHO INDONESIA</option>
                            <option value="STANDARD CHARTERED BANK">STANDARD CHARTERED BANK</option>
                            <option value="BANK ABN AMRO">BANK ABN AMRO</option>
                            <option value="BANK KEPPEL TATLEE BUANA">BANK KEPPEL TATLEE BUANA</option>
                            <option value="BANK CAPITAL INDONESIA, TBK.">BANK CAPITAL INDONESIA, TBK.</option>
                            <option value="BANK BNP PARIBAS INDONESIA">BANK BNP PARIBAS INDONESIA</option>
                            <option value="BANK UOB INDONESIA">BANK UOB INDONESIA</option>
                            <option value="KOREA EXCHANGE BANK DANAMON">KOREA EXCHANGE BANK DANAMON</option>
                            <option value="RABOBANK INTERNASIONAL INDONESIA">RABOBANK INTERNASIONAL INDONESIA</option>
                            <option value="ANZ PANIN BANK">ANZ PANIN BANK</option>
                            <option value="DEUTSCHE BANK AG.">DEUTSCHE BANK AG.</option>
                            <option value="BANK WOORI INDONESIA">BANK WOORI INDONESIA</option>
                            <option value="BANK OF CHINA LIMITED">BANK OF CHINA LIMITED</option>
                            <option value="BANK BUMI ARTA">BANK BUMI ARTA</option>
                            <option value="BANK EKONOMI">BANK EKONOMI</option>
                            <option value="BANK ANTARDAERAH">BANK ANTARDAERAH</option>
                            <option value="BANK HAGA">BANK HAGA</option>
                            <option value="BANK IFI">BANK IFI</option>
                            <option value="BANK CENTURY, TBK.">BANK CENTURY, TBK.</option>
                            <option value="BANK MAYAPADA">BANK MAYAPADA</option>
                            <option value="BANK JABAR">BANK JABAR</option>
                            <option value="BANK DKI">BANK DKI</option>
                            <option value="BPD DIY">BPD DIY</option>
                            <option value="BANK JATENG">BANK JATENG</option>
                            <option value="BANK JATIM">BANK JATIM</option>
                            <option value="BPD JAMBI">BPD JAMBI</option>
                            <option value="BPD ACEH">BPD ACEH</option>
                            <option value="BANK SUMUT">BANK SUMUT</option>
                            <option value="BANK NAGARI">BANK NAGARI</option>
                            <option value="BANK RIAU">BANK RIAU</option>
                            <option value="BANK SUMSEL">BANK SUMSEL</option>
                            <option value="BANK LAMPUNG">BANK LAMPUNG</option>
                            <option value="BPD KALSEL">BPD KALSEL</option>
                            <option value="BPD KALIMANTAN BARAT">BPD KALIMANTAN BARAT</option>
                            <option value="BPD KALTIM">BPD KALTIM</option>
                            <option value="BPD KALTENG">BPD KALTENG</option>
                            <option value="BPD SULSEL">BPD SULSEL</option>
                            <option value="BANK SULUT">BANK SULUT</option>
                            <option value="BPD NTB">BPD NTB</option>
                            <option value="BPD BALI">BPD BALI</option>
                            <option value="BANK NTT">BANK NTT</option>
                            <option value="BANK MALUKU">BANK MALUKU</option>
                            <option value="BPD PAPUA">BPD PAPUA</option>
                            <option value="BANK BENGKULU">BANK BENGKULU</option>
                            <option value="BPD SULAWESI TENGAH">BPD SULAWESI TENGAH</option>
                            <option value="BANK SULTRA">BANK SULTRA</option>
                            <option value="BANK NUSANTARA PARAHYANGAN">BANK NUSANTARA PARAHYANGAN</option>
                            <option value="BANK SWADESI">BANK SWADESI</option>
                            <option value="BANK MUAMALAT">BANK MUAMALAT</option>
                            <option value="BANK MESTIKA">BANK MESTIKA</option>
                            <option value="BANK METRO EXPRESS">BANK METRO EXPRESS</option>
                            <option value="BANK SHINTA INDONESIA">BANK SHINTA INDONESIA</option>
                            <option value="BANK MASPION">BANK MASPION</option>
                            <option value="BANK HAGAKITA">BANK HAGAKITA</option>
                            <option value="BANK GANESHA">BANK GANESHA</option>
                            <option value="BANK WINDU KENTJANA">BANK WINDU KENTJANA</option>
                            <option value="HALIM INDONESIA BANK">HALIM INDONESIA BANK</option>
                            <option value="BANK HARMONI INTERNATIONAL">BANK HARMONI INTERNATIONAL</option>
                            <option value="BANK KESAWAN">BANK KESAWAN</option>
                            <option value="BANK TABUNGAN NEGARA (PERSERO)">BANK TABUNGAN NEGARA (PERSERO)</option>
                            <option value="BANK HIMPUNAN SAUDARA 1906, TBK .">BANK HIMPUNAN SAUDARA 1906, TBK .</option>
                            <option value="BANK TABUNGAN PENSIUNAN NASIONAL">BANK TABUNGAN PENSIUNAN NASIONAL</option>
                            <option value="BANK SWAGUNA">BANK SWAGUNA</option>
                            <option value="BANK JASA ARTA">BANK JASA ARTA</option>
                            <option value="BANK MEGA">BANK MEGA</option>
                            <option value="BANK JASA JAKARTA">BANK JASA JAKARTA</option>
                            <option value="BANK BUKOPIN">BANK BUKOPIN</option>
                            <option value="BANK BISNIS INTERNASIONAL">BANK BISNIS INTERNASIONAL</option>
                            <option value="BANK SRI PARTHA">BANK SRI PARTHA</option>
                            <option value="BANK JASA JAKARTA">BANK JASA JAKARTA</option>
                            <option value="BANK BINTANG MANUNGGAL">BANK BINTANG MANUNGGAL</option>
                            <option value="BANK BUMIPUTERA">BANK BUMIPUTERA</option>
                            <option value="BANK YUDHA BHAKTI">BANK YUDHA BHAKTI</option>
                            <option value="BANK MITRANIAGA">BANK MITRANIAGA</option>
                            <option value="BANK AGRO NIAGA">BANK AGRO NIAGA</option>
                            <option value="BANK INDOMONEX">BANK INDOMONEX</option>
                            <option value="BANK ROYAL INDONESIA">BANK ROYAL INDONESIA</option>
                            <option value="BANK ALFINDO">BANK ALFINDO</option>
                            <option value="BANK SYARIAH MEGA">BANK SYARIAH MEGA</option>
                            <option value="BANK INA PERDANA">BANK INA PERDANA</option>
                            <option value="BANK HARFA">BANK HARFA</option>
                            <option value="PRIMA MASTER BANK">PRIMA MASTER BANK</option>
                            <option value="BANK PERSYARIKATAN INDONESIA">BANK PERSYARIKATAN INDONESIA</option>
                            <option value="BANK AKITA">BANK AKITA</option>
                            <option value="LIMAN INTERNATIONAL BANK">LIMAN INTERNATIONAL BANK</option>
                            <option value="ANGLOMAS INTERNASIONAL BANK">ANGLOMAS INTERNASIONAL BANK</option>
                            <option value="BANK DIPO INTERNATIONAL">BANK DIPO INTERNATIONAL</option>
                            <option value="BANK KESEJAHTERAAN EKONOMI">BANK KESEJAHTERAAN EKONOMI</option>
                            <option value="BANK UIB">BANK UIB</option>
                            <option value="BANK ARTOS IND">BANK ARTOS IND</option>
                            <option value="BANK PURBA DANARTA">BANK PURBA DANARTA</option>
                            <option value="BANK MULTI ARTA SENTOSA">BANK MULTI ARTA SENTOSA</option>
                            <option value="BANK MAYORA">BANK MAYORA</option>
                            <option value="BANK INDEX SELINDO">BANK INDEX SELINDO</option>
                            <option value="BANK VICTORIA INTERNATIONAL">BANK VICTORIA INTERNATIONAL</option>
                            <option value="BANK EKSEKUTIF">BANK EKSEKUTIF</option>
                            <option value="CENTRATAMA NASIONAL BANK">CENTRATAMA NASIONAL BANK</option>
                            <option value="BANK FAMA INTERNASIONAL">BANK FAMA INTERNASIONAL</option>
                            <option value="BANK SINAR HARAPAN BALI">BANK SINAR HARAPAN BALI</option>
                            <option value="BANK HARDA">BANK HARDA</option>
                            <option value="BANK FINCONESIA">BANK FINCONESIA</option>
                            <option value="BANK MERINCORP">BANK MERINCORP</option>
                            <option value="BANK MAYBANK INDOCORP">BANK MAYBANK INDOCORP</option>
                            <option value="BANK OCBC – INDONESIA">BANK OCBC – INDONESIA</option>
                            <option value="BANK CHINA TRUST INDONESIA">BANK CHINA TRUST INDONESIA</option>
                            <option value="BANK COMMONWEALTH">BANK COMMONWEALTH</option>
                            <option value="BANK BJB SYARIAH">BANK BJB SYARIAH</option>
                            <option value="BPR KS (KARYAJATNIKA SEDAYA)">BPR KS (KARYAJATNIKA SEDAYA)</option>
                            <option value="LINKAJA">LINKAJA</option>
                        </datalist>

                </div>

                <div>
                    <label for="cabang_bank" class="block mb-2 text-sm font-medium text-gray-900">Cabang Bank</label>
                    <input type="text" id="cabang_bank" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>

                <div>
                    <label for="nama_rekening" class="block mb-2 text-sm font-medium text-gray-900">Nama Rekening</label>
                    <input type="text" id="nama_rekening" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
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
                    <input id="petani-radio" type="radio" name="role" value="petani" class="w-4 h-4 text-blue-600 bg-gray-100
            border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2
            dark:bg-gray-700 dark:border-gray-600">
                    <label for="petani-radio" class="ml-2 text-sm font-medium text-gray-900">Petani</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="driver-radio" type="radio" name="role" value="driver" class="w-4 h-4 text-blue-600 bg-gray-100
            border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2
            dark:bg-gray-700 dark:border-gray-600">
                    <label for="driver-radio" class="ml-2 text-sm font-medium text-gray-900">Driver</label>
                </div>
                <div class="flex items-center mr-4">
                    <input id="pic-pabrik-radio" type="radio" name="role" value="pic-pabrik" class="w-4 h-4 text-blue-600 bg-gray-100
            border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2
            dark:bg-gray-700 dark:border-gray-600">
                    <label for="pic-pabrik-radio" class="ml-2 text-sm font-medium text-gray-900">PIC Pabrik</label>
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
                    <label for="npwp_pabrik" class="block mb-2 text-sm font-medium text-gray-900">NPWP Pabrik</label>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5"  id="npwp_pabrik" type="file">
                    <p class="mt-1 text-sm text-gray-500" id="npwp_pabrik">JPG atau JPEG Maksimal 5 mb</p>
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
        const petaniCheckbox = document.getElementById("petani-radio");
        const petaniSection = document.getElementById("petani-section");
        const driverCheckbox = document.getElementById("driver-radio");
        const driverSection = document.getElementById("driver-section");
        const picPabrikCheckbox = document.getElementById("pic-pabrik-radio");
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
