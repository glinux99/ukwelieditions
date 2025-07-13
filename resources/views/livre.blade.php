@extends('layout.app_site')
@section('contenu')
   <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nos Livres</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Livre</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Books Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Notre Catalogue</h4>
                    <h1 class="display-4 mb-4">Découvrez nos dernières publications</h1>
                    <p class="mb-0">Plongez dans des univers fascinants, explorez des idées novatrices et laissez-vous transporter par la magie des mots. Chaque livre est une porte ouverte sur une nouvelle aventure.</p>
                </div>
                <div class="row g-4">
                    <!-- Book Item 1 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid w-100" style="height: 400px; object-fit: cover;" alt="Couverture du livre">
                            </div>
                            <div class="blog-heading ms-4">
                                <a href="#" class="h4 mb-0 p-4">Les Échos de la Forêt</a>
                            </div>
                            <div class="blog-content bg-light p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 small"><i class="fa fa-user me-2"></i> Jean Dupont</p>
                                    <p class="mb-0 small"><i class="fa fa-tag me-2"></i> Roman Fantastique</p>
                                </div>
                                <p class="mb-4">Une brève description captivante du livre qui donne envie au lecteur d'en savoir plus sur son contenu et son histoire.</p>
                                <a class="btn btn-primary py-2 px-4" href="#">Voir les détails</a>
                            </div>
                        </div>
                    </div>
                    <!-- Book Item 2 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/header-1.jpg') }}" class="img-fluid w-100" style="height: 400px; object-fit: cover;" alt="Couverture du livre">
                            </div>
                            <div class="blog-heading ms-4">
                                <a href="#" class="h4 mb-0 p-4">Le Secret de l'Horloger</a>
                            </div>
                            <div class="blog-content bg-light p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 small"><i class="fa fa-user me-2"></i> Marie Curie</p>
                                    <p class="mb-0 small"><i class="fa fa-tag me-2"></i> Policier</p>
                                </div>
                                <p class="mb-4">Une brève description captivante du livre qui donne envie au lecteur d'en savoir plus sur son contenu et son histoire.</p>
                                <a class="btn btn-primary py-2 px-4" href="#">Voir les détails</a>
                            </div>
                        </div>
                    </div>
                    <!-- Book Item 3 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('assets/img/header-2.jpg') }}" class="img-fluid w-100" style="height: 400px; object-fit: cover;" alt="Couverture du livre">
                            </div>
                            <div class="blog-heading ms-4">
                                <a href="#" class="h4 mb-0 p-4">Voyage au Cœur de Soi</a>
                            </div>
                            <div class="blog-content bg-light p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 small"><i class="fa fa-user me-2"></i> Alain Martin</p>
                                    <p class="mb-0 small"><i class="fa fa-tag me-2"></i> Développement Personnel</p>
                                </div>
                                <p class="mb-4">Une brève description captivante du livre qui donne envie au lecteur d'en savoir plus sur son contenu et son histoire.</p>
                                <a class="btn btn-primary py-2 px-4" href="#">Voir les détails</a>
                            </div>
                        </div>
                    </div>
                    <!-- Répétez les blocs ci-dessus pour plus de livres -->
                </div>

                <!-- Pagination Start -->
                <div class="d-flex justify-content-center mt-5 wow fadeInUp" data-wow-delay="0.2s">
                    <nav aria-label="Page navigation">
                      <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                      </ul>
                    </nav>
                </div>
                <!-- Pagination End -->
            </div>
         </div>
        <!-- Books End -->
@endsection
