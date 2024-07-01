<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncryptionController extends Controller
{
    public function encrypt(Request $request)
    {
        $encrypted = aes128_encrypt($request->input('data'));
        return response()->json(['encrypted' => $encrypted]);
    }
}
