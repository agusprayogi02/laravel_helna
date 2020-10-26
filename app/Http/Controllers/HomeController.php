<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_siswa = Items::where('judul', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_siswa = Items::all();
        }
        $data = ['title' => "Welcome", 'items' => $data_siswa];
        return view('welcome', $data);
    }
}
