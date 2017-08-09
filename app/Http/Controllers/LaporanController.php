<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LaporanController extends Controller
{
    public function pdfview(Request $request)
    {
    	$bookings=DB::table("booking")->get();
    	view()->share('booking',$bookings);

    	if ($request->has('download')) {
    		$pdf = PDF::loadView('pdfview');
    		return $pdf->download('pdfview.pdf');
    	}

    	return view('pdfview');
    }
}
