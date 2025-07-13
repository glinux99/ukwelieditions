@extends('layout.app_site')
@section('contenu')
   <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">A propos de nous</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">A propos</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <h4 class="text-primary">À Propos de Nous</h4>
                            <h1 class="display-4 mb-4">Ukweli Editions, Révélateur de Talents</h1>
                            <p>Notre nom, <strong class="text-primary">Ukweli</strong>, signifie "vérité" en swahili. Il est le fondement de notre mission : publier des histoires authentiques, des voix sincères et des œuvres qui ont un impact. Fondée par une passion pour la littérature et la conviction que chaque histoire mérite d'être entendue, Ukweli Editions est plus qu'une maison d'édition ; nous sommes un partenaire pour les auteurs.</p>
                            <p class="mb-4">Nous nous engageons à accompagner nos auteurs à chaque étape du processus de publication, de la première ébauche à la distribution en librairie. Notre équipe dévouée met son expertise au service de la qualité éditoriale, du design et de la promotion pour donner à chaque livre la meilleure chance de rencontrer son public.</p>
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <span class="fas fa-book-reader fa-3x text-primary me-3"></span>
                                        <h4 class="mb-0">Accompagnement Personnalisé</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <span class="fas fa-edit fa-3x text-primary me-3"></span>
                                        <h4 class="mb-0">Excellence Éditoriale</h4>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary py-3 px-5" href="{{ route('contact') }}">Soumettre un Manuscrit</a>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="position-relative h-100">
                            <img src="{{ asset('assets/img/about-1.jpg') }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Équipe éditoriale en réunion">
                            <div class="bg-white">
                                <div class="position-absolute pt-3 bg-white" style="width: 50%; left: 0; bottom: 0;">
                                    <div class="bg-primary p-4">
                                        <h4 class="display-2 mb-0">100+</h4>
                                        <p class="text-white fs-5 mb-0">Auteurs Publiés</p>
                                    </div>
                                </div>
                                <div class="position-absolute p-3 bg-white pb-0 pe-0" style="width: 50%; bottom: 0; right: 0;">
                                    <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid" alt="Pile de livres publiés">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h4 class="text-primary">Pourquoi nous choisir ?</h4>
                    <h1 class="display-4 mb-4">Notre Engagement envers nos Auteurs</h1>
                    <p class="mb-0">Nous croyons en un partenariat solide basé sur la confiance, la transparence et une passion partagée pour les livres. Voici ce qui nous distingue.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users text-white"></i>
                            </div>
                            <div class="feature-content">
                                <h4 class="mb-3">Une Relation de Partenariat</h4>
                                <p class="mb-0">Nous travaillons main dans la main avec vous. Votre vision est notre priorité, et nous vous impliquons à chaque décision clé.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-globe-africa text-white"></i>
                            </div>
                            <div class="feature-content">
                                <h4 class="mb-3">Distribution Large</h4>
                                <p class="mb-0">Grâce à notre réseau de distribution, votre livre sera disponible en format papier et numérique, localement et à l'international.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-bullhorn text-white"></i>
                            </div>
                            <div class="feature-content">
                                <h4 class="mb-3">Marketing et Promotion</h4>
                                <p class="mb-0">Nous élaborons une stratégie de communication sur mesure pour chaque livre afin d'assurer sa visibilité auprès des lecteurs et des médias.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Team Start -->
         <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Notre Équipe</h4>
                    <h1 class="display-4 mb-4">Les Visages derrière les Livres</h1>
                    <p class="mb-0">Une équipe de professionnels passionnés et expérimentés, unis par l'amour des mots et le désir de donner vie à vos histoires.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team-1.jpg') }}" class="img-fluid w-100" alt="Photo de membre d'équipe">
                            </div>
                            <div class="team-content bg-light text-center p-4">
                                <h4>Salama BYBYLEY</h4>
                                <p class="mb-0">Directeur de Publication</p>
                            </div>
                        </div>
                    </div>
                    <!-- Répétez ce bloc pour chaque membre de l'équipe -->
                </div>
            </div>
         </div>
        <!-- Team End -->
@endsection
