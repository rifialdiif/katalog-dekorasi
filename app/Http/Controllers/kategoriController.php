<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function saveKategori(Request $request)
    {
        $message = [
            'NamaKategori.required' => 'Nama Kategori harus diisi'
        ];

        $validate_data = $request->validate([
            'NamaKategori' => 'required|regex:/^[A-Za-z\s]+$/'
        ], $message);
        // $validate_data['password'] =  bcrypt($request->input('ogPassword'));
        Kategori::create($validate_data);

        return redirect("/kategori");
    }

    public function updateKategori(Request $request)
    {
        Kategori::where('KategoriID', $request->KategoriID)->update([
            'NamaKategori' => $request->NamaKategori
        ]);

        return redirect('/kategori');
    }

    public function deleteKategori($i)
    {
        Kategori::where('KategoriID', $i)->delete();

        return redirect('/kategori');
    }
}
