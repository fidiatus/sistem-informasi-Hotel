<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\TypeKamar;
use App\Http\Requests;

class TypeKamarController extends Controller
{
    public function index()
	{
        $types = DB::table('type_kamar');
		$types = TypeKamar::orderBy('id','ASC')->paginate(10);
        return view('type.index', ['types'=>$types]);
	}
	public function create()
	{
		return view('type.create');
	}
	public function store(Request $request)
	{
		$this->validate($request, [
        'type_kamar' => 'required',
        'keterangan' => 'required',
    ]);
		$type = new TypeKamar();
        $type->type_kamar = $request->input('type_kamar');
        $type->keterangan= $request->input('keterangan');
        $type->save();

        return redirect('type')->with('message', 'Berhasil ditambahkan');
	}
	public function show($id)
	{
        $type=TypeKamar::find($id);
        if (!$type) {
        	abort(503);
        	}
		return view('type.show')->with('type',$type);
	}
	public function edit($id)
	{
        $type=TypeKamar::find($id);
        
		return view('type.edit')->with('type',$type);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'type_kamar' => 'required|unique',
        'keterangan' => 'required',
    ]);
		$type = TypeKamar::find($id);
        $type->type_kamar = $request->input('type_kamar');
        $type->keterangan= $request->input('keterangan');
        $type->save();

        return redirect('type')->with('message', 'Berhasil dirubah');
	}
	public function destroy($id)
	{
		$type=TypeKamar::find($id)->delete();
		return redirect('type')->with('message', 'Data Telah Dihapus');
	}
}
