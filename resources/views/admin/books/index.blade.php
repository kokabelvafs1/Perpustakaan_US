@extends('layouts.app')
@section('title', 'My | Data Books')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Book</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-15">
                        <div class="col-auto">
                            <form action="{{route('books.index')}}" method="GET">
                            <input type="search" placeholder="search" id="inputsearch" name="search"class="form-control" aria-describedby="passwordHelpInline">
                            </form>
                        </div> 
                            <div class="col-mb-3 ml-3 mt-3">
                                <div class="row ml-3">
                                <a href="{{ route('books.create')}}" class="btn btn-primary mb-3">Tambah +  </a>
                                <div class="ml-3">
                                <a href="/exportpdf" class="btn btn-info mb-3">Export PDF</a>
                                </div>
                                <div class="ml-3">
                                <a href="/exportexcel" class="btn btn-success mb-3">Export Excel</a>
                                </div>     
                            </div>     
                            </div>                       
                            </form>
                            
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-60">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Pengarang</th>
                                                <th>Tahun Terbit</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($books as $index => $book)
                                            <tr>
                                                <td>{{ $index + 1}}</td>
                                                <td>
                                                        <img src="{{ asset('storage/'.$book->gambar)}}" alt="" style="width: 150px;">
                                                </td>
                                                <td>{{ $book->judul}}</td>
                                                <td>{{ $book->deskripsi}}</td>
                                                <td>{{ $book->pengarang}}</td>
                                                <td>{{ $book->tahun_terbit}}</td>
                                                <td>
                                                    <a href="{{ route('books.edit', $book->id)}}"><i class="fas fa-edit"></i></a>
                                                    |
                                                    <a href="{{ route('books.destroy', $book->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    {{$books->links() }}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection