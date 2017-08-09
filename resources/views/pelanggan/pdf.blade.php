<div class="pull-center" align="center"><h2>Data Pelanggan Hotel Sunset</h2></div>
<br>
<table border="1">
    <thead>                
      <tr> 
        <th>ID Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>Email</th>
        <th>No Telp</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($pelanggan as $pelanggan)
    <tr>
        <td>{{ $pelanggan->id_pelanggan }}</td>
        <td>{{ $pelanggan->nama }}</td>
        <td>{{ $pelanggan->email }}</td>
        <td>{{ $pelanggan->no_telp }}</td>
        <td>{{ $pelanggan->alamat }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
<br/><br/>
<div class="pull-left" align="pull-left"> 
    <p>Padang, 08 Agustus 2017</p>
    <br/><br/>
    <p>Fidiatus Sakinah</p>
    <p>NIM.1401092001</p>
</div>
