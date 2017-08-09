@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
      <div class="x_panel">
      <div class="x_title">
        <h3> Data Booking</h3>
          <div class="clearfix"></div>
      </div>
        <div class="panel-body">
        <div class="x_content">
            <a class="btn btn-primary" href="{{ route('booking.index') }}"> Back</a><br/><br>
            <form>
            <td><strong>Tanggal Booking</strong></td>
            <td> : </td>
            <td>{{ $booking->tgl_booking }}</td><br>
            <td><strong>ID Pelanggan</strong></td>
            <td> : </td>
            <td>{{ $booking->pelanggan_id }}</td><br>
            <td><strong>No Kamar</strong></td>
            <td> : </td>
            <td>{{ $booking->kamar_id }}</td><br>
            <td><strong>Lama</strong></td>
            <td> : </td>
            <td>{{ $booking->lama }}</td><br>
            </form>
        </div>
        </div>
    </div>
  </div>
</div> 
</div>   

@endsection