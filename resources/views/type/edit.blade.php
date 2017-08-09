@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h3> Edit Type kamar</h3>
          <div class="clearfix"></div>
      </div>
            <div class="x_content">
            <a class="btn btn-primary" href="{{ route('type.index') }}"> Back</a><br/><br>
			<form class="" action="/type/{{$type->id}}" method="post">
				<strong>Type Kamar</strong><br/>
					<input type="text" name="type_kamar" class="form-control" value="{{$type->type_kamar}}" placeholder="Type Kamar"><br/>
					{{ ($errors->has('Type Kamar')) ? $errors->first('Type Kamar'):''}}<br/>
				<strong>Keterangan</strong><br/>
					<input type="text" name="keterangan" class="form-control" value="{{$type->keterangan}}" placeholder="Keterangan"><br/>
					{{ ($errors->has('Keterangan')) ? $errors->first('Keterangan'):''}}<br/>
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