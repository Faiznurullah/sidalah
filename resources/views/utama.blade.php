<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sekolah Programmer</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('source') }}/foto/tutwurihandayani.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('utama') }}/css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href=""><b>SMAN 1 PROGRAMMER</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-2">
                            <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                        
                            <li class="mt-1 ml-5"><a  href="/login" type="button" class="btn btn-outline-primary btn-sm">Login User</a></li>
                         
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-light py-5">
                <div class="container px-5">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-xl-7 col-xxl-6">
                            <div class="my-5">
                                <p class="text-primary"><b>Sidalah - Sistem Informasi Data Sekolah</b></p>
                                <h1 class="display-5 fw-bolder mb-2">Sistem Informasi Data Sekolah SMAN 1 PROGRAMMER</h1>
                                <p class="" style="font-family: sans-serif">SI Dalah Atau Aplikasi Sistem Informasi Data Sekolah Adalah Aplikasi Yang Digunakan Untuk Menyimpan Data Informasi-Informasi Sekolah.</p>
                                <div class="d-grid gap-4 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                  
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#about"><b>Get Start</b></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-xxl-6">
                            <img class="img-fluid rounded-3 my-5" src="{{ asset('utama') }}/edukasi.svg" alt="{{ asset('utama') }}/edukasi.svg" width="450px">
                        </div>
                    </div>
                </div>
            </header>


              <!-- About preview section-->
              <section class="py-5 mb-5" id="about">
                <h3 class="text-center"><b>About Website</b></h3>

                <div class="container mt-5">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('utama') }}/pict1.jpg" class="d-block w-100" alt="{{ asset('utama') }}/pict1.jpg">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('utama') }}/pict2.jpg" class="d-block w-100" alt="{{ asset('utama') }}/pict2.jpg">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('utama') }}/pict3.jpg" class="d-block w-100" alt="{{ asset('utama') }}/pict3.jpg">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                </div>

              </section>
            
            
            <!-- FAQ preview section-->
            <section class="py-5 mb-5" id="faq">
                <h3 class="text-center"><b>FAQ Website</b></h3>

                <div class="container mb-5">
                  <section class="content mt-4">
                      <div class="row">
                          <div class="col-md-12 mt-3">
                              <div class="accordion" id="accordionExample">
                                  <div class="accordion" id="accordionExample">
                                      <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingOne">
                                              <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                                  data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Apa itu SI Dalah?
                                              </button>
                                          </h2>
                                          <div id="collapseOne" class="accordion-collapse collapse show"
                                              aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                SI Dalah Atau Aplikasi Sistem Informasi Data Sekolah Adalah Aplikasi Yang Digunakan Untuk Menyimpan Data Informasi-Informasi Sekolah.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingTwo">
                                              <button class="accordion-button collapsed fw-bold" type="button"
                                                  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                                  aria-controls="collapseTwo">
                                                  Fungsi SI Dalah Apa ?
                                              </button>
                                          </h2>
                                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                              data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  Aplikasi Ini Digunakan Untuk Menympan Data Informasi Sekolah.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="accordion-item">
                                          <h2 class="accordion-header" id="headingThree">
                                              <button class="accordion-button collapsed fw-bold" type="button"
                                                  data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                                  aria-controls="collapseThree">
                                                  SI Dalah Dibangun Menggunakan Apa ?
                                              </button>
                                          </h2>
                                          <div id="collapseThree" class="accordion-collapse collapse"
                                              aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  SI Dalah Di Bangun Menggunakan Framework PHP Laravel Versi 8.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

            </section>

        </main>



        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-center flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Faiznurullah 2022</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('utama') }}/js/scripts.js"></script>
    </body>
</html>
