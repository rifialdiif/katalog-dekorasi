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
        $produk = Produk::with('admin', 'kategori')->get();
        return view('produk', compact('produk'));
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
}
