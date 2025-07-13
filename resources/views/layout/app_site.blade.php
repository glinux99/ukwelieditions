<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Ukweli Editions - Votre Partenaire d'Écriture</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta name="description" content="Ukweli Editions - Maison d'édition">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{asset('assets/lib/animate/animate.min.css')}}"/>
        <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>
<style>

</style>
    <body>
        <!-- Navbar & Hero Start -->
        <div class="container-fluid header-top">
            <div class="container d-flex align-items-center">
                <div class="d-flex align-items-center h-100">
                    <a href="#" class="navbar-brand" style="height: 125px;">
                        <h1 class="text-primary mb-0"><i class="fas fa-book-open"></i> Ukweli Editions</h1>
                        {{-- <!-- <img src="img/logo.png" alt="Logo"> --> --}}
                    </a>
                </div>
                <div class="w-100 h-100">
                    <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-8 text-center text-lg-center mb-lg-0">
                                <div class="d-flex flex-wrap">
                                    <div class="border-end border-primary pe-3">
                                        <a href="#" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Nous sommes une maison d’édition</a>
                                    </div>
                                    <div class="ps-3">
                                        <a href="mailto:contact@ukwelieditions.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>contact@ukwelieditions.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center text-lg-end">
                                <div class="d-flex justify-content-end">
                                    <div class="d-flex border-end border-primary pe-3">
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                                        <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="#" class="dropdown-toggle text-white" data-bs-toggle="dropdown"><small class="text-body"><i class="fas fa-globe-europe text-primary me-2"></i> Français</small></a>
                                        <div class="dropdown-menu">
                                             <a href="#" class="dropdown-item">French</a>
                                            <a href="#" class="dropdown-item">English</a>
                                            <a href="#" class="dropdown-item">Swahili</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-bar px-0 py-lg-0" style="height: 80px;">
                        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end">
                            <a href="/" class="navbar-brand-2">
                                <h1 class="text-primary mb-0"><i class="fas fa-book-open"></i> Ukweli Editions</h1>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav mx-0 mx-lg-auto bg-white">
                                    <a href="/" class="nav-item nav-link active">Accueil</a>
                                    <a href="/about" class="nav-item nav-link">Apropos</a>
                                    <a href="/services" class="nav-item nav-link">Services</a>
                                    <a href="/books" class="nav-item nav-link">Livres</a>
                                    <a href="/blogs" class="nav-item nav-link">Blog</a>
                                    <a href="/contact" class="nav-item nav-link">Contact</a>
                                    <div class="nav-btn ps-3">
                                        <a href="#" class="btn btn-primary py-2 px-4 ms-0 ms-lg-3"> S'inscrire</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        @yield('contenu')

         @include('layout.footer')

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="https://www.ukwelieditions.com/" class="border-bottom text-white">2025<i class="fas fa-copyright text-light me-2"></i>Ukweli Editions</a>, Tous droits réservés.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                       Designed By <a class="border-bottom text-white" href="#">Linux99</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>


        <!-- Template Javascript -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>

</html>
