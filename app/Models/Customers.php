<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'email',
        'nomor_hp',
        'alamat'
    ];

    public function keranjang()
    {
        return $this->hasOne(Keranjang::class);
    }
}
