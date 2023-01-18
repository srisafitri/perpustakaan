@extends('layouts.app')

@section('title', 'Daftar Operator')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <a href="{{url('/operators/create')}}" class="btn btn-md btn-primary my-2">Tambah Data Baru</a>
        </div>
        <div>

            <div class="row">
                <div class="card p-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Operator
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>nama</th>
                                    <th>jabatan</th>
                                    <th>jenis_kelamin</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>nama</th>
                                    <th>jabatan</th>
                                    <th>jenis_kelamin</th>
                                    <th>Aksi</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($operators as $operator)
                                <tr>
                                    <td>{{$operator->nama}}</td>
                                    <td>{{$operator->jabatan}}</td>
                                    <td>{{$operator->jenis_kelamin}}</td>
                                    
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