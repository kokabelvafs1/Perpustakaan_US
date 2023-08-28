@extends('layouts.main')
@section('container')
  <!-- Section-->
  <div class="col-md-10">
      <div class="overview-wrap">
        <center><h2 class="title-1">Detail</h2></center>
      </div>
  </div>

  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img src="{{ asset('storage/'.$books->gambar) }}" alt="gambarbuku" >
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div>
                <!-- Product name-->
                <h3 class="fw-bolder text-primary">{{$books->judul}}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card">
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <div
                  class="d-flex justify-content-between align-items-center"
                >
                <h5 class="fw-bolder" style="text-align: center">{{ $books->judul }}</h5>

                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Deskripsi</span>
                    <span style="font-weight: 600">{{$books->deskripsi}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Pengarang</span>
                    <span style="font-weight: 600">{{$books->pengarang}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Tahun Terbit</span>
                    <span style="font-weight: 600">{{$books->tahun_terbit}}</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection