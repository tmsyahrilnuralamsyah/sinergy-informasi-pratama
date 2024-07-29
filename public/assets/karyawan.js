const provinces = [
    "Aceh", "Sumatera Utara", "Sumatera Barat", "Riau", "Jambi", "Sumatera Selatan", 
    "Bengkulu", "Lampung", "Kepulauan Bangka Belitung", "Kepulauan Riau", "DKI Jakarta", 
    "Jawa Barat", "Jawa Tengah", "Yogyakarta", "Jawa Timur", "Banten", "Bali", 
    "Nusa Tenggara Barat", "Nusa Tenggara Timur", "Kalimantan Barat", "Kalimantan Tengah", 
    "Kalimantan Selatan", "Kalimantan Timur", "Kalimantan Utara", "Sulawesi Utara", 
    "Sulawesi Tengah", "Sulawesi Selatan", "Sulawesi Tenggara", "Gorontalo", "Sulawesi Barat", 
    "Maluku", "Maluku Utara", "Papua", "Papua Barat", "Papua Selatan", "Papua Tengah", 
    "Papua Pegunungan", "Papua Barat Daya"
];

const kabupatenKota = {
    'Aceh': ['Kabupaten Aceh Barat', 'Kabupaten Aceh Barat Daya', 'Kabupaten Aceh Besar', 'Kabupaten Aceh Jaya', 'Kabupaten Aceh Selatan', 'Kabupaten Aceh Singkil', 'Kabupaten Aceh Tamiang', 'Kabupaten Aceh Tengah', 'Kabupaten Aceh Tenggara', 'Kabupaten Aceh Timur', 'Kabupaten Aceh Utara', 'Kabupaten Bener Meriah', 'Kabupaten Bireuen', 'Kabupaten Gayo Lues', 'Kabupaten Nagan Raya', 'Kabupaten Pidie', 'Kabupaten Pidie Jaya', 'Kabupaten Simeulue', 'Kota Banda Aceh', 'Kota Langsa', 'Kota Lhokseumawe', 'Kota Sabang', 'Kota Subulussalam'],
    'Sumatera Utara': ['Kabupaten Asahan', 'Kabupaten Batu Bara', 'Kabupaten Dairi', 'Kabupaten Deli Serdang', 'Kabupaten Humbang Hasundutan', 'Kabupaten Karo', 'Kabupaten Labuhanbatu', 'Kabupaten Labuhanbatu Selatan', 'Kabupaten Labuhanbatu Utara', 'Kabupaten Langkat', 'Kabupaten Mandailing Natal', 'Kabupaten Nias', 'Kabupaten Nias Barat', 'Kabupaten Nias Selatan', 'Kabupaten Nias Utara', 'Kabupaten Padang Lawas', 'Kabupaten Padang Lawas Utara', 'Kabupaten Pakpak Bharat', 'Kabupaten Samosir', 'Kabupaten Serdang Bedagai', 'Kabupaten Simalungun', 'Kabupaten Tapanuli Selatan', 'Kabupaten Tapanuli Tengah', 'Kabupaten Tapanuli Utara', 'Kabupaten Toba', 'Kota Binjai', 'Kota Gunungsitoli', 'Kota Medan', 'Kota Padang Sidempuan', 'Kota Pematangsiantar', 'Kota Sibolga', 'Kota Tanjungbalai', 'Kota Tebing Tinggi'],
    'Sumatera Barat': ['Kabupaten Agam', 'Kabupaten Dharmasraya', 'Kabupaten Kepulauan Mentawai', 'Kabupaten Lima Puluh Kota', 'Kabupaten Padang Pariaman', 'Kabupaten Pasaman', 'Kabupaten Pasaman Barat', 'Kabupaten Pesisir Selatan', 'Kabupaten Sijunjung', 'Kabupaten Solok', 'Kabupaten Solok Selatan', 'Kabupaten Tanah Datar', 'Kota Bukittinggi', 'Kota Padang', 'Kota Padang Panjang', 'Kota Pariaman', 'Kota Payakumbuh', 'Kota Sawahlunto', 'Kota Solok'],
    'Riau': ['Kabupaten Bengkalis', 'Kabupaten Indragiri Hilir', 'Kabupaten Indragiri Hulu', 'Kabupaten Kampar', 'Kabupaten Kepulauan Meranti', 'Kabupaten Kuantan Singingi', 'Kabupaten Pelalawan', 'Kabupaten Rokan Hilir', 'Kabupaten Rokan Hulu', 'Kabupaten Siak', 'Kota Dumai', 'Kota Pekanbaru'],
    'Jambi': ['Kabupaten Batanghari', 'Kabupaten Bungo', 'Kabupaten Kerinci', 'Kabupaten Merangin', 'Kabupaten Muaro Jambi', 'Kabupaten Sarolangun', 'Kabupaten Tanjung Jabung Barat', 'Kabupaten Tanjung Jabung Timur', 'Kabupaten Tebo', 'Kota Jambi', 'Kota Sungai Penuh'],
    'Sumatera Selatan': ['Kabupaten Banyuasin', 'Kabupaten Empat Lawang', 'Kabupaten Lahat', 'Kabupaten Muara Enim', 'Kabupaten Musi Banyuasin', 'Kabupaten Musi Rawas', 'Kabupaten Musi Rawas Utara', 'Kabupaten Ogan Ilir', 'Kabupaten Ogan Komering Ilir', 'Kabupaten Ogan Komering Ulu', 'Kabupaten Ogan Komering Ulu Selatan', 'Kabupaten Ogan Komering Ulu Timur', 'Kabupaten Penukal Abab Lematang Ilir', 'Kota Lubuklinggau', 'Kota Pagar Alam', 'Kota Palembang', 'Kota Prabumulih'],
    'Bengkulu': ['Kabupaten Bengkulu Selatan', 'Kabupaten Bengkulu Tengah', 'Kabupaten Bengkulu Utara', 'Kabupaten Kaur', 'Kabupaten Kepahiang', 'Kabupaten Lebong', 'Kabupaten Mukomuko', 'Kabupaten Rejang Lebong', 'Kabupaten Seluma', 'Kota Bengkulu'],
    'Lampung': ['Kabupaten Lampung Barat', 'Kabupaten Lampung Selatan', 'Kabupaten Lampung Tengah', 'Kabupaten Lampung Timur', 'Kabupaten Lampung Utara', 'Kabupaten Mesuji', 'Kabupaten Pesawaran', 'Kabupaten Pesisir Barat', 'Kabupaten Pringsewu', 'Kabupaten Tanggamus', 'Kabupaten Tulang Bawang', 'Kabupaten Tulang Bawang Barat', 'Kabupaten Way Kanan', 'Kota Bandar Lampung', 'Kota Metro'],
    'Kepulauan Bangka Belitung': ['Kabupaten Bangka', 'Kabupaten Bangka Barat', 'Kabupaten Bangka Selatan', 'Kabupaten Bangka Tengah', 'Kabupaten Belitung', 'Kabupaten Belitung Timur', 'Kota Pangkalpinang'],
    'Kepulauan Riau': ['Kabupaten Bintan', 'Kabupaten Karimun', 'Kabupaten Kepulauan Anambas', 'Kabupaten Lingga', 'Kabupaten Natuna', 'Kota Batam', 'Kota Tanjungpinang'],
    'DKI Jakarta': ['Kepulauan Seribu', 'Jakarta Barat', 'Jakarta Pusat', 'Jakarta Selatan', 'Jakarta Timur', 'Jakarta Utara'],
    'Jawa Barat': ['Kabupaten Bandung', 'Kabupaten Bandung Barat', 'Kabupaten Bekasi', 'Kabupaten Bogor', 'Kabupaten Ciamis', 'Kabupaten Cianjur', 'Kabupaten Cirebon', 'Kabupaten Garut', 'Kabupaten Indramayu', 'Kabupaten Karawang', 'Kabupaten Kuningan', 'Kabupaten Majalengka', 'Kabupaten Pangandaran', 'Kabupaten Purwakarta', 'Kabupaten Subang', 'Kabupaten Sukabumi', 'Kabupaten Sumedang', 'Kabupaten Tasikmalaya', 'Kota Bandung', 'Kota Banjar', 'Kota Bekasi', 'Kota Bogor', 'Kota Cimahi', 'Kota Cirebon', 'Kota Depok', 'Kota Sukabumi', 'Kota Tasikmalaya'],
    'Jawa Tengah': ['Kabupaten Banjarnegara', 'Kabupaten Banyumas', 'Kabupaten Batang', 'Kabupaten Blora', 'Kabupaten Boyolali', 'Kabupaten Brebes', 'Kabupaten Cilacap', 'Kabupaten Demak', 'Kabupaten Grobogan', 'Kabupaten Jepara', 'Kabupaten Karanganyar', 'Kabupaten Kebumen', 'Kabupaten Kendal', 'Kabupaten Klaten', 'Kabupaten Kudus', 'Kabupaten Magelang', 'Kabupaten Pati', 'Kabupaten Pekalongan', 'Kabupaten Pemalang', 'Kabupaten Purbalingga', 'Kabupaten Purworejo', 'Kabupaten Rembang', 'Kabupaten Semarang', 'Kabupaten Sragen', 'Kabupaten Sukoharjo', 'Kabupaten Tegal', 'Kabupaten Temanggung', 'Kabupaten Wonogiri', 'Kabupaten Wonosobo', 'Kota Magelang', 'Kota Pekalongan', 'Kota Salatiga', 'Kota Semarang', 'Kota Surakarta', 'Kota Tegal'],
    'Yogyakarta': ['Kabupaten Bantul', 'Kabupaten Gunungkidul', 'Kabupaten Kulon Progo', 'Kabupaten Sleman', 'Kota Yogyakarta'],
    'Jawa Timur': ['Kabupaten Bangkalan', 'Kabupaten Banyuwangi', 'Kabupaten Blitar', 'Kabupaten Bojonegoro', 'Kabupaten Bondowoso', 'Kabupaten Gresik', 'Kabupaten Jember', 'Kabupaten Jombang', 'Kabupaten Kediri', 'Kabupaten Lamongan', 'Kabupaten Lumajang', 'Kabupaten Madiun', 'Kabupaten Magetan', 'Kabupaten Malang', 'Kabupaten Mojokerto', 'Kabupaten Nganjuk', 'Kabupaten Ngawi', 'Kabupaten Pacitan', 'Kabupaten Pamekasan', 'Kabupaten Pasuruan', 'Kabupaten Ponorogo', 'Kabupaten Probolinggo', 'Kabupaten Sampang', 'Kabupaten Sidoarjo', 'Kabupaten Situbondo', 'Kabupaten Sumenep', 'Kabupaten Trenggalek', 'Kabupaten Tuban', 'Kabupaten Tulungagung', 'Kota Batu', 'Kota Blitar', 'Kota Kediri', 'Kota Madiun', 'Kota Malang', 'Kota Mojokerto', 'Kota Pasuruan', 'Kota Probolinggo', 'Kota Surabaya'],
    'Banten': ['Kabupaten Lebak', 'Kabupaten Pandeglang', 'Kabupaten Serang', 'Kabupaten Tangerang', 'Kota Cilegon', 'Kota Serang', 'Kota Tangerang', 'Kota Tangerang Selatan'],
    'Bali': ['Kabupaten Badung', 'Kabupaten Bangli', 'Kabupaten Buleleng', 'Kabupaten Gianyar', 'Kabupaten Jembrana', 'Kabupaten Karangasem', 'Kabupaten Klungkung', 'Kabupaten Tabanan', 'Kota Denpasar'],
    'Nusa Tenggara Barat': ['Kabupaten Bima', 'Kabupaten Dompu', 'Kabupaten Lombok Barat', 'Kabupaten Lombok Tengah', 'Kabupaten Lombok Timur', 'Kabupaten Lombok Utara', 'Kabupaten Sumbawa', 'Kabupaten Sumbawa Barat', 'Kota Bima', 'Kota Mataram'],
    'Nusa Tenggara Timur': ['Kabupaten Alor', 'Kabupaten Belu', 'Kabupaten Ende', 'Kabupaten Flores Timur', 'Kabupaten Kupang', 'Kabupaten Lembata', 'Kabupaten Malaka', 'Kabupaten Manggarai', 'Kabupaten Manggarai Barat', 'Kabupaten Manggarai Timur', 'Kabupaten Nagekeo', 'Kabupaten Ngada', 'Kabupaten Rote Ndao', 'Kabupaten Sabu Raijua', 'Kabupaten Sikka', 'Kabupaten Sumba Barat', 'Kabupaten Sumba Barat Daya', 'Kabupaten Sumba Tengah', 'Kabupaten Sumba Timur', 'Kabupaten Timor Tengah Selatan', 'Kabupaten Timor Tengah Utara', 'Kota Kupang'],
    'Kalimantan Barat': ['Kabupaten Bengkayang', 'Kabupaten Kapuas Hulu', 'Kabupaten Kayong Utara', 'Kabupaten Ketapang', 'Kabupaten Kubu Raya', 'Kabupaten Landak', 'Kabupaten Melawi', 'Kabupaten Mempawah', 'Kabupaten Sambas', 'Kabupaten Sanggau', 'Kabupaten Sekadau', 'Kabupaten Sintang', 'Kota Pontianak', 'Kota Singkawang'],
    'Kalimantan Tengah': ['Kabupaten Barito Selatan', 'Kabupaten Barito Timur', 'Kabupaten Barito Utara', 'Kabupaten Gunung Mas', 'Kabupaten Kapuas', 'Kabupaten Katingan', 'Kabupaten Kotawaringin Barat', 'Kabupaten Kotawaringin Timur', 'Kabupaten Lamandau', 'Kabupaten Murung Raya', 'Kabupaten Pulang Pisau', 'Kabupaten Sukamara', 'Kabupaten Seruyan', 'Kota Palangka Raya'],
    'Kalimantan Selatan': ['Kabupaten Balangan', 'Kabupaten Banjar', 'Kabupaten Barito Kuala', 'Kabupaten Hulu Sungai Selatan', 'Kabupaten Hulu Sungai Tengah', 'Kabupaten Hulu Sungai Utara', 'Kabupaten Kotabaru', 'Kabupaten Tabalong', 'Kabupaten Tanah Bumbu', 'Kabupaten Tanah Laut', 'Kabupaten Tapin', 'Kota Banjarbaru', 'Kota Banjarmasin'],
    'Kalimantan Timur': ['Kabupaten Berau', 'Kabupaten Kutai Barat', 'Kabupaten Kutai Kartanegara', 'Kabupaten Kutai Timur', 'Kabupaten Mahakam Ulu', 'Kabupaten Paser', 'Kabupaten Penajam Paser Utara', 'Kota Balikpapan', 'Kota Bontang', 'Kota Samarinda'],
    'Kalimantan Utara': ['Kabupaten Bulungan', 'Kabupaten Malinau', 'Kabupaten Nunukan', 'Kabupaten Tana Tidung', 'Kota Tarakan'],
    'Sulawesi Utara': ['Kabupaten Bolaang Mongondow', 'Kabupaten Bolaang Mongondow Selatan', 'Kabupaten Bolaang Mongondow Timur', 'Kabupaten Bolaang Mongondow Utara', 'Kabupaten Kepulauan Sangihe', 'Kabupaten Kepulauan Siau Tagulandang Biaro', 'Kabupaten Kepulauan Talaud', 'Kabupaten Minahasa', 'Kabupaten Minahasa Selatan', 'Kabupaten Minahasa Tenggara', 'Kabupaten Minahasa Utara', 'Kota Bitung', 'Kota Kotamobagu', 'Kota Manado', 'Kota Tomohon'],
    'Sulawesi Tengah': ['Kabupaten Banggai', 'Kabupaten Banggai Kepulauan', 'Kabupaten Banggai Laut', 'Kabupaten Buol', 'Kabupaten Donggala', 'Kabupaten Morowali', 'Kabupaten Morowali Utara', 'Kabupaten Parigi Moutong', 'Kabupaten Poso', 'Kabupaten Sigi', 'Kabupaten Tojo Una-Una', 'Kabupaten Tolitoli', 'Kota Palu'],
    'Sulawesi Selatan': ['Kabupaten Bantaeng', 'Kabupaten Barru', 'Kabupaten Bone', 'Kabupaten Bulukumba', 'Kabupaten Enrekang', 'Kabupaten Gowa', 'Kabupaten Jeneponto', 'Kabupaten Kepulauan Selayar', 'Kabupaten Luwu', 'Kabupaten Luwu Timur', 'Kabupaten Luwu Utara', 'Kabupaten Maros', 'Kabupaten Pangkajene dan Kepulauan', 'Kabupaten Pinrang', 'Kabupaten Sidenreng Rappang', 'Kabupaten Sinjai', 'Kabupaten Soppeng', 'Kabupaten Takalar', 'Kabupaten Tana Toraja', 'Kabupaten Toraja Utara', 'Kabupaten Wajo', 'Kota Makassar', 'Kota Palopo', 'Kota Parepare'],
    'Sulawesi Tenggara': ['Kabupaten Bombana', 'Kabupaten Buton', 'Kabupaten Buton Selatan', 'Kabupaten Buton Tengah', 'Kabupaten Buton Utara', 'Kabupaten Kolaka', 'Kabupaten Kolaka Timur', 'Kabupaten Kolaka Utara', 'Kabupaten Konawe', 'Kabupaten Konawe Kepulauan', 'Kabupaten Konawe Selatan', 'Kabupaten Konawe Utara', 'Kabupaten Muna', 'Kabupaten Muna Barat', 'Kabupaten Wakatobi', 'Kota Baubau', 'Kota Kendari'],
    'Gorontalo': ['Kabupaten Boalemo', 'Kabupaten Bone Bolango', 'Kabupaten Gorontalo', 'Kabupaten Gorontalo Utara', 'Kabupaten Pohuwato', 'Kota Gorontalo'],
    'Sulawesi Barat': ['Kabupaten Majene', 'Kabupaten Mamasa', 'Kabupaten Mamuju', 'Kabupaten Mamuju Tengah', 'Kabupaten Pasangkayu', 'Kabupaten Polewali Mandar'],
    'Maluku': ['Kabupaten Buru', 'Kabupaten Buru Selatan', 'Kabupaten Kepulauan Aru', 'Kabupaten Kepulauan Tanimbar', 'Kabupaten Maluku Barat Daya', 'Kabupaten Maluku Tengah', 'Kabupaten Maluku Tenggara', 'Kabupaten Seram Bagian Barat', 'Kabupaten Seram Bagian Timur', 'Kota Ambon', 'Kota Tual'],
    'Maluku Utara': ['Kabupaten Halmahera Barat', 'Kabupaten Halmahera Tengah', 'Kabupaten Halmahera Timur', 'Kabupaten Halmahera Selatan', 'Kabupaten Halmahera Utara', 'Kabupaten Kepulauan Sula', 'Kabupaten Pulau Morotai', 'Kabupaten Pulau Taliabu', 'Kota Ternate', 'Kota Tidore Kepulauan'],
    'Papua': ['Kabupaten Biak Numfor', 'Kabupaten Jayapura', 'Kabupaten Keerom', 'Kabupaten Kepulauan Yapen', 'Kabupaten Mamberamo Raya', 'Kabupaten Sarmi', 'Kabupaten Supiori', 'Kabupaten Waropen', 'Kota Jayapura'],
    'Papua Barat': ['Kabupaten Fakfak', 'Kabupaten Kaimana', 'Kabupaten Manokwari', 'Kabupaten Manokwari Selatan', 'Kabupaten Pegunungan Arfak', 'Kabupaten Teluk Bintuni', 'Kabupaten Teluk Wondama'],
    'Papua Selatan': ['Kabupaten Asmat', 'Kabupaten Boven Digoel', 'Kabupaten Mappi', 'Kabupaten Merauke'],
    'Papua Tengah': ['Kabupaten Deiyai', 'Kabupaten Dogiyai', 'Kabupaten Intan Jaya', 'Kabupaten Mimika', 'Kabupaten Nabire', 'Kabupaten Paniai', 'Kabupaten Puncak', 'Kabupaten Puncak Jaya'],
    'Papua Pegunungan': ['Kabupaten Jayawijaya', 'Kabupaten Lanny Jaya', 'Kabupaten Mamberamo Tengah', 'Kabupaten Nduga', 'Kabupaten Pegunungan Bintang', 'Kabupaten Tolikara', 'Kabupaten Yalimo', 'Kabupaten Yahukimo'],
    'Papua Barat Daya': ['Kabupaten Maybrat', 'Kabupaten Raja Ampat', 'Kabupaten Sorong', 'Kabupaten Sorong Selatan', 'Kabupaten Tambrauw', 'Kota Sorong']
};

