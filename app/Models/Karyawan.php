<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "karyawan";
    protected $fillable = ['nama_depan','nama_belakang','tgl_lahir','no_hp','email','prov','kab','alamat','kode_pos','no_ktp','scan_ktp','jabatan','rek_bank','norek_bank'];
}
