<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kendaraan extends Model
{
    protected $fillable = [
        'plat_nomor',
        'merek',
        'tarif_per_hari',
    ];
    public function sewas(): HasMany{
        return $this->hasMany(Sewa::class);
    }
}