// form prov and kab
function populateKabupatenKota(selectIdProv, selectIdKab) {
    const provinsiSelect = document.getElementById(selectIdProv);
    const kabupatenKotaSelect = document.getElementById(selectIdKab);
    const selectedProvinsi = provinsiSelect.value;

    kabupatenKotaSelect.innerHTML = "<option value='' disabled selected>Kabupaten/Kota</option>";

    if (selectedProvinsi in kabupatenKota) {
        kabupatenKota[selectedProvinsi].forEach(function(kab) {
            const option = document.createElement("option");
            option.text = kab;
            option.value = kab;
            kabupatenKotaSelect.add(option);
        });
    }
}

const provSelect = document.getElementById('prov');
provinces.forEach(province => {
    const option = document.createElement('option');
    option.value = province;
    option.textContent = province;
    provSelect.appendChild(option);
});

document.getElementById("prov").addEventListener("change", function() {
    populateKabupatenKota("prov", "kab");
});
window.addEventListener("load", function() {
    populateKabupatenKota("prov", "kab");
});

// edit form prov and kab
const e_provSelect = document.getElementById('e_prov');
provinces.forEach(province => {
    const option = document.createElement('option');
    option.value = province;
    option.textContent = province;
    e_provSelect.appendChild(option);
});

function e_populateKabupatenKota(selectedProvinsi, selectedKabupaten = null) {
    const kabupatenKotaSelect = document.getElementById("e_kab");
    kabupatenKotaSelect.innerHTML = "<option value='' disabled selected>Kabupaten/Kota</option>";

    if (selectedProvinsi && kabupatenKota[selectedProvinsi]) {
        kabupatenKota[selectedProvinsi].forEach(function(kab) {
            const option = document.createElement("option");
            option.text = kab;
            option.value = kab;
            kabupatenKotaSelect.add(option);
        });

        if (selectedKabupaten) {
            kabupatenKotaSelect.value = selectedKabupaten;
        }
    }
}

