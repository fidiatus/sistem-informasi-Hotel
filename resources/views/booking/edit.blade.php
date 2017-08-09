@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
      <div class="x_panel">
        <div class="x_title">
        <h3> Edit Data Booking</h3>
          <div class="clearfix"></div>
      </div>
          <div class="panel-body">
            <div class="x_content">
            <a class="btn btn-primary" href="{{ route('booking.index') }}"> Back</a><br/><br>
             
			<form class="" action="/booking/{{$booking->id}}" method="post">
				<strong>Tanggal Booking</strong><br/>
					<input type="text" name="tgl_booking" class="form-group" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
                    <span class="fa fa-calendar" aria-hidden="true"></span>          
					{{ ($errors->has('Tanggal Booking')) ? $errors->first('Tanggal Booking'):''}}<br/>
				<strong>ID Pelanggan</strong><br/>
             		{!!Form::select('pelanggan_id', $pelanggan, $booking->pelanggan_id,array('class' => 'form-control' ));!!} <br/>
				<strong>No Kamar</strong><br/>
             		{!!Form::select('kamar_id', $kamar, $booking->kamar_id,array('class' => 'form-control' ));!!} <br/>
				<strong>Lama</strong><br/>
					<input type="text" name="lama" value="{{$booking->lama}}" class="form-control" placeholder="Lama"><br/>
					{{ ($errors->has('Lama')) ? $errors->first('Lama'):''}}<br/>

				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<input type="hidden" name="_method" value="put">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
			        <input type="submit" value="Update" class="btn btn-primary">
			   </div>					
			</form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>    

@endsection