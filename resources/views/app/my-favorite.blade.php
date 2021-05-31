@extends('layout.master-input')

@section('hover-nav-list-favorite', "fw-medium active")

@section('title', 'My Favorite')

@section('content-input')
            @if (session('status'))
               <div class="alert alert-success">
                 {{ session('status') }}
                </div>
            @endif
<div class="" style="height: 200px "></div>
<section class="py-8" id="books">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 text-center mb-7">
          <h1 class="fw-semi-bold text-warning" style="font-family: sans-serif">Buku<span class="text-1100"> Favorit yang Kamu baca</span></h1>
        </div>
        <div class="col-lg-9 mt-3 ">
            <a href="/"><button class=" btn btn-secondary"> Kembali</button></a>
        </div>
        {{-- this --}}
        @foreach ($books as $book)
        <div class="col-lg-9 mt-3">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item mb-5 border border-x-0 border-bottom-0 border-200">
              <div class="accordion-header" id="heading1">
                <div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                  <div class="row w-100 justify-content-between">
                    <div class="col-sm-6 font-base"><span class="mb-0 fw-bold text-start fs-1 text-1200">{{$book->judul}}</span>
                      <p class="my-2">{{$book->nama_pengarang}}</p>
                    </div>
                    <div class="col-8 col-sm-4 mt-4">
                        @for ($i = $book->bintang; $book->bintang <= 6; $book->bintang++)
                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                         @endfor
                    </div>


                  </div>
                </div>
              </div>
              <div class="accordion-collapse collapse shadow-lg show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="row justify-content-center-center">
                    <div class="col-12 col-sm-2"><img class="img-fluid d-block mx-auto mx-sm-0" src="/storage/{{$book->image}}" width="130" alt="..." /></div>
                    <div class="col-12 col-sm-9 mt-4 mt-sm-0 d-sm-block d-flex flex-column">
                      <p class="fw-semi-bold text-black fs-2 lg">Review</p>
                      <p>{{$book->deskripsi}}</p>
                    </div>
                </div>
                <div class="container">
                    <form class="">
                        <a href="/books/{{$book->id}}/edit" class="btn btn-info mb-2 mt-2" style="width: 100px">Edit</a>
                    </form>

                    <form action="/books/{{$book->id}}" method="post" >
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" style="width: 100px">Delete</button>
                    </form>
                </div>

                </div>
              </div>
            </div>

          </div>


        </div>
        @endforeach
        {{-- end this --}}


      </div>
    </div>
    <!-- end of .container-->

  </section>

@endsection
