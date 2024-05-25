<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function saveProduk(Request $request)
    {
        $file = $request->file('Gambar');
        // Check if a file is uploaded before processing it
        if ($file) {
            $photo = $file->store('images', 'public');
        } else {
            // If no file is uploaded, set $photo to null
            $photo = null;
        }

        $message = [
            'NamaProduk.required' => 'Nama Produk harus diisi',
            'Deskripsi.required' => 'Deskripsi harus diisi',
            'Harga.required' => 'Harga harus diisi',
            'AdminID.required' => 'AdminID harus diisi',
            'KategoriID.required' => 'KategoriID harus diisi'
        ];

        $validate_data = $request->validate([
            'NamaProduk' => 'required|regex:/^[A-Za-z\s]+$/',
            'Deskripsi' => 'required|regex:/^[A-Za-z\s]+$/',
            'Harga' => 'required|numeric',
            'Gambar' => 'nullable|mimes:png,jpg,jpeg,webp',
            'AdminID' => 'required',
            'KategoriID' => 'required',
        ], $message);
        $validate_data['Gambar'] =  $photo;
        Produk::create($validate_data);

        return redirect("/produk")->with('message', 'Produk Baru Ditambahkan!');
    }

    public function updateProduk(Request $request)
    {
        $file = $request->file('Gambar');
        $photo = $request->imgPath;
        // Check if a file is uploaded before processing it
        if ($file) {
            $photo = $file->store('images', 'public');
        }

        Produk::where('ProdukID', $request->ProdukID)->update([
            'NamaProduk' => $request->NamaProduk,
            'Deskripsi' => $request->Deskripsi,
            'Harga' => $request->Harga,
            'Gambar' => $photo,
            'AdminID' => $request->AdminID,
            'KategoriID' => $request->KategoriID,
        ]);
        $validate_data['Gambar'] =  $photo;
        return redirect('/produk');
    }

    public function deleteProduk($id)
    {
        Produk::where('ProdukID', $id)->delete();

        return redirect('/produk');
    }
}
