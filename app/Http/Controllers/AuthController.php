<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        if (Auth::guard('siswa')-> attempt(['nis'=> $request->nis, 'password'=>$request->password])) {
           return redirect('/dashboard');
        } else {
            echo "Gagal Login";
        }
    }
}
