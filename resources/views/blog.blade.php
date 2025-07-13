@extends('layout.app_site')
@section('contenu')
   <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Notre Blog</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Blog</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Notre Blog</h4>
                    </div>
                    <h1 class="display-5 mb-4">Découvrez Nos Derniers Articles et Conseils</h1>
                    <p class="mb-0">Explorez nos articles pour des conseils d'écriture, des actualités sur l'édition, et des inspirations pour votre parcours d'auteur.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-8">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="blog-item rounded">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="blog-content p-4">
                                        <div class="date-icon">
                                            <i class="fa fa-calendar-alt text-white"></i>
                                            <p class="text-white small mb-0">01 Jan, 2025</p>
                                        </div>
                                        <a href="#" class="h4 d-block my-3">Comment écrire un best-seller : Les secrets des auteurs à succès</a>
                                        <p class="mb-4">Découvrez les techniques et les habitudes des auteurs qui ont marqué l'histoire de la littérature.</p>
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="blog-item rounded">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/img/blog-2.jpg') }}" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="blog-content p-4">
                                        <div class="date-icon">
                                            <i class="fa fa-calendar-alt text-white"></i>
                                            <p class="text-white small mb-0">15 Fév, 2025</p>
                                        </div>
                                        <a href="#" class="h4 d-block my-3">Le rôle crucial de la relecture dans le processus d'édition</a>
                                        <p class="mb-4">Pourquoi une relecture professionnelle est indispensable pour la qualité de votre manuscrit.</p>
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="blog-item rounded">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/img/blog-3.jpg') }}" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="blog-content p-4">
                                        <div class="date-icon">
                                            <i class="fa fa-calendar-alt text-white"></i>
                                            <p class="text-white small mb-0">10 Mar, 2025</p>
                                        </div>
                                        <a href="#" class="h4 d-block my-3">Marketing de livre : Stratégies pour atteindre votre public</a>
                                        <p class="mb-4">Des astuces pratiques pour promouvoir votre livre et maximiser sa visibilité.</p>
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="blog-item rounded">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/img/blog-4.jpg') }}" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="blog-content p-4">
                                        <div class="date-icon">
                                            <i class="fa fa-calendar-alt text-white"></i>
                                            <p class="text-white small mb-0">05 Avr, 2025</p>
                                        </div>
                                        <a href="#" class="h4 d-block my-3">L'importance d'une bonne couverture de livre</a>
                                        <p class="mb-4">Comment une couverture attrayante peut faire la différence pour votre livre.</p>
                                        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-sidebar ps-lg-4">
                            <div class="blog-sidebar-item wow fadeInUp" data-wow-delay="0.1s">
                                <h4 class="mb-4">Catégories</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-body py-2 d-block"><i class="fas fa-angle-right me-2"></i> Conseils d'écriture</a></li>
                                    <li><a href="#" class="text-body py-2 d-block"><i class="fas fa-angle-right me-2"></i> Actualités de l'édition</a></li>
                                    <li><a href="#" class="text-body py-2 d-block"><i class="fas fa-angle-right me-2"></i> Marketing de livre</a></li>
                                    <li><a href="#" class="text-body py-2 d-block"><i class="fas fa-angle-right me-2"></i> Inspiration et motivation</a></li>
                                    <li><a href="#" class="text-body py-2 d-block"><i class="fas fa-angle-right me-2"></i> Témoignages d'auteurs</a></li>
                                </ul>
                            </div>
                            <div class="blog-sidebar-item wow fadeInUp" data-wow-delay="0.3s">
                                <h4 class="mb-4">Articles Récents</h4>
                                <!-- You can add recent blog posts here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
@endsection
