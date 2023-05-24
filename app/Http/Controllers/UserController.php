<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $lokasi = $request->foto->store('gambar');

        User::where('id', $id)->update([
            'foto_profil' => $lokasi,
        ]);

        return redirect()->back();
    }
}
