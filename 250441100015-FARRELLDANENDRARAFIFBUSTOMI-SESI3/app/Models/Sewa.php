<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sewa extends Model
{
        protected $fillable = [
        'kendaraan_id',
        'nama_penyewa',
        'tanggal_mulai',
        'lama_sewa',
        'total_biaya',
    ];
    public function kendaraans(): BelongsTo{
        return $this->belongsTo(Kendaraan::class);
    }
}
