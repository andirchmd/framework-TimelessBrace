<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangItem extends Model
{
    use HasFactory;

    protected $table = 'keranjang_items';
    protected $fillable = [
        'keranjang_id',
        'produk_id',
        'jumlah'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }
}
