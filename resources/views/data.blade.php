@extends('layouts')

@section('contents')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <table class="table table-bordered table-striped table-hover">
            <h1>Data Mahasiswa</h1>
            <a href="{{url('form')}}" class="btn btn-info" role="button">ADD</a>
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Operasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datamahasiswa as $mhs)
                <tr>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>
                        <a href="{{url('editForm')}}/{{$mhs->id}}" class="btn btn-warning" role="button">Edit</a>
                        <a href="{{url('deleteForm')}}/{{$mhs->id}}" class="btn btn-danger" role="button">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection