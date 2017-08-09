@extends('layouts.apps')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
      <div class="x_panel">
      <div class="x_title">
        <h3> Tabel Data Kamar</h3>
          <div class="clearfix"></div>
      </div>
          <div class="panel-body">
            <div class="x_content">
              <a class="btn btn-success" href="{{ route('kamar.create') }}"> Tambah Data Kamar</a>
            {{ Session:: get('message') }}</div>
            <br/>
          <table class="table table-bordered">
            <thead>
              <tr> 
                <th> ID </th>
                <th> No Kamar </th> 
                <th> Nama Kamar </th>
                <th> Type Kamar </th>
                <th> Harga Kamar </th>
                <th> Aksi </th> 
              </tr>
          </thead>
          <tbody>
          @foreach($kamars as $kamar)
              <tr>
                <td>{{$kamar->id}} </td>
                <td>{{$kamar->no_kamar}}</a></td>
                <td>{{$kamar->nama_kamar}}</td>
                <td>{{$kamar->type_id}}</td>
                <td>{{$kamar->harga_kamar}}</td>
                <td> 
                  <a class="btn btn-info" href="/kamar/{{$kamar->id}}">Show</a>
                      <a class="btn btn-primary" href="/kamar/{{$kamar->id}}/edit">Edit</a>
                      {!! Form::open(['method' => 'DELETE','route' => ['kamar.destroy', $kamar->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                      {!! Form::close() !!}
                </td> 
              </tr> 
            @endforeach
          </tbody>
          </table>
          {!! $kamars->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>      
   
            
@endsection