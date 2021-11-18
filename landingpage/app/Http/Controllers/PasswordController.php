<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Hash;

/*
source = https://www.lab-informatika.com/menambahkan-halaman-update-password-laravel
*/

class PasswordController extends Controller
{
    public function edit()
    {
        return view('password.edit');
    }
    /**
     * @param UpdatePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePasswordRequest $request)
    {
        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);
    
        return redirect()->route('user.password.edit');
    }
}
