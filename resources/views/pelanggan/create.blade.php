@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h3> Tambah Data Pelanggan</h3>
          <div class="clearfix"></div>
      </div>
          <div class="panel-body">
            <div class="x_content">
            <a class="btn btn-primary" href="{{ route('pelanggan.index') }}"> Back</a><br/><br>
			<form class="" action="/pelanggan" method="post">
				<strong>ID Pelanggan</strong><br/>
					<input type="text" name="id_pelanggan" placeholder="ID Pelanggan" class="form-control"><br/>
					{{ ($errors->has('ID Pelanggan')) ? $errors->first('ID Pelanggan'):''}}<br/>
				<strong>Nama Pelanggan</strong><br/>
					<input type="text" name="nama" placeholder="Nama Pelanggan" class="form-control"><br/>
					{{ ($errors->has('Nama Pelanggan')) ? $errors->first('Nama Pelanggan'):''}}<br/>
				<strong>Email</strong><br/>
					<input type="text" name="email" placeholder="Email" class="form-control"><br/>
					{{ ($errors->has('Email')) ? $errors->first('Email'):''}}<br/>
				<strong>No Telp</strong><br/>
					<input type="text" name="no_telp" placeholder="No Telp" class="form-control"><br/>
					{{ ($errors->has('No Telp')) ? $errors->first('No Telp'):''}}<br/>
				<strong>Alamat</strong><br/>
					<input type="text" name="alamat" placeholder="Alamat" class="form-control"><br/>
					{{ ($errors->has('Alamat')) ? $errors->first('Alamat'):''}}<br/>
				
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