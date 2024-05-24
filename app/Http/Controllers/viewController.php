<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function admin()
    {
        $admin = Admin::all();
        return view('admin', compact('admin'));
    }
    public function kategori()
    {
        $kategori = Kategori::all();
        return view('kategori', compact('kategori'));
    }
    public function produk()
    {
        $data = Produk::with('admin', 'kategori')->get();
        return view('produk', compact('data'));
    }

    // Admin
    public function addAdmin()
    {
        $maxAdmin = Admin::max('AdminID');
        $nextID = $maxAdmin + 1;
        return view('admin.add_admin', compact('nextID'));
    }

    public function editAdmin($id)
    {
        $data = Admin::find($id);
        return view('admin.edit_admin', compact('data'));
    }

    // Kategori
    public function addKategori()
    {
        $maxKategori = Kategori::max('KategoriID');
        $nextID = $maxKategori + 1;
        return view('kategori.add_kategori', compact('nextID'));
    }

    public function editKategori($id)
    {
        $data = Kategori::find($id);
        return view('kategori.edit_kategori', compact('data'));
    }

    // Produk
    public function addProduk()
    {
        $maxProduk = Produk::max('ProdukID');
        $data = Produk::with('kategori')->get();
        $admin = Admin::all();
        $nextID = $maxProduk + 1;
        return view('produk.add_produk', compact('nextID', 'data', 'admin'));
    }

    public function editProduk($id)
    {
        $data = Produk::find($id);
        $admin = Admin::all();
        $kategori = Kategori::all();
        return view('produk.edit_produk', compact('data', 'admin', 'kategori'));
    }
}
