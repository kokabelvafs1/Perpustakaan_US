@extends('layouts.main')
@section('title', 'My | Book')
@section('container')

<!-- Product-->
    <div class="row d-flex flex-wrap justify-content-center">
        <div class="main-content">
            <div class="section_content section_content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <div class="overview-wrap">
                                <center><h2 class="title-1">Book</h2></center>
                            </div>
                        </div>

                        <div class="row row-cols-md-3 col-sm-10 mb-3 mb-sm-0">
                        @foreach ($books as $book)
                            <div style="align-items-center">
                                <div class="col-auto my-2" style="width:18rem;">
                                    <div class="card mx-2 my-2" style="min-height:28rem;">
                                        <img class="card-img-top" style="max-height:300px;" src="{{ asset('storage/'.$book->gambar) }}"alt="gambarbuku">
                                        
                                            <div class="card-body d-flex flex-column justify-content-between">
                                                <div class="detail-book">
                                                    <h5 class="card-title" style="font: size 8px;rem;font-weight:bold;">
                                                        {{ $book->judul }}</h5>
                                                        <p class = "card-text m-0" > {{ $book->pengarang }}</p>
                                                </div>

                                                    <div class="button-area items-end">
                                                        <button class="btn-sm btn-primary px-3 btn-link"><a href="{{route('detail',  $book->id)}}" 
                                                        style="text-decoration: none; color:white;">Detail Buku</a></button>
                                                    </div>

                                            </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
