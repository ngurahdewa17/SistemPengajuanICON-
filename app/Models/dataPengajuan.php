<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPengajuan extends Model
{
    use HasFactory;
    protected $table="sistem_pengajuans";
    protected $fillable = [
        'namaMitra','email','namaPerusahaan','pekerjaan','noSP2KPA','haritanggalMulai','haritanggalSelesai','namaLokasi','aktifitas','lokasi','taskList',
        'pengawasPekerjaan','noHPPegawaiPekerjaan','pengawasK3','noHPPegawaiK3','image'
    ];
}
