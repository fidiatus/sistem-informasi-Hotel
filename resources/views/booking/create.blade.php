@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
      <div class="x_panel">
      <div class="x_title">
        <h3> Tambah Data Booking</h3>
          <div class="clearfix"></div>
      </div>
          <div class="panel-body">
            <div class="x_content">
            <a class="btn btn-primary" href="{{ route('booking.index') }}"> Back</a><br/><br>
			<form class="" action="/booking" method="post">
				<strong>Tanggal Booking</strong><br/>
			        <input type="text" name="tgl_booking" class="form-group" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
                    <span class="fa fa-calendar" aria-hidden="true"></span>    <br> 
					{{ ($errors->has('Tanggal Booking')) ? $errors->first('Tanggal Booking'):''}}
				<strong>ID Pelanggan</strong><br/>
					{!!Form::select('pelanggan_id', $pelanggan, 'S',array('class' => 'form-control' ));!!} <br/>
					{{ ($errors->has('ID Pelanggan')) ? $errors->first('ID Pelanggan'):''}}
				<strong>No Kamar</strong><br/>
					{!!Form::select('kamar_id', $kamar, 'S',array('class' => 'form-control' ));!!} <br/>
					{{ ($errors->has('No Kamar')) ? $errors->first('No Kamar'):''}}
				<strong>Lama</strong><br/>
					<input type="text" name="lama" placeholder="Lama" class="form-control"><br/>
					{{ ($errors->has('Lama')) ? $errors->first('Lama'):''}}<br/>

				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
			        <input type="submit" value="Simpan" class="btn btn-primary">
			   </div>	
			</form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>    

@endsection