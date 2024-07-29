<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sinergy Informasi Pratama</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- Table CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
    <div class="container">
        <div class="card p-2 m-3">
            <form method="post" action="{{ route("dataKaryawanFilter") }}" enctype="multipart/form-data">
                {{ csrf_field() }}
    
                <div class="row p-2">
                    <div class="col-10 col-lg-4 mb-3">
                        <label for="f_jabatan" class="form-label">Jabatan</label>
                        <select class="form-select" name="jabatan" id="f_jabatan">
                            <option value="all" selected>Semua</option>
                            <option>Manager</option>
                            <option>Assistant Manager</option>
                            <option>Senior Developer</option>
                            <option>Junior Developer</option>
                            <option>Intern</option>
                            <option>HR</option>
                            <option>Finance</option>
                            <option>Marketing</option>
                            <option>Sales</option>
                            <option>Support</option>
                            <option>Admin</option>
                            <option>CEO</option>
                            <option>CTO</option>
                            <option>CFO</option>
                        </select>
                    </div>
                    <div class="col-2 col-lg-1 d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </form>
            <hr>

            <div class="col d-flex justify-content-end">
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambah"><i class='bx bxs-plus-square'></i> Tambah Karyawan</button>
            </div>

            <div class="modal fade" id="tambah" data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahTitle">Tambah Data Karyawan</h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <form method="post" action="{{ route("tambahKaryawan") }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
        
                            <section id="step-1" class="form-step">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="nama_depan" class="form-label">Nama Depan<span style="color: red; font-weight: bold;">*</span></label>
                                            <input type="text" id="nama_depan" name="nama_depan" class="form-control" placeholder="Nama Depan" required/>
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                            <input type="text" id="nama_belakang" name="nama_belakang" class="form-control" placeholder="Nama Belakang"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="no_ktp" class="form-label">NIK<span style="color: red; font-weight: bold;">*</span></label>
                                            <input type="text" id="no_ktp" name="no_ktp" class="form-control" placeholder="NIK" required/>
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="text" id="tgl_lahir" name="tgl_lahir" class="form-control flatpickr_humandate" placeholder="Tanggal Lahir"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="no_hp" class="form-label">No HP<span style="color: red; font-weight: bold;">*</span></label>
                                            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No HP" required/>
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="email" class="form-label">Email<span style="color: red; font-weight: bold;">*</span></label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="position-absolute start-0 mx-4">
                                        <p><span style="color: red; font-weight: bold;">*</span> wajib diisi</p>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-navigate-form-step" step_number="2">Next</button>
                                </div>
                            </section>

                            <section id="step-2" class="form-step d-none">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="prov" class="form-label">Provinsi</label>
                                            <select class="form-select" name="prov" id="prov">
                                                <option value="" disabled selected>Provinsi</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="kab" class="form-label">Kabupaten/Kota</label>
                                            <select class="form-select" name="kab" id="kab">
                                                <option value="" disabled selected>Kabupaten/Kota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea type="text" id="alamat" name="alamat" class="form-control" rows="3" maxlength="720" placeholder="Alamat"/></textarea>
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="kode_pos" class="form-label">Kode Pos</label>
                                            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-navigate-form-step" step_number="1">Previous</button>
                                    <button type="button" class="btn btn-primary btn-navigate-form-step" step_number="3">Next</button>
                                </div>
                            </section>

                            <section id="step-3" class="form-step d-none">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="jabatan" class="form-label">Jabatan</label>
                                            <select class="form-select" name="jabatan" id="jabatan">
                                                <option value="" disabled selected>Jabatan</option>
                                                <option>Manager</option>
                                                <option>Assistant Manager</option>
                                                <option>Senior Developer</option>
                                                <option>Junior Developer</option>
                                                <option>Intern</option>
                                                <option>HR</option>
                                                <option>Finance</option>
                                                <option>Marketing</option>
                                                <option>Sales</option>
                                                <option>Support</option>
                                                <option>Admin</option>
                                                <option>CEO</option>
                                                <option>CTO</option>
                                                <option>CFO</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="scan_ktp" class="form-label">Scan KTP</label>
                                            <input type="file" id="scan_ktp" name="scan_ktp" class="form-control" accept="image/*"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="rek_bank" class="form-label">Rekening Bank</label>
                                            <select class="form-select" name="rek_bank" id="rek_bank">
                                                <option value="" disabled selected>Rekening Bank</option>
                                                <option>Bank BCA</option>
                                                <option>Bank Mandiri</option>
                                                <option>Bank BRI</option>
                                                <option>Bank BNI</option>
                                                <option>Bank CIMB Niaga</option>
                                                <option>Bank Danamon</option>
                                                <option>Bank BTN</option>
                                                <option>Bank Permata</option>
                                                <option>Bank Sinarmas</option>
                                                <option>Bank OCBC NISP</option>
                                                <option>Bank Maybank</option>
                                                <option>Bank BTPN</option>
                                                <option>Bank Muamalat</option>
                                                <option>Bank Syariah Indonesia</option>
                                                <option>Bank Jago</option>
                                                <option>Bank Mega</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-6 mb-3">
                                            <label for="norek_bank" class="form-label">No Rekening Bank</label>
                                            <input type="text" class="form-control" name="norek_bank" id="norek_bank" placeholder="No Rekening Bank"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-navigate-form-step" step_number="2">Previous</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        
            <table class="table table-striped table-bordered" id="tablejs" style="min-width: 100%;">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center" style="color: white;">No</th>
                        <th class="text-center" style="color: white;">Nama</th>
                        <th class="text-center" style="color: white;">Jabatan</th>
                        <th class="text-center" style="color: white;">Data</th>
                        <th class="text-center" style="color: white;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($karyawans as $k)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $k->nama_depan . " " . $k->nama_belakang }}</td>
                            <td>{{ $k->jabatan }}</td>
                            <td class="text-center px-4">
                                <a class="btn btn-info my-1" style="color: white;" onclick="showData({{ $k }})"><i class='bx bxs-low-vision'></i></a>
                            </td>
                            <td class="text-center px-4">
                                <a class="btn btn-warning my-1" style="color: white;" onclick="showModal({{ $k }})"><i class='bx bxs-edit'></i></a>
        
                                <form action="{{ route("hapusKaryawan", $k->id) }}" method="post" class="d-inline">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    
                                    <button class="btn btn-danger my-1 hapusdata"><i class='bx bxs-trash'></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="modal fade" id="data" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dataTitle">Data Karyawan</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-12 col-lg-6">
                                <p class="fw-bold mb-0">Nama : </p><p id="v_nama"></p>
                                <p class="fw-bold mb-0">NIK : </p><p id="v_no_ktp"></p>
                                <p class="fw-bold mb-0">Email : </p><p id="v_email"></p>
                                <p class="fw-bold mb-0">Provinsi : </p><p id="v_prov"></p>
                                <p class="fw-bold mb-0">Kabupaten/Kota : </p><p id="v_kab"></p>
                                <p class="fw-bold mb-0">Alamat : </p><p id="v_alamat"></p>
                                <p class="fw-bold mb-0">Kode Pos : </p><p id="v_kode_pos"></p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p class="fw-bold mb-0">Jabatan : </p><p id="v_jabatan"></p>
                                <p class="fw-bold mb-0">Tanggal Lahir : </p><p id="v_tgl_lahir"></p>
                                <p class="fw-bold mb-0">No HP : </p><p id="v_no_hp"></p>
                                <p class="fw-bold mb-0">Rekening Bank : </p><p id="v_rek_bank"></p>
                                <p class="fw-bold mb-0">No Rekening Bank : </p><p id="v_norek_bank"></p>
                            </div>
                        </div>
                        <div class="row">
                            <img id="v_scan_ktp" src="" alt="" style="width: 500px; height: auto;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="ubah" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ubahTitle">Ubah Data Karyawan</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <form method="post" id="formEdit" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
        
                        <section id="step-edit-1" class="form-step-edit">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_nama_depan" class="form-label">Nama Depan<span style="color: red; font-weight: bold;">*</span></label>
                                        <input type="text" id="e_nama_depan" name="nama_depan" class="form-control" placeholder="Nama Depan" required/>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_nama_belakang" class="form-label">Nama Belakang</label>
                                        <input type="text" id="e_nama_belakang" name="nama_belakang" class="form-control" placeholder="Nama Belakang"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_no_ktp" class="form-label">NIK<span style="color: red; font-weight: bold;">*</span></label>
                                        <input type="text" id="e_no_ktp" name="no_ktp" class="form-control" placeholder="NIK" required/>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="text" id="e_tgl_lahir" name="tgl_lahir" class="form-control flatpickr_humandate" placeholder="Tanggal Lahir"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_no_hp" class="form-label">No HP<span style="color: red; font-weight: bold;">*</span></label>
                                        <input type="text" class="form-control" name="no_hp" id="e_no_hp" placeholder="No HP" required/>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_email" class="form-label">Email<span style="color: red; font-weight: bold;">*</span></label>
                                        <input type="email" id="e_email" name="email" class="form-control" placeholder="Email" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="position-absolute start-0 mx-4">
                                    <p><span style="color: red; font-weight: bold;">*</span> wajib diisi</p>
                                </div>
                                <button type="button" class="btn btn-primary btn-navigate-form-step-edit" step_number="2">Next</button>
                            </div>
                        </section>

                        <section id="step-edit-2" class="form-step-edit d-none">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_prov" class="form-label">Provinsi</label>
                                        <select class="form-select" name="prov" id="e_prov">
                                            <option value="" disabled selected>Provinsi</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_kab" class="form-label">Kabupaten/Kota</label>
                                        <select class="form-select" name="kab" id="e_kab">
                                            <option value="" disabled selected>Kabupaten/Kota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_alamat" class="form-label">Alamat</label>
                                        <textarea type="text" id="e_alamat" name="alamat" class="form-control" rows="3" maxlength="720" placeholder="Alamat"/></textarea>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_kode_pos" class="form-label">Kode Pos</label>
                                        <input type="text" class="form-control" name="kode_pos" id="e_kode_pos" placeholder="Kode Pos"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-navigate-form-step-edit" step_number="1">Prev</button>
                                <button type="button" class="btn btn-primary btn-navigate-form-step-edit" step_number="3">Next</button>
                            </div>
                        </section>

                        <section id="step-edit-3" class="form-step-edit d-none">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_jabatan" class="form-label">Jabatan</label>
                                        <select class="form-select" name="jabatan" id="e_jabatan">
                                            <option value="" disabled selected>Jabatan</option>
                                            <option>Manager</option>
                                            <option>Assistant Manager</option>
                                            <option>Senior Developer</option>
                                            <option>Junior Developer</option>
                                            <option>Intern</option>
                                            <option>HR</option>
                                            <option>Finance</option>
                                            <option>Marketing</option>
                                            <option>Sales</option>
                                            <option>Support</option>
                                            <option>Admin</option>
                                            <option>CEO</option>
                                            <option>CTO</option>
                                            <option>CFO</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_scan_ktp" class="form-label">Scan KTP</label>
                                        <input type="file" id="e_scan_ktp" name="scan_ktp" class="form-control" accept="image/*"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_rek_bank" class="form-label">Rekening Bank</label>
                                        <select class="form-select" name="rek_bank" id="e_rek_bank">
                                            <option value="" disabled selected>Rekening Bank</option>
                                            <option>Bank BCA</option>
                                            <option>Bank Mandiri</option>
                                            <option>Bank BRI</option>
                                            <option>Bank BNI</option>
                                            <option>Bank CIMB Niaga</option>
                                            <option>Bank Danamon</option>
                                            <option>Bank BTN</option>
                                            <option>Bank Permata</option>
                                            <option>Bank Sinarmas</option>
                                            <option>Bank OCBC NISP</option>
                                            <option>Bank Maybank</option>
                                            <option>Bank BTPN</option>
                                            <option>Bank Muamalat</option>
                                            <option>Bank Syariah Indonesia</option>
                                            <option>Bank Jago</option>
                                            <option>Bank Mega</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-3">
                                        <label for="e_norek_bank" class="form-label">No Rekening Bank</label>
                                        <input type="text" class="form-control" name="norek_bank" id="e_norek_bank" placeholder="No Rekening Bank"/>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-navigate-form-step-edit" step_number="2">Previous</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Table JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="{{ asset('assets/karyawan.js') }}"></script>

    <script>
        $(document).ready(function() {
            var filter = @json($filter);
            $('#f_jabatan').val(filter.jabatan);

            $('#tablejs').DataTable({
                pageLength : 10,
                lengthMenu: [[10, 20, 50, 100, -1], [10, 20, 50, 100, 'all']],
            });
        });

        const humandate = document.querySelectorAll('.flatpickr_humandate')
        Array.from(humandate, (elem) => {
            if(typeof flatpickr !== typeof undefined) {
                flatpickr(elem, {
                    altFormat: "F j, Y",
                    dateFormat: "Y-m-d",
                    allowInput: true
                })
            }
        }) 

        function showData(karyawan) {
            let modal = $('#data').modal('show');
            $('#v_nama', modal).text(karyawan.nama_depan + ' ' + karyawan.nama_belakang);
            $('#v_no_ktp', modal).text(karyawan.no_ktp);
            let formattedDate = formatDate(karyawan.tgl_lahir);
            $('#v_tgl_lahir', modal).text(formattedDate);
            $('#v_no_hp', modal).text(karyawan.no_hp);
            $('#v_email', modal).text(karyawan.email);
            $('#v_prov', modal).text(karyawan.prov);
            $('#v_kab', modal).text(karyawan.kab);
            $('#v_alamat', modal).text(karyawan.alamat);
            $('#v_kode_pos', modal).text(karyawan.kode_pos);
            $('#v_jabatan', modal).text(karyawan.jabatan);
            $('#v_rek_bank', modal).text(karyawan.rek_bank);
            $('#v_norek_bank', modal).text(karyawan.norek_bank);

            let fotoURL = "{{ asset('storage/karyawan') }}" + "/" + karyawan.scan_ktp;
            $('#v_scan_ktp', modal).attr('src', fotoURL);
        }

        function showModal(karyawan) {
            let modal = $('#ubah').modal('show');
            $('#e_nama_depan', modal).val(karyawan.nama_depan);
            $('#e_nama_belakang', modal).val(karyawan.nama_belakang);
            $('#e_tgl_lahir', modal).val(karyawan.tgl_lahir);
            $('#e_no_hp', modal).val(karyawan.no_hp);
            $('#e_email', modal).val(karyawan.email);
            $('#e_prov', modal).val(karyawan.prov);
            e_populateKabupatenKota(karyawan.prov, karyawan.kab);
            $('#e_alamat', modal).val(karyawan.alamat);
            $('#e_kode_pos', modal).val(karyawan.kode_pos);
            $('#e_no_ktp', modal).val(karyawan.no_ktp);
            $('#e_jabatan', modal).val(karyawan.jabatan);
            $('#e_rek_bank', modal).val(karyawan.rek_bank);
            $('#e_norek_bank', modal).val(karyawan.norek_bank);

            let editForm = "{{ route('editKaryawan', ':karyawanId') }}";
            editForm = editForm.replace(':karyawanId', karyawan.id);
            $('#formEdit').attr('action', editForm);
        }

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        @if (session()->get('success'))
            Toast.fire({
                icon: 'success',
                title: '{{ session()->get('success') }}'
            })
        @elseif(session()->get('error'))
        Toast.fire({
                icon: 'error',
                title: '{{ session()->get('error') }}'
            })
        @endif

        $('.hapusdata').click(function(event){
            var form =  $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                title: 'Apa kamu yakin?',
                text: 'Data tidak dapat dikembalikan setelah dihapus',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        })
    </script>
</body>
</html>