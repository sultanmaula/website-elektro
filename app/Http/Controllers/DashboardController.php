<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('login');
        // return view('welcome');
    }

    public function dashboard()
    {
        $dosen = User::role('dosen')->count();
        $matkul = Matkul::count();

        return view('dashboard', compact('dosen', 'matkul'));
    }
}
