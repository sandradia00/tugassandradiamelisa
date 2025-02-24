<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DjurnalModel extends Model
{
    use HasFactory;

    protected $table = 'djurnal';
    protected $primaryKey = 'TransaksiID';
    public $timestamps = false;

    protected $fillable = [
        'JurnalKode',
        'NomorPerkiraan',
        'TanggalTransaksi',
        'jenis_transaksi',
        'Keterangan',
        'debet',
        'kredit',
    ];

    // Relasi ke Hjurnal berdasarkan 'JurnalKode'
    public function hjurnal()
    {
        return $this->hasOne(HjurnalModel::class, 'JurnalKode', 'JurnalKode');
    }

    // Relasi ke tabel_akuntansi_master berdasarkan 'NomorPerkiraan'
    public function akun()
    {
        return $this->belongsTo(Jurnal::class, 'NomorPerkiraan', 'nomor_perkiraan');
    }
}