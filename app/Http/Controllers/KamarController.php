<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kamar;
use App\TypeKamar;
use App\Http\Requests;

class KamarController extends Controller
{
    public function index()
	{
        $kamars = DB::table('kamar');
		$kamars = Kamar::orderBy('id','ASC')->paginate(10);
        return view('kamar.index', ['kamars'=>$kamars]);
	}
	public function create()
	{
        $typekamar= TypeKamar::lists('type_kamar','id');
		return view('kamar.create',compact('typekamar'));
	}
	public function store(Request $request)
	{
		$this->validate($request, [
        'no_kamar' => 'required',
        'nama_kamar' => 'required',
        'type_id' => 'required',
        'harga_kamar' => 'required',
    ]);
		$kamar = new Kamar();
        $kamar->no_kamar = $request->input('no_kamar');
        $kamar->nama_kamar = $request->input('nama_kamar');
        $kamar->type_id = $request->input('type_id');
        $kamar->harga_kamar = $request->input('harga_kamar');
        $kamar->save();

        return redirect('kamar')->with('message', 'Berhasil ditambahkan');
	}
	public function show($id)
	{
        $kamar=Kamar::find($id);
        if (!$kamar) {
        	abort(503);
        	}
		return view('kamar.show')->with('kamar',$kamar);
	}
	public function edit($id)
	{
        $kamar=Kamar::find($id);
        $typekamar= TypeKamar::lists('type_kamar','id');
        
		return view('kamar.edit',compact('typekamar'))->with('kamar',$kamar);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'no_kamar' => 'required|numeric',
        'nama_kamar' => 'required',
        'type_id' => 'required',
        'harga_kamar' => 'required',
    ]);
		$kamar=Kamar::find($id);
        $kamar->no_kamar = $request->input('no_kamar');
        $kamar->nama_kamar = $request->input('nama_kamar');
        $kamar->type_id = $request->input('type_id');
        $kamar->harga_kamar = $request->input('harga_kamar');
        $kamar->save();

        return redirect('kamar')->with('message', 'Berhasil dirubah');
	}
	public function destroy($id)
	{
		$kamar=Kamar::find($id)->delete();
		return redirect('kamar')->with('message', 'Data Telah Dihapus');
	}
}