document.getElementById("e_prov").addEventListener("change", function() {
    const selectedProvinsi = this.value;
    e_populateKabupatenKota(selectedProvinsi);
});

// required
document.addEventListener('DOMContentLoaded', function() {
    const inputs = ['no_ktp', 'no_hp', 'kode_pos', 'norek_bank', 'e_no_ktp', 'e_no_hp', 'e_kode_pos', 'e_norek_bank'];

    inputs.forEach(id => {
        const input = document.getElementById(id);
        input.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
});

// format date
function formatDate(dateString) {
    const months = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    const date = new Date(dateString);
    const day = date.getDate();
    const month = months[date.getMonth()];
    const year = date.getFullYear();

    return `${day} ${month} ${year}`;
}

let currentStep = 1;

const navigateToFormStep = (stepNumber) => {
    if (stepNumber > currentStep) {
        const currentStepInputs = document.querySelector("#step-" + currentStep).querySelectorAll("input[required], textarea[required], select[required]");
        let isCurrentStepValid = true;

        for (let i = currentStepInputs.length - 1; i >= 0; i--) {
            const field = currentStepInputs[i];
            if (field.value.trim() === "") {
                isCurrentStepValid = false;
                field.reportValidity();
            } else if (field.type === "email") {
                const atIndex = field.value.indexOf('@');
                if (atIndex === -1 || atIndex === field.value.length - 1) {
                    isCurrentStepValid = false;
                    field.setCustomValidity("Email harus mengandung '@' dan diikuti oleh setidaknya satu karakter.");
                    field.reportValidity();
                } else {
                    field.setCustomValidity("");
                }
            } else {
                field.setCustomValidity("");
            }
        }

        if (!isCurrentStepValid) {
            return;
        }
    }

    document.querySelectorAll(".form-step").forEach((formStepElement) => {
        formStepElement.classList.add("d-none");
    });

    document.querySelector("#step-" + stepNumber).classList.remove("d-none");
    currentStep = stepNumber;
};

document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
    formNavigationBtn.addEventListener("click", () => {
        const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
        navigateToFormStep(stepNumber);
    });
});

