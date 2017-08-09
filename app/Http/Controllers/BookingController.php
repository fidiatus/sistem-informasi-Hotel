<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Booking;
use App\Kamar;
use App\Pelanggan;
use App\Http\Requests;

class BookingController extends Controller
{
    public function index()
	{
        $bookings = DB::table('booking');
		$bookings = Booking::orderBy('id','ASC')->paginate(10);
        return view('booking.index', ['bookings'=>$bookings]);
	}

	public function create()
	{
        $kamar= Kamar::lists('no_kamar','id');
        $pelanggan= Pelanggan::lists('id_pelanggan','id');
		return view('booking.create',compact('kamar','pelanggan'));
	}

	public function store(Request $request)
	{
		$this->validate($request, [
        'tgl_booking' => 'required',
        'pelanggan_id' => 'required',
        'kamar_id' => 'required',
        'lama' => 'required',
    ]);
		$booking = new Booking();
        $booking->tgl_booking = date_format(date_create($request->tgl_ooking),'Y-m-d');
        $booking->pelanggan_id = $request->input('pelanggan_id');
        $booking->kamar_id = $request->input('kamar_id');
        $booking->lama = $request->input('lama');
        $booking->save();

        return redirect('booking')->with('message', 'Berhasil ditambahkan');
	}

	public function show($id)
	{
        $booking=Booking::find($id);
        if (!$booking) {
        	abort(503);
        	}
		return view('booking.show')->with('booking',$booking);
	}

	public function edit($id)
	{
        $kamar= Kamar::lists('no_kamar','id');
        $pelanggan= Pelanggan::lists('id_pelanggan','id');
        $booking=Booking::find($id);
        
		return view('booking.edit',compact('kamar','pelanggan'))->with('booking',$booking);
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'tgl_booking' => 'required',
        'pelanggan_id' => 'required',
        'kamar_id' => 'required',
        'lama' => 'required',
    ]);
		$booking =Booking::find($id);
        $booking->tgl_booking = date_format(date_create($request->tgl_booking),'Y-m-d');
        $booking->pelanggan_id = $request->input('pelanggan_id');
        $booking->kamar_id = $request->input('kamar_id');
        $booking->lama = $request->input('lama');
        $booking->save();

        return redirect('booking')->with('message', 'Berhasil dirubah');
	}

	public function destroy($id)
	{
		$booking=Booking::find($id)->delete();
		return redirect('booking')->with('message', 'Data Telah Dihapus');
	}

    public function getPdf(Request $request)
    {
        $booking = Booking::all();

        $pdf = PDF::loadView('booking/pdf',compact('booking'))
                ->setPaper('a4', 'potrait');
                
            return $pdf->download('booking.pdf');
    }
}
