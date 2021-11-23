<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row justtify-content-center">
    <div class="col-md-8">
    <div class="card">
    <div class="card-header"> EDIT DATA DOSEN </div>
<div class="card-body" >
<form method="POST" action="{{route('dosen.update',$data['id'])}}">
    @csrf 
    @method('PUT')

<div class="form-group row">  
<label class="col-md-4 text-md-right">Nip </label>
<div class="col-md-6">
    <input type="text" name="nip"  value="{{$data['nip']}}" class="form-control"> 
</div>
</div>

<div class="form-group row">  
<label class="col-md-4 text-md-right">Nama </label>
<div class="col-md-6">
    <input type="text" name="nama"  value="{{$data['nama']}}"  class="form-control"> 
</div>
</div>

<div class="form-group row">  
<label class="col-md-4 text-md-right">Telp </label>
<div class="col-md-6">
    <input type="text" name="telp"  value="{{$data['telp']}}" class="form-control"> 
</div>
</div>

<div class="form-group row">  
<label class="col-md-4 text-md-right">Email</label>
<div class="col-md-6">
    <input type="text" name="email" value="{{$data['email']}}"  class="form-control"> 
</div>
</div>

<div class="form-group row">  
<label class="col-md-4 text-md-right"></label>
<div class="col-md-6">
    <button class="btn btn-primary" type="submit" > EDIT </button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

    
</body>
</html>