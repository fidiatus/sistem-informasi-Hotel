@extends('layouts.apps')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h3> Tabel Data Type kamar</h3>
          <div class="clearfix"></div>
      </div>
          <div class="panel-body">
            <div class="x_content">
              <a class="btn btn-success" href="{{ route('type.create') }}"> Tambah Data Type Kamar</a>
              {{ Session:: get('message') }}
            </div>
            <br/>
          <table class="table table-bordered">
            <thead>
              <tr> 
                <th> ID </th>
                <th> Type Kamar </th> 
                <th> Keterangan </th>
                <th> Aksi </th> 
              </tr>
          </thead>
          <tbody>
          @foreach($types as $type)
              <tr>
                <td>{{$type->id}} </td>
                <td>{{$type->type_kamar}}</a></td>
                <td>{{$type->keterangan}}</td>
                <td> 
                  <a class="btn btn-info" href="/type/{{$type->id}}">Show</a>
                  <a class="btn btn-primary" href="/type/{{$type->id}}/edit">Edit</a>
                  {!! Form::open(['method' => 'DELETE','route' => ['type.destroy', $type->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                  {!! Form::close() !!}
                </td> 
              </tr> 
            @endforeach
          </tbody>
          </table>
          {!! $types->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>         
            
@endsection