@extends('layouts')

@section('contents')

<html>
<head>
<title>Form Sederhana</title>
</head>
<body>
<h2>Form tambah data</h2>
<form action="{{url('/update')}}" method="post">
 {{ csrf_field() }}
<table>
 <tr>
 <td>Nama</td>
 <td>:</td>
 <td><input type='text' name='nama'></td>
 </tr>
 <tr>
 <td>Nim</td>
 <td>:</td>
 <td><input type='text' name='nim'></td>
 </tr>
 <tr>
 <td><input type='submit' value='KIRIM'></td>
 </tr>
</table>
</form>
</body>
</html>
@endsection