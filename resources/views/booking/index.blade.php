@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
      <div class="x_panel">
        <div class="x_title">
        <h3>tabel Data Booking</h3>
          <div class="clearfix"></div>
        </div>
          <div class="panel-body">
            <div class="x_content">
              <a class="btn btn-success" href="{{ route('booking.create') }}"> Tambah Data Booking</a>           
              <br/>
              <table class="table table-bordered">
                <thead>
                  <tr> 
                    <th> ID </th>
                    <th> Tanggal Booking </th> 
                    <th> ID Pelanggan </th>
                    <th> No Kamar </th>
                    <th> Lama </th>
                    <th> Aksi </th> 
                  </tr>
              </thead>
              <tbody>
              @foreach($bookings as $booking)
                  <tr>
                    <td>{{$booking->id}} </td>
                    <td>{{$booking->tgl_booking}}</a></td>
                    <td>{{$booking->pelanggan->id_pelanggan}}</td>
                    <td>{{$booking->kamar->no_kamar}}</td>
                    <td>{{$booking->lama}}</td>
                    <td> 
                      <a class="btn btn-info" href="/booking/{{$booking->id}}">Show</a>
                      <a class="btn btn-primary" href="/booking/{{$booking->id}}/edit">Edit</a>
                      {!! Form::open(['method' => 'DELETE','route' => ['booking.destroy', $booking->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                      {!! Form::close() !!}
                    </td> 
                  </tr> 
                @endforeach
              </tbody>
            </table>
          {!! $bookings->links() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>         
            
@endsection