let currentEStep = 1;

const navigateToFormEditStep = (stepNumber) => {
    if (stepNumber > currentEStep) {
        const currentStepInputs = document.querySelector("#step-edit-" + currentEStep).querySelectorAll("input[required], textarea[required], select[required]");
        let isCurrentStepValid = true;

        for (let i = currentStepInputs.length - 1; i >= 0; i--) {
            const field = currentStepInputs[i];
            if (field.value.trim() === "") {
                isCurrentStepValid = false;
                field.reportValidity();
            } else if (field.type === "email") {
                const atIndex = field.value.indexOf('@');
                if (atIndex === -1 || atIndex === field.value.length - 1) {
                    isCurrentStepValid = false;
                    field.setCustomValidity("Email harus mengandung '@' dan diikuti oleh setidaknya satu karakter.");
                    field.reportValidity();
                } else {
                    field.setCustomValidity("");
                }
            } else {
                field.setCustomValidity("");
            }
        }

        if (!isCurrentStepValid) {
            return;
        }
    }

    document.querySelectorAll(".form-step-edit").forEach((formStepElement) => {
        formStepElement.classList.add("d-none");
    });

    document.querySelector("#step-edit-" + stepNumber).classList.remove("d-none");
    currentEStep = stepNumber;
};

document.querySelectorAll(".btn-navigate-form-step-edit").forEach((formNavigationBtn) => {
    formNavigationBtn.addEventListener("click", () => {
        const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
        navigateToFormEditStep(stepNumber);
    });
});