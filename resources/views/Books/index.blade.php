@extends('layouts.app')

@section('title', 'Daftar Buku')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <a href="{{url('/books/create')}}" class="btn btn-md btn-primary my-2">Tambah Data Baru</a>
        </div>
        <div>

            <div class="row">
                <div class="card p-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Buku
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>author</th>
                                    <th>cover</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>no</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>author</th>
                                    <th>cover</th>
                                    <th>Aksi</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($books as $book)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->description}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->cover}}</td>
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