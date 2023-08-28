@extends('layouts.app')
@section('title', 'My| Create Data Books')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Create</strong> Book
                                    </div>
                                    <div class="card-body card-block">
                                      <form method="post" action="{{route('books.store')}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="inputname" class=" form-control-label">Judul</label>
                                                <input type="text" class="form-control" id="inputname" placeholder="judul" name="judul">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputname" class=" form-control-label">Deskripsi</label>
                                                <input type="text" class="form-control" id="inputname" placeholder="deskripsi" name="deskripsi">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputname" class=" form-control-label">Pengarang</label>
                                                <input type="text" class="form-control" id="inputname" placeholder="pengarang" name="pengarang">   
                                            </div>

                                            <div class="form-group">
                                                <label for="inputname" class=" form-control-label">Tahun Terbit</label>
                                                <input type="date" class="form-control" id="inputname" placeholder="tahun terbit" name="tahun_terbit">                                            </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputfile" class=" forml-label">Masukkan Gambar</label>
                                                <input type="file" class="form-control" accept=".png, .jpeg, .jpg" name="gambar" require id="inputfile">                                           
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-dot-circle-o"></i> Create
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