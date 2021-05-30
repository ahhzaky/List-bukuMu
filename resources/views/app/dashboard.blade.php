@extends('layout.master')

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
                          <ul>
                            <li class="fw-semi-bold text-black">Copies Sold: 150 million</li>
                          </ul>
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

      <footer class="py-0">
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/footer-bg.png);background-position:center;background-size:cover;">
        </div><!--/.bg-holder-->
        <div class="container">
          <div class="row justify-content-start pb-5 pt-8">
            <div class="col-12 col-lg-auto mb-5 mb-lg-0">
              <a class="d-flex align-items-center fw-semi-bold fs-3" href="#">
                <img class="me-3" src="assets/img/gallery/logo.png" alt="" />
                <div class="text-primary font-base">List BukuMu</div>
              </a>
              <a href="" class="pt-1">
                <div class="fst-normal">Ayo bergabung bersama kami</div>
              </a>
            </div>
          </div>
          <div class="row flex-center">
            <div class="col-auto mb-2">
              <p class="mb-0 fs--1 my-2 text-center">&copy; This template is made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#723182" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a href="https://themewagon.com/" target="_blank">ThemeWagon </a>
              </p>
            </div>
            <div class="col-auto my-4">
              <ul class="list-unstyled list-inline mb-0">
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-youtube" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-linkedin" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="#!">
                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

@endsection

