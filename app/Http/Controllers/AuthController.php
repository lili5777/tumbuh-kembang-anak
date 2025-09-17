<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{
    //
    public function index()
    {
        // kita ambil data user lalu simpan pada variable $user
        $user = Auth::user();
        // dd($user);
        // kondisi jika user nya ada 
        if ($user) {
            // jika user nya memiliki level admin
            return redirect()->route('admin.index');
        }

        return view('login');
    }
    //
    public function proses_login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Ambil data credential
        $credential = $request->only('email', 'password');

        // Coba melakukan login
        if (Auth::attempt($credential)) {
            // Jika berhasil, regenerate session
            $request->session()->regenerate();

            // Redirect ke halaman admin
            return redirect()->route('admin.index');
        }

        // Jika gagal, kembali ke halaman login dengan error
        return back()->with('error', 'Email atau password salah!');
    }

    public function register()
    {
        // tampilkan view register
        return view('register');
    }


    // aksi form register
    public function proses_register(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        // kalau gagal kembali ke halaman register dengan munculkan pesan error
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
        $request['password'] = bcrypt($request->password);

        // masukkan semua data pada request ke table user
        User::create($request->all());

        // kalo berhasil arahkan ke halaman login
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
