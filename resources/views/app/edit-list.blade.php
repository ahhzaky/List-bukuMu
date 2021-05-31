@extends('layout.master-input')

@section('title', 'Buat List')

@section('content-input')
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif
<div class="" style="height: 200px "></div>
<section class="input-list py-10" >
<div class="container" >
<form method="post" action="/books/{{$books->id}}"  enctype="multipart/form-data">
    @method('patch')
    @csrf
    <h3 class="pb-2">Masukan Edit Buku</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="judul"  id="judul" class="form-control" placeholder="Masukan judul Buku" value="{{$books->judul}}" />
            </div>
            <div class="form-group">
                <input type="text" name="nama_pengarang" id="nama_pengarang" class="form-control" placeholder="Masukan nama Pengarang" value="{{$books->nama_pengarang}}" />
            </div>
            <div class="form-group">
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukan Review" value="{{$books->deskripsi}}" />
            </div>
            <div class="form-group">
                <input type="text" name="bintang" id="bintang" class="form-control" placeholder="Masukan Bintang ... 5" value="{{$books->bintang}}" />
            </div>
            <div class="form-group">
                <input type="file" name="image" id="image" class="form-control" value="{{$books->image}}" />
            </div>
            <div class="form-group pt-2 justify-content-between" >
               <div class="row pb-1">
                   <button type="submit" class="btn btn-lg rounded-pill bg-gradient font-base order-0" style="background-color: purple !important; color: white;">Simpan</button>
               </div>
                    <div class="row pb-1">
                        <a href="/" class="btn btn-lg rounded-pill bg-gradient font-base order-0" style="background-color: purple !important; color: white;">Kembali</a>
                    </div>
            </div>
        </div>
    </div>
</form>
</div>
</section>
@endsection
