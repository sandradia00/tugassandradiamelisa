<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HjurnalModel extends Model
{
    use HasFactory;

    protected $table = 'hjurnal';
    protected $primaryKey = 'NomorJurnal';
    public $timestamps = false;

    protected $fillable = [
        'JurnalKode',
        'TanggalSelesai'
    ];

    // Relasi ke Djurnal berdasarkan 'JurnalKode'
    public function djurnal()
    {
        return $this->belongsTo(DjurnalModel::class, 'JurnalKode', 'JurnalKode');
    }
}