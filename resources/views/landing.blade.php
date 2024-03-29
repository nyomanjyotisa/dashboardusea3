<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>U-SEA</title>
        <meta name="description" content="An Eye to the Sea." /> 

        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">

        <!--vendors styles-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap CSS / Color Scheme -->
        <link rel="stylesheet" href="{{ URL::asset('landing/css/cyan.css') }}" id="theme-color">
    </head>
    <body >

        <!--navigation-->
        <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top sticky-navigation">
            <a class="navbar-brand mx-auto" href="index.html">
                U-SEA
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" 
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span data-feather="grid"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#process">Cara Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/dashboard/biota/nelayan">Akses Nelayan</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <p class="mb-0 mx-3"><a class="page-scroll font-weight-bold" href="#contact">Hubungi Kami</a></p>
                </form>
            </div>
        </nav>

        <!--hero header-->
        <section class="pt-7 pt-md-8" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto my-auto text-center">
                        <h1 style="font-family:Helvetica;">Kenali <b style="color:#77BFCF">U-Sea,</b> Kenali Lautan.</h1>
                        <p class="lead mt-4 mb-5">
                            Cari tahu tentang biota laut dan kondisi perairan, ajukan laporan temuan.
                            Lakukan semua bersama <b>U-Sea.</b> 
                        </p>
                        <p><img class="img-fluid" src="./landing/img/fish-hero-alt.png" alt="Mockup" /></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- about section -->
        <section class="pb-7" id="about">
            <div class="container">
                <hr class="my-6"/>
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <h4 class="dot-circle font-weight-normal">Kami bekerja sama dengan startup <b>U-Fish</b>, membawa
                            lautan dan isinya kepada kamu.</h4>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6 order-2 order-md-1 my-md-auto">
                        <h3>Kami U-Fish, Ini Adalah U-Sea.</h3>
                        <p class="text-muted lead">
                            We are a team of marine students, bridging the gap between fishermen and the sea by providing <b>an eye to the sea.</b>
                        </p>
                        <a href="#" class="btn btn-primary" style="background-color: #77BFCF; border: #77BFCF; color: white;">Kenali Lebih Lanjut</a>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <img src="./landing/img/who-are-we.png" class="img-fluid d-block mx-auto" alt="Google Design"/>
                    </div>
                    <div class="col-md-6 order-3 mx-auto border-top border-bottom mt-5 mt-md-0 py-4">
                        <div class="review text-center">
                            <p class="quote">Adanya sistem informasi ini sungguh membantu saya mengenali biota laut. Adanya reportase kondisi perairan juga membantu saya memutuskan mau berlayar atau tidak. Overall, 10/10</p>
                            <div class="mt-4 d-flex flex-row align-items-center justify-content-center">
                                <img src="./landing/img/client-4.png" class="img-review rounded-circle mr-2" alt="Client 1"/>
                                <span class="text-muted">Putu Elliora Yariana, Nelayan Lokal</span>
                            </div>
                        </div>
                    </div>
                </div>

        </section>

        <!--services section-->
        <section class="bg-light py-7" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <h2 class="dot-circle">Fitur yang kami sediakan</h2>
                        <p class="text-muted lead">Team kami menyediakan wawasan terkait kebutuhan akan segala hal berbau kelautan dan perikanan.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-10 mx-auto">
                        <div class="row card-services">
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                                <span data-feather="book-open" width="30" height="30"></span>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Ensiklopedia Biota</h5>
                                        Berkenalan dengan beragam biota laut yang ada di perairan. Ensiklopedia kami menyediakan wawasan untuk kamu jelajahi. Cari ikan favoritmu!
                                        <p></p>
                                        <div><a href="/dashboard/biota/nelayan" class="btn btn-primary" style="background-color: #77BFCF; border: #77BFCF; color: white;">Lihat Ensiklopedia</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                                <span data-feather="eye" width="30" height="30"></span>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Hasil Tracker</h5>
                                        Setiap hari, kapal kami pergi ke titik tertentu untuk melacak biota yang ada di sekitarnya. Ingin cari ikan di lokasi tertentu? Coba cek hasil tracker kami.
                                        <p></p>
                                        <div><a href="/dashboard/lihat-report-biota" class="btn btn-primary" style="background-color: #77BFCF; border: #77BFCF; color: white;">Lihat Hasil Tracker</a></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                                <span data-feather="cloud" width="30" height="30"></span>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Kondisi Perairan</h5>
                                        Ragu mau berlayar atau tidak? Kapal kami sudah lebih dulu berada di lokasi. Lihatlah kondisi perairan, cari waktu yang optimal untuk berlayar.
                                        <p></p>
                                        <div><a href="/dashboard/lihat-kondisi-perairan" class="btn btn-primary" style="background-color: #77BFCF; border: #77BFCF; color: white;">Lihat Kondisi Perairan</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                                <span data-feather="edit" width="30" height="30"></span>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Laporan Temuan</h5>
                                        Ada paus terdampar? Ikan hiu berkeliaran? Bayi penyu menetas? Kabari kami akan penemuan mu. Mari sama sama ciptakan laut yang aman dan nyaman.
                                        <p></p>
                                        <div><a href="/dashboard/laporan-nelayan" class="btn btn-primary" style="background-color: #77BFCF; border: #77BFCF; color: white;">Buat Laporan Temuan</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--call to action-->
        <section class="bg-hero py-8" style="background-image: url(img/Spencer-Yachts.png)">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h2 class="text-white">Lanjutkan eksplorasi anda terhadap laut dan isinya.</h2>
                        <p class="lead text-white my-4">Bersama U-Sea, an Eye to the Sea.</p>
                        <!-- <button class="btn btn-primary">Request a free quote</button> -->
                    </div>
                </div>
            </div>
        </section>

        <!--process-->
        <section class="py-7" id="process">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h2>Cara kerja kami</h2>
                        <p class="lead text-muted">
                            Penasaran cara kami mendapat data untuk ditunjukkan? Begini caranya.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-7 mx-auto timeline">
                        <div class="media pb-5">
                            <div class="icon-box mt-1">
                                <div class="icon-box-inner small-xs text-primary">
                                    <span data-feather="disc"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Track</h5>
                                <p class="text-muted">Kapal kami pergi ke titik tertentu dan merekam perairan dengan kamera bawah laut.</p>
                            </div>
                        </div>
                        <div class="media pb-5">
                            <div class="icon-box mt-1">
                                <div class="icon-box-inner small-xs text-primary">
                                    <span data-feather="copy"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Analisa</h5>
                                <p class="text-muted">Ketika kapal kembali, hasil video akan dianalisa oleh staff U-Fish.</p>
                            </div>
                        </div>
                        <div class="media pb-5">
                            <div class="icon-box mt-1">
                                <div class="icon-box-inner small-xs text-primary">
                                    <span data-feather="box"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Catat</h5>
                                <p class="text-muted">Data hasil analisa akan kami catat dan publikasi pada sistem informasi.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="icon-box mt-1">
                                <div class="icon-box-inner small-xs text-primary">
                                    <span data-feather="server"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                <h5>Nikmati</h5>
                                <p class="text-muted">Selamat menjelajahi lautan beserta isinya!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-7">
                    <div class="col-md-6 mx-auto text-center">
                        <h3 class="dot-circle dot-lg">Ada pertanyaan apa? Silahkan.</h3>
                        <p class="lead text-muted mb-4">Jangan biarkan rasa penasaranmu berandai-andai. Segera tanya langsung pada team kami untuk mendapatkan jawaban yang paling optimal.
                        </p>
                        <a class="btn btn-primary page-scroll" href="#contact">Mari Bertanya!</a>
                    </div>
                </div>
            </div>
        </section>

        <!--blog section-->
        <section class="py-7 bg-light" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2 class="dot-circle">Blog</h2>
                        <p class="text-muted lead">Perkaya wawasanmu dengan blog kami. Tips baru, berita baru, gunakan waktu mu untuk belajar banyak hal baru.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 mb-5">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top" src="./landing/img/parallex.jpg" alt="Blog 1">
                            </a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">Cara halal hidup bersama paus</h5>
                                    <p class="card-text">Nam liber tempor cum soluta nobis eleifend option congue nihil imper, consectetur adipiscing elit.</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top" src="./landing/img/parallex2.jpg" alt="Blog 2">
                            </a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">100 Ikan terhebat di Maluku Utara</h5>
                                    <p class="card-text">Nam liber tempor cum soluta nobis eleifend option congue nihil imper, consectetur adipiscing elit.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mx-auto text-center mt-5">
                        <a href="#" class="btn btn-primary">Baca lainnya</a>
                    </div>
                </div>
            </div>
        </section>

        <!--contact section-->
        <section class="py-7" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <h2>Buat Laporan Temuan</h2>
                        <div class="divider bg-primary mx-auto"></div>
                        <p class="text-muted lead">
                            Menemukan sesuatu yang layak dilaporkan? Hubungi kami segera!
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text"  class="form-control" placeholder="Lokasi">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel"  class="form-control" placeholder="Tanggal">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="url"  class="form-control" placeholder="Nomor Telepon">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea rows="5"  class="form-control" placeholder="Isi laporan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary">Kirim Laporan Temuan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--footer / contact-->
        <footer class="py-6 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Privacy</a></li>
                            <li class="list-inline-item"><a href="#">Terms</a></li>
                            <li class="list-inline-item"><a href="#">Affiliates</a></li>
                            <li class="list-inline-item"><a href="#">Support</a></li>
                            <li class="list-inline-item"><a href="#">Blog</a></li>
                        </ul>
                        <p class="text-muted small text-uppercase mt-4">
                            Ikuti Sosial Media Kami
                        </p>
                        <ul class="list-inline social social-dark social-sm">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://instagram.com/ufish.go?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-muted text-center small-xl">
                        &copy; 2023 U-Sea - All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>

        <!--scroll to top-->
        <div class="scroll-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <!-- theme switcher (FOR DEMO ONLY - REMOVE FROM PRODUCTION)
        <div class="switcher-wrap">
            <div class="switcher-trigger">
                <span class="fa fa-gear"></span>
            </div>
            <div class="color-switcher">
                <h6>Color Switcher</h6>
                <ul class="mt-3 clearfix">
                    <li class="bg-green active" data-color="default" title="Default Green"></li>
                    <li class="bg-blue" data-color="blue" title="Blue"></li>
                    <li class="bg-red" data-color="red" title="Red"></li>
                    <li class="bg-indigo" data-color="indigo" title="Indigo"></li>
                    <li class="bg-orange" data-color="orange" title="Orange"></li>
                    <li class="bg-black" data-color="black" title="Black"></li>
                    <li class="bg-teal" data-color="teal" title="Teal"></li>
                    <li class="bg-cyan" data-color="cyan" title="Cyan"></li>
                    <li class="bg-purple" data-color="purple" title="Purple"></li>
                    <li class="bg-pink" data-color="pink" title="Pink"></li>
                </ul>
                <p>These are just demo colors. You can <b>easily</b> create your own color scheme.</p>
            </div>
        </div> -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.5.0/feather.min.js"></script>
        <script src="{{ URL::asset('js/scripts.js') }}"></script>
    </body>
</html>