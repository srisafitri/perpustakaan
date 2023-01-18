@extends('layout.app')

@section('title', 'Daftar Siswa')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <a href="{{url('/student/create')}}" class="btn btn-md btn-primary my-2">Tambah Data Baru</a>
</div>
<div>

<div class="row">
    <div class="card p-4">
        <div class="card-header">
            <i class=" fas fa-table me-1"></i>
            Data Siswa
</div>
<div class="card-body">
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>nis</th>
                <th>nama</th>
                <th>alamat</th>
                <th>kelas</th>
                <th>foto</th>
                <th>jenis_kelamin></th>
                <th>Aksi</th>
</tr>
</thead>
<tfoot>
    <tr>
        <th>nis</th>
        <th>nama</th>
        <th>alamat</th>
        <th>kelas</th>
        <th>foto</th>
        <th>jenis_kelamin</th>
        <th>Aksi</th>
</tr>
</tfoot>
<tbody>
    @foreach($student as $student)
    <tr>
        <td>{{$student->nis}}</td>
        <td>{{$student->nama}}</td>
        <td>{{$student->alamat}}</td>
        <td>{{$student->kelas}}</td>
        <td>{{$student->foto}}</td>
        <td>{{$student->jenis_kelamin}}</td>

        <td>
            <a href="#" class="btn btn-warning btn-md text-white">Edit</a>
            <a href="#" class="btn btn-danger btn-md">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection