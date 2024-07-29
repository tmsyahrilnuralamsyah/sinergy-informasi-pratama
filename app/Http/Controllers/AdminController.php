<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Yaza\LaravelGoogleDriveStorage\Gdrive;
use App\Models\Karyawan;

class AdminController extends Controller
{
    public function dataKaryawan()
    {
        $data = [
            'jabatan' => 'all'
        ];

        $request = new Request($data);
        
        return $this->dataKaryawanFilter($request);
    }

    public function dataKaryawanFilter(Request $request)
    {
        if ($request->jabatan === 'all') {
            $karyawan = Karyawan::orderBy('id', 'desc')->get();
        } else {
            $karyawan = Karyawan::where('jabatan', $request->jabatan)->orderBy('id', 'desc')->get();
        }

        $filter = [
            'jabatan' => $request->jabatan,
        ];

        return view('daftarKaryawan', ['karyawans' => $karyawan, 'filter' => $filter]);
    }

    public function tambahKaryawan(Request $request)
    {
        $request->validate([
            'nama_depan' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'no_ktp' => 'required'
        ]);

        $existingNoHp = Karyawan::where('no_hp', $request->no_hp)->first();
        if ($existingNoHp) {
            return redirect()->back()->with('error', 'Nomor handphone ini sudah terdaftar')->withInput();
        }

        $existingEmail = Karyawan::where('email', $request->email)->first();
        if ($existingEmail) {
            return redirect()->back()->with('error', 'Email ini sudah terdaftar')->withInput();
        }

        $existingNoKtp = Karyawan::where('no_ktp', $request->no_ktp)->first();
        if ($existingNoKtp) {
            return redirect()->back()->with('error', 'Nomor KTP ini sudah terdaftar')->withInput();
        }

        if ($request->file('scan_ktp') != null) {
            $fotoPath = $request->file('scan_ktp')->store('karyawan', 'public');
            $scan_ktp = basename($fotoPath);

            Gdrive::put('SIP-GDrive/' . $scan_ktp, $request->file('scan_ktp'));
        } else {
            $scan_ktp = null;
        }

        Karyawan::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'tgl_lahir' => $request->tgl_lahir,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'prov' => $request->prov,
            'kab' => $request->kab,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'no_ktp' => $request->no_ktp,
            'scan_ktp' => $scan_ktp,
            'jabatan' => $request->jabatan,
            'rek_bank' => $request->rek_bank,
            'norek_bank' => $request->norek_bank
    	]);

        return redirect()->back()->with('success', 'Data karyawan berhasil disimpan')->withInput();
    }

    public function editKaryawan($id, Request $request)
    {
        $request->validate([
            'nama_depan' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'no_ktp' => 'required'
        ]);

        $existingNoHp = Karyawan::where('no_hp', $request->no_hp)->where('id', '!=', $id)->first();
        if ($existingNoHp) {
            return redirect()->back()->with('error', 'Nomor handphone ini sudah terdaftar')->withInput();
        }

        $existingEmail = Karyawan::where('email', $request->email)->where('id', '!=', $id)->first();
        if ($existingEmail) {
            return redirect()->back()->with('error', 'Email ini sudah terdaftar')->withInput();
        }

        $existingNoKtp = Karyawan::where('no_ktp', $request->no_ktp)->where('id', '!=', $id)->first();
        if ($existingNoKtp) {
            return redirect()->back()->with('error', 'Nomor KTP ini sudah terdaftar')->withInput();
        }

        $karyawan = Karyawan::find($id);
        
        if ($request->file('scan_ktp') != null) {
            File::delete(public_path('karyawan/' . $karyawan->scan_ktp));
            Storage::delete('public/karyawan/' . $karyawan->scan_ktp);
            $fotoPath = $request->file('scan_ktp')->store('karyawan', 'public');
            $scan_ktp = basename($fotoPath);

            Gdrive::delete('SIP-GDrive/' . $karyawan->scan_ktp);
            Gdrive::put('SIP-GDrive/' . $scan_ktp, $request->file('scan_ktp'));
        } else {
            $scan_ktp = $karyawan->scan_ktp;
        }

        $karyawan->update([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'tgl_lahir' => $request->tgl_lahir,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'prov' => $request->prov,
            'kab' => $request->kab,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'no_ktp' => $request->no_ktp,
            'scan_ktp' => $scan_ktp,
            'jabatan' => $request->jabatan,
            'rek_bank' => $request->rek_bank,
            'norek_bank' => $request->norek_bank
        ]);

        return redirect()->back()->with('success', 'Data karyawan berhasil diubah')->withInput();
    }

    public function hapusKaryawan($id)
    {
        $karyawan = Karyawan::find($id);
        File::delete(public_path('karyawan/' . $karyawan->scan_ktp));
        Storage::delete('public/karyawan/' . $karyawan->scan_ktp);
        Gdrive::delete('SIP-GDrive/' . $karyawan->scan_ktp);
        $karyawan->delete();

        return redirect()->back()->with('success', 'Data karyawan berhasil dihapus')->withInput();
    }
}
