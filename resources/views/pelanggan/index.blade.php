@extends('layouts.apps')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h3>Tabel Data Pelanggan</h3>
          <div class="clearfix"></div>
      </div>
          <div class="panel-body">
            <div class="x_content">
              <a class="btn btn-success" href="{{ route('pelanggan.create') }}"> Tambah Data Pelanggan</a>
              {{ Session:: get('message') }}
            </div>
            <br/>
          <table class="table table-bordered">
            <thead>
              <tr> 
                <th> ID </th>
                <th> ID Pelanggan </th> 
                <th> Nama Pelanggan </th>
                <th> Email</th>
                <th> No Telp </th>
                <th> Alamat </th>
                <th> Aksi </th> 
              </tr>
          </thead>
          <tbody>
          @foreach($pelanggans as $pelanggan)
              <tr>
                <td>{{$pelanggan->id}} </td>
                <td>{{$pelanggan->id_pelanggan}}</a></td>
                <td>{{$pelanggan->nama}}</td>
                <td>{{$pelanggan->email}}</td>
                <td>{{$pelanggan->no_telp}}</td>
                <td>{{$pelanggan->alamat}}</td>
                <td> 
                  <a class="btn btn-info" href="/pelanggan/{{$pelanggan->id}}">Show</a>
                  <a class="btn btn-primary" href="/pelanggan/{{$pelanggan->id}}/edit">Edit</a>
                  {!! Form::open(['method' => 'DELETE','route' => ['pelanggan.destroy', $pelanggan->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                  {!! Form::close() !!}
                </td> 
              </tr> 
            @endforeach
          </tbody>
          </table>
          {!! $pelanggans->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>         
            
@endsection