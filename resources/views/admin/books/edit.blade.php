@extends('layouts.app')
@section('title', 'My| Edit Data Books')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit</strong> Book
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('books.update', $book->id)}}" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Judul</label>
                                                <input type="text" name="judul" class="form-control" value="{{ $book->judul}}">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Deskripsi</label>
                                                <input type="text" name="deskripsi" class="form-control" value="{{ $book->deskripsi}}">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Pengarang</label>
                                                <input type="text" name="pengarang" class="form-control" value="{{ $book->pengarang}}">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Tahun Terbit</label>
                                                <input type="date" name="tahun_terbit" class="form-control" value="{{ $book->tahun_terbit}}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Masukkan Gambar</label>
                                                <input type="file" name="gambar"  accept=".png, .jpeg, .jpg" class="form-control" >
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Edit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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