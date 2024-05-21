<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'ProdukID';
    protected $fillable = ['NamaProduk', 'Deskripsi', 'Harga', 'Gambar', 'AdminID', 'KategoriID'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'KategoriID');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'AdminID');
    }
}
