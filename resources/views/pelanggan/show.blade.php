@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h3> Data Pelanggan</h3>
          <div class="clearfix"></div>
      </div>
          <div class="panel-body">
            <div class="x_content">
            <a class="btn btn-primary" href="{{ route('pelanggan.index') }}"> Back</a><br/><br>
            <form>
            <td><strong>ID Pelanggan</strong></td>
            <td> : </td>
            <td>{{ $pelanggan->id_pelanggan }}</td><br>
            <td><strong>Nama</strong></td>
            <td> : </td>
            <td>{{ $pelanggan->nama }}</td><br>
            <td><strong>Email</strong></td>
            <td> : </td>
            <td>{{ $pelanggan->email }}</td><br>
            <td><strong>No Telp</strong></td>
            <td> : </td>
            <td>{{ $pelanggan->no_telp}}</td><br>
            <td><strong>Alamat</strong></td>
            <td> : </td>
            <td>{{ $pelanggan->alamat}}</td><br>
            </form>
            </div>
      </div>
    </div>
  </div>
</div>    
</div>
@endsection