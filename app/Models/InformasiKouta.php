<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiKouta extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_kunjungan',
        'sisa_kouta',
        'tujuan_kunjungan'
    ];

    public function scopeSearch($query, $search)
    {
        return $query->orWhere("tujuan_kunjungan", "like", "%{$search}%");
    }
}
