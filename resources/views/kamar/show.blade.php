@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h3> Data Kamar</h3>
          <div class="clearfix"></div>
      </div>
        <div class="panel-body">
            <div class="x_content">
            <a class="btn btn-primary" href="{{ route('kamar.index') }}"> Back</a><br/><br>
            <form>
            <td><strong>No Kamar</strong></td>
            <td> : </td>
            <td>{{ $kamar->no_kamar }}</td><br>
            <td><strong>Nama Kamar</strong></td>
            <td> : </td>
            <td>{{ $kamar->nama_kamar }}</td><br>
            <td><strong>Type Kamar</strong></td>
            <td> : </td>
            <td>{{ $kamar->type_id }}</td><br>
            <td><strong>Harga Kamar</strong></td>
            <td> : </td>
            <td>{{ $kamar->harga_kamar }}</td><br>
            </form>
            </div>
        </div>
    </div>
  </div>
</div>    
</div>
@endsection