<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Update Data Mahasiswa </title>
</head>
<body>
    <a href="/mahasiswa">< Kembali </a>
    <h1> Form Update Data Mahasiswa </h1>

    <form method="post" action="/mahasiswa/update/{{$mhs->id}}">
        @csrf
    NPM     <input type="text" name="npm" required value="{{$mhs->npm}}"> <br/>
    NAMA    <input type="text" name="nama" required value="{{$mhs->nama}}"> <br/>
    JURUSAN <input type="text" name="jurusan" required value="{{$mhs->jurusan}}"> <br/>

    <button type="submit">UPDATE</button>
    </form>
    
</body>
</html>