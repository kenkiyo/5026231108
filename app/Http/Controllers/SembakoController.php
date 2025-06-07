<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SembakoController extends Controller
{
	public function index()
	{
		$sembako = DB::table('sembako')->paginate(10);
		return view('sembako.index', ['sembako' => $sembako]);
	}

	public function tambah()
	{
		return view('sembako.tambah');
	}

	public function store(Request $request)
	{
		DB::table('sembako')->insert([
			'merksembako'   => $request->merksembako,
			'hargasembako'  => $request->hargasembako,
			'tersedia'      => $request->tersedia,
			'berat'         => $request->berat
		]);
		return redirect('/sembako');
	}

	public function edit($id)
	{
		$sembako = DB::table('sembako')->where('id', $id)->get();
		return view('sembako.edit', ['sembako' => $sembako]);
	}

	public function update(Request $request)
	{
		DB::table('sembako')
			->where('id', $request->id)
			->update([
				'merksembako'   => $request->merksembako,
				'hargasembako'  => $request->hargasembako,
				'tersedia'      => $request->tersedia,
				'berat'         => $request->berat
			]);
		return redirect('/sembako');
	}

	public function hapus($id)
	{
		DB::table('sembako')->where('id', $id)->delete();
		return redirect('/sembako');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;

		$sembako = DB::table('sembako')
			->where('merksembako', 'like', "%" . $cari . "%")
			->paginate();

		return view('sembako.index', ['sembako' => $sembako, 'cari' => $cari]);
	}
}
