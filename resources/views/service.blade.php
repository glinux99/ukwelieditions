@extends('layout.app_site')
@section('contenu')
   <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nos Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Services</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Nos Services</h4>
                    </div>
                    <h1 class="display-5 mb-4">Explorez Nos Services d'Édition Professionnels</h1>
                    <p class="mb-0">Chez Ukweli Editions, nous offrons une gamme complète de services pour accompagner les auteurs à chaque étape de leur parcours, de la première ébauche à la publication finale.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img">
                                <img src="{{ asset('assets/img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Édition et Relecture</h5>
                                    <p class="mb-4">Nos éditeurs expérimentés affinent votre manuscrit, en corrigeant les erreurs grammaticales, en améliorant la clarté et en renforçant la structure narrative pour un résultat impeccable.</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img">
                                <img src="{{ asset('assets/img/service-2.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Conception de Couverture</h5>
                                    <p class="mb-4">Nous créons des couvertures de livres attrayantes et professionnelles qui captent l'attention des lecteurs et reflètent l'essence de votre histoire.</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                           <div class="service-img">
                                <img src="{{ asset('assets/img/service-3.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Mise en Page Professionnelle</h5>
                                    <p class="mb-4">Nous assurons une mise en page soignée et lisible pour les formats imprimés et numériques, garantissant une expérience de lecture agréable pour votre public.</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img">
                                <img src="{{ asset('assets/img/service-4.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Publication et Distribution</h5>
                                    <p class="mb-4">Nous vous aidons à publier votre livre sur les principales plateformes en ligne (Amazon, Kobo, etc.) et à le rendre accessible à un large public mondial.</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img">
                                <img src="{{ asset('assets/img/service-5.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Marketing et Promotion</h5>
                                    <p class="mb-4">Développez votre audience grâce à nos stratégies de marketing personnalisées, incluant la promotion sur les réseaux sociaux, les communiqués de presse et plus encore.</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                           <div class="service-img">
                                <img src="{{ asset('assets/img/service-6.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Conseils aux Auteurs</h5>
                                    <p class="mb-4">Bénéficiez de l'expertise de nos conseillers pour naviguer dans le monde de l'édition, développer votre marque d'auteur et atteindre vos objectifs d'écriture.</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
@endsection
