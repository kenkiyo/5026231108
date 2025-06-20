<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilai')->paginate(10);
        return view('nilai.index', ['nilai' => $nilai]);
    }

    public function tambah()
    {
        return view('nilai.tambah');
    }

    public function store(Request $request)
    {
        DB::table('nilai')->insert([
            'id' => $request->id,
            'nomorinduksiswa' => $request->nomorinduksiswa,
            'nilaiangka'      => $request->nilaiangka,
            'sks'  => $request->sks,
        ]);
        return redirect('/eas');
    }
}
