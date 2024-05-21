<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function saveAdmin(Request $request)
    {
        $message = [
            'Username.required' => 'Username harus diisi',
            'Email.required' => 'Email harus diisi',
            'Password.required' => 'Password harus diisi'
        ];

        $validate_data = $request->validate([
            'Username' => 'required|regex:/^[A-Za-z\s]+$/',
            'Email' => 'required',
            'Password' => 'required'
        ], $message);
        // $validate_data['password'] =  bcrypt($request->input('ogPassword'));
        Admin::create($validate_data);

        return redirect("/admin");
    }

    public function updateAdmin(Request $request)
    {
        Admin::where('AdminID', $request->AdminID)->update([
            'Username' => $request->Username,
            'Email' => $request->Email,
            // 'ogPassword' => $request->input('ogPassword'),
            'password' => bcrypt($request->input('ogPassword'))
        ]);

        return redirect('/admin');
    }

    public function deleteAdmin($i)
    {
        Admin::where('AdminID', $i)->delete();

        return redirect('/admin');
    }
}
