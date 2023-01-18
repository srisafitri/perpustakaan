@extends('layouts.app')

@section('title','input siswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Input siswa</h2>
</div>
<div class="card-body">
    <form action="#" methode="post" enctype="multipart/form-data">
        @csrf 

        <div class="mb-3">
            <label for="nis" class="form-label">nis</label>
            <input name="nis" id="nis" type="text" class="form-control">
</div>

<div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input name="nama" id="nama" type="text" class="form-control">
</div>

<div class="mb-3">
    <label for="alamat" class="form-label">alamat</label>
    <input name="alamat" id="alamat" type="text" class="form-control">
</div>

<div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input name="foto" id="foto" type="file" class="form-control">
</div>

<div class="mb-3">
    <label for="kelas" class="form-label"></label>
    <select name="kelas" id="kelas" class="form-control">
        <option value="X">x</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
</select>
</div>

<div class="mb-3">
    <label for="jenis_kelamin" class="form-label"></label>
    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
        <option value="laki-laki">laki laki</option>
        <option value="perempuan">perempuan</option>
</select>
<div>

<div class="mb-3">
    <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
</div>
</form>

@endsection

