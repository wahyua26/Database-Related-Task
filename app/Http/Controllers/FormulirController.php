<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormulirController extends Controller
{
    public function input()
    {
        return view('input-form-di-laravel');
    }
 
    public function proses(Request $request)
    {

        /*$messagesError = [
            'required' => ':attribute ini wajib diisi!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
            'alpha' => ':attribute harus berisi huruf',
            'numeric' => ':attribute harus berisi angka',
            'image' => ':attribute harus diisi dengan file gambar',
            'mimes' => ':attribute harus berekstensi .png/.jpg/.jpeg',
        ];*/

        $this->validate($request,[
            'email' => 'required|email',
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required|alpha',
            'usia' => 'required|integer',
            'double' => 'required|numeric|between:2.50,99.99',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $path = $request->file('gambar')->store('post-images');
 		
        return view('proses-form-di-laravel',['data' => $request, 'path' => $path]);
    }
}