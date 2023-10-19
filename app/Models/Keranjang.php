<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjangs';
    protected $fillable = [
        'customer_id'
    ];


    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    public function keranjangItems()
    {
        return $this->hasMany(KeranjangItem::class);
    }
}