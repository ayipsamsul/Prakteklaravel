<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> CRUD DATA DOSEN</h1>
  <p> <a href="{{route('dosen.create')}}"class="btn btn-primary">+Add Data</a></p>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Email</th>
            <th>action</th>
            <th>Create_at</th>
            <th>Update_at</th>
        </tr>
        @php $no=0; @endphp
        @foreach($data as $dosen)
        @php $no++; @endphp
        <tr>
            <td>{{ $dosen->id}}</td>
            <td>{{ $dosen->nip }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->telp }}</td>
            <td>{{ $dosen->email }}</td>
            <td><a href="{{route('dosen.edit',$dosen['id'])}}" class="btn btn-success">EDIT</a>
                <a href="{{route('dosen.hapus',$dosen['id'])}}" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data {{$dosen['nama']}}?')" class="btn btn-danger">DELETE</a>
            
        </td>
            <td>{{ $dosen->create_at }}</td>
            <td>{{ $dosen->update_at }}</td>
            
        </tr>
        @endforeach
</table>
</body>
</html>