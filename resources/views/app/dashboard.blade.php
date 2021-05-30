@extends('layout.master')

@section('hover-nav-home', "fw-medium active")

@section('title', 'Dashoboard')



@section('container')
<section class="py-0" id="home">
    <div class="bg-holder d-none d-md-block" style="background-image:url(assets/img/illustrations/hero-section.png);background-position:right bottom;background-size:contain;">
    </div>
    <!--/.bg-holder-->

    <div class="bg-holder d-block d-md-none" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
      <div class="row align-items-center min-vh-md-75">
        <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
          <h1 class="mt-6 mb-sm-4 display-4 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-7">Mulai membaca, <br class="d-block d-lg-none d-xl-block" />dan bagikan apa yang kamu dapat.</h1>
          <p class="mb-4 fs-1">Bagikan pendapatmu dan berikan bintang seberapa menarik buku yang kamu baca. </p>

        </div>
      </div>
    </div>
  </section>

      <!-- <section> begin ============================-->
        <section>

            <div class="container">
              <div class="row justify-content-center">
                <div class="col-auto mb-5 mb-md-7">
                  <h1 class="fw-semi-bold text-warning">Untuk <span class="text-1100">apa website ini</span></h1>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                  <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="assets/img/gallery/librarian.png" width="100" alt="..." />
                    <h3 class="h5 mb-4 font-base">Membuat list</h3>
                    <p class="lh-lg">Kamu bisa membuat list buku yang telah kamu baca</p>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                  <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="assets/img/gallery/societies.png" width="100" alt="..." />
                    <h3 class="h5 mb-4 font-base">Menambahkan commentar</h3>
                    <p class="lh-lg">Kamu bisa juga menambahkan komentar</p>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
                  <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="assets/img/gallery/authors.png" width="100" alt="..." />
                    <h3 class="h5 mb-4 font-base">Penulis</h3>
                    <p class="lh-lg">Kamu juga bisa membagikan tulisan mu ke semua orang</p>
                  </div>
                </div>
              </div>
            </div>

        </section>
        <!-- end of .container-->

        {{-- Section info-project --}}

      <section id="libraries">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/libraries-bg.png);background-position:left bottom;background-size:contain;">
        </div>
        <div class="container">
          <div class="row g-xl-0 align-items-center">
            <div class="col-md-5 col-lg-7 text-xl-center"><img class="img-fluid mb-5 mb-md-0" src="assets/img/illustrations/our-libraries.png" width="620" alt="" /></div>
            <div class="col-md-7 col-lg-4 text-center text-md-start offset-lg-1 offset-xxl-0">
              <h1 class="fw-semi-bold text-warning">List <span class="text-1100">Buku mu</span></h1>
              <p class="pt-3 lh-lg">Merupakan project open-source yang dibuat untuk memudahkan para pembaca yang ingin menglist buku yang telah dibaca.</p>
              <div class="py-3">
                <button class="btn btn-lg btn-primary rounded-pill font-base" type="submit">List Sekarang </button>
              </div>
            </div>
          </div>
        </div>
      </section>
        {{-- end -Section info-project --}}

        <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-8" id="books">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center mb-7">
              <h1 class="fw-semi-bold text-warning">Buku<span class="text-1100"> Favorit yang dibaca</span></h1>
            </div>
            <div class="col-lg-9">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item mb-5 border border-x-0 border-bottom-0 border-200">
                  <div class="accordion-header" id="heading1">
                    <div class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      <div class="row w-100 justify-content-between">
                        <div class="col-sm-6 font-base"><span class="mb-0 fw-bold text-start fs-1 text-1200">The Lord of the Rings</span>
                          <p class="my-2">J.R.R Tolkien</p>
                        </div>
                        <div class="col-8 col-sm-4">
                          <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="accordion-collapse collapse shadow-lg show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="row justify-content-center-center">
                        <div class="col-12 col-sm-2"><img class="img-fluid d-block mx-auto mx-sm-0" src="assets/img/gallery/lord-rings.png" width="130" alt="..." /></div>
                        <div class="col-12 col-sm-9 mt-4 mt-sm-0 d-sm-block d-flex flex-column">
                          <p class="fw-semi-bold text-black fs-2">Review</p>
                          <p>The Lord of the Rings is an epic high-fantasy novel written by English author J. R. R. Tolkien. The story began as a sequel to Tolkiens 1937 fantasy novel The Hobbit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>


            </div>

            <div class="col-lg-12 d-flex justify-content-center">
              <button class="btn btn-lg btn-primary rounded-pill font-base" type="submit">Find More </button>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



@endsection

