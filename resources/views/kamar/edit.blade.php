@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h3> Edit Data Kamar</h3>
          <div class="clearfix"></div>
      </div>
          <div class="panel-body">
            <div class="x_content">
            <a class="btn btn-primary" href="{{ route('kamar.index') }}"> Back</a><br/><br>
			            
			<form class="" action="/kamar/{{$kamar->id}}" method="post">
				<strong>No kamar</strong><br/>
					<input type="text" name="no_kamar" value="{{$kamar->no_kamar}}" placeholder="No Kamar" class="form-control"><br/>
					{{ ($errors->has('no kamar')) ? $errors->first('no kamar'):''}}<br/>
				<strong>Nama Kamar</strong><br/>
					<input type="text" name="nama_kamar" value="{{$kamar->nama_kamar}}" placeholder="Nama kamar" class="form-control"><br/>
					{{ ($errors->has('nama kamar')) ? $errors->first('nama kamar'):''}}<br/>
				<strong>Type Kamar</strong><br/>
					<input type="text" name="type_id" value="{{$kamar->type_id}}" placeholder="Type kamar" class="form-control"><br/>
					{{ ($errors->has('type kamar')) ? $errors->first('type kamar'):''}}<br/>
				<strong>Harga Kamar</strong><br/>
					<input type="text" name="harga_kamar" value="{{$kamar->harga_kamar}}" placeholder="Harga Kamar" class="form-control"><br/>
					{{ ($errors->has('harga kamar')) ? $errors->first('harga kamar'):''}}<br/>
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