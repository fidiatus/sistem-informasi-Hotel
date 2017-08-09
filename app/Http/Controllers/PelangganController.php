<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pelanggan;
use App\Http\Requests;

class PelangganController extends Controller
{
    public function index()
	{
        $pelanggans = DB::table('pelanggan');
		$pelanggans = Pelanggan::orderBy('id','ASC')->paginate(10);
        return view('pelanggan.index', ['pelanggans'=>$pelanggans]);
	}
	public function create()
	{
		return view('pelanggan.create');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
        'id_pelanggan' => 'required',
        'nama' => 'required',
        'email' => 'required',
        'no_telp' => 'required|digits_between:8,12',
        'alamat' => 'required',
    ]);
		$pelanggan = new Pelanggan();
        $pelanggan->id_pelanggan = $request->input('id_pelanggan');
        $pelanggan->nama= $request->input('nama');
        $pelanggan->email= $request->input('email');
        $pelanggan->no_telp = $request->input('no_telp');
        $pelanggan->alamat = $request->input('alamat');
        $pelanggan->save();

        return redirect('pelanggan')->with('message', 'Berhasil ditambahkan');
	}
	public function show($id)
	{
        $pelanggan=Pelanggan::find($id);
        if (!$pelanggan) {
        	abort(503);
        	}
		return view('pelanggan.show')->with('pelanggan',$pelanggan);
	}
	public function edit($id)
	{
        $pelanggan=Pelanggan::find($id);
        
		return view('pelanggan.edit')->with('pelanggan',$pelanggan);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'id_pelanggan' => 'required',
        'nama' => 'required',
        'email' => 'required',
        'no_telp' => 'required|digits_between:8,12',
        'alamat' => 'required',
    ]);
		$pelanggan = Pelanggan::find($id);
        $pelanggan->id_pelanggan = $request->input('id_pelanggan');
        $pelanggan->nama= $request->input('nama');
        $pelanggan->email= $request->input('email');
        $pelanggan->no_telp = $request->input('no_telp');
        $pelanggan->alamat = $request->input('alamat');
        $pelanggan->save();

        return redirect('pelanggan')->with('message', 'Berhasil dirubah');
	}
	public function destroy($id)
	{
		$pelanggan=Pelanggan::find($id)->delete();
		return redirect('pelanggan')->with('message', 'Data Telah Dihapus');
	}
}
