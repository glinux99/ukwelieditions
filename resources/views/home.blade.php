@extends('layout.app_site')
@section('contenu')

        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel overflow-hidden">
            <div class="header-carousel-item hero-section">
                <div class="hero-bg-half-1"></div>
                <div class="hero-shape-1"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-white text-uppercase fw-bold mb-4">Ukweli Editions</h4>
                                    <h1 class="display-2 text-white mb-4">Nous sommes une maison d’édition qui accompagne les auteurs et écrivains</h1>
                                    <p class="mb-5 fs-5">Afin de vous faire vivre l’écriture autrement en toute excellence et créativité dans l’ensemble de nos services. Vous êtes passionné de l’écriture ? Ukweli Editions existe pour vous!
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-light py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Commencer maintenant</a>
                                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item hero-section">
                <div class="hero-bg-half-2"></div>
                <div class="hero-shape-2"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-white text-uppercase fw-bold mb-4">Ukweli Editions</h4>
                                    <h1 class="display-2 text-white mb-4">Afin de vous faire vivre l’écriture autrement</h1>
                                    <p class="mb-5 fs-5"> Nous sommes prets à vous guider
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-light py-3 px-4 px-md-5 me-2" href="#"><i class="fa fa-book me-2"></i> Commencer maintenant</a>
                                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->





        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Nos Services</h4>
                    <h1 class="display-4 mb-4">Des Services Complets pour Auteurs et Écrivains</h1>
                    <p class="mb-0">Chez Ukweli Editions, nous offrons une gamme complète de services pour accompagner les auteurs à chaque étape de la création de leur œuvre, de l'idée initiale à la publication et au-delà.
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                        <ul class="nav">
                            <li class="nav-item me-lg-0 mb-4">
                                <a class="py-3 px-5 active" data-bs-toggle="pill" href="#ServiceTab-1">
                                    <span>Édition et Réécriture</span>
                                </a>
                            </li>
                            <li class="nav-item me-lg-0 mb-4">
                                <a class="py-3 px-5" data-bs-toggle="pill" href="#ServiceTab-2">
                                    <span>Publication et Promotion</span>
                                </a>
                            </li>
                            <li class="nav-item me-lg-0 mb-4 mb-lg-0">
                                <a class="py-3 px-5" data-bs-toggle="pill" href="#ServiceTab-3">
                                    <span>Conseil et Accompagnement</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="tab-content">
                            <div id="ServiceTab-1" class="tab-pane fade show p-0 active">
                                <div class="service-carousel owl-carousel">
                                    <div class="service-item card">
                                        <img src="{{asset('assets/img/commercial-1.jpg')}}" class="img-fluid w-100  h-100 card-img-top" alt="Réécriture et Relecture">
                                        <div class="border border-top-0 p-4">
                                            <h4 class="mb-3">Réécriture et Relecture</h4>
                                            <p class="mb-4">Nous affinons votre manuscrit pour une clarté, une cohérence et un impact maximum, en respectant votre voix unique.
                                            </p>
                                            <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                        </div>
                                    </div>
                                    <div class="service-item card">
                                        <img src="{{asset('assets/img/commercial-2.jpg')}}" class="img-fluid w-100  h-100 card-img-top" alt="Correction Orthographique et Grammaticale">
                                        <div class="border border-top-0 p-4">
                                            <h4 class="mb-3">Correction Orthographique et Grammaticale</h4>
                                            <p class="mb-4">Une correction minutieuse pour éliminer toutes les fautes et garantir un texte impeccable.
                                            </p>
                                            <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                        </div>
                                    </div>
                                    <div class="service-item card">
                                        <img src="{{asset('assets/img/commercial-3.jpg')}}" class="img-fluid w-100  h-100 card-img-top" alt="Structuration du Livre">
                                        <div class="border border-top-0 p-4">
                                            <h4 class="mb-3">Structuration du Livre</h4>
                                            <p class="mb-4">Nous vous aidons à organiser vos idées et à construire une structure narrative solide et engageante.
                                            </p>
                                            <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="ServiceTab-2" class="tab-pane fade show p-0">
                                <div class="service-carousel owl-carousel">
                                    <div class="service-item card">
                                        <img src="{{asset('assets/img/residential-1.jpg')}}" class="img-fluid w-100  h-100 card-img-top" alt="Publication sur Amazon">
                                        <div class="border border-top-0 p-4">
                                            <h4 class="mb-3">Publication sur Amazon</h4>
                                            <p class="mb-4">Nous gérons le processus de publication sur Amazon, rendant votre livre accessible à des millions de lecteurs.
                                            </p>
                                            <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                        </div>
                                    </div>
                                    <div class="service-item card">
                                        <img src="{{asset('assets/img/residential-2.jpg')}}" class="img-fluid w-100  h-100 card-img-top" alt="Dépôt Légal">
                                        <div class="border border-top-0 p-4">
                                            <h4 class="mb-3">Dépôt Légal à la Bibliothèque Nationale</h4>
                                            <p class="mb-4">Nous nous occupons des formalités administratives pour le dépôt légal de votre œuvre.
                                            </p>
                                            <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                        </div>
                                    </div>
                                    <div class="service-item card">
                                        <img src="{{asset('assets/img/residential-3.jpg')}}" class="img-fluid w-100  h-100 card-img-top" alt="Organisation du Vernissage">
                                        <div class="border border-top-0 p-4">
                                            <h4 class="mb-3">Organisation du Vernissage</h4>
                                            <p class="mb-4">Nous vous aidons à organiser un événement mémorable pour le lancement de votre livre.
                                            </p>
                                            <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="ServiceTab-3" class="tab-pane fade show p-0">
                                <div class="service-carousel owl-carousel">
                                    <div class="service-item card">
                                        <img src="{{asset('assets/img/industrial-1.jpg')}}" class="img-fluid w-100  h-100 card-img-top" alt="Amplification des Idées">
                                        <div class="border border-top-0 p-4">
                                            <h4 class="mb-3">Amplification des Idées</h4>
                                            <p class="mb-4">Nous travaillons avec vous pour développer et enrichir vos concepts, transformant vos idées brutes en un contenu captivant.
                                            </p>
                                            <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                        </div>
                                    </div>
                                    <div class="service-item card">
                                        <img src="{{asset('assets/img/industrial-2.jpg')}}" class="img-fluid w-100  h-100 card-img-top" alt="Critique Littéraire et Théologique">
                                        <div class="border border-top-0 p-4">
                                            <h4 class="mb-3">Critique Littéraire et Théologique</h4>
                                            <p class="mb-4">Des analyses approfondies de votre manuscrit, avec une expertise spécifique pour les ouvrages chrétiens.
                                            </p>
                                            <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                        </div>
                                    </div>
                                    <div class="service-item card">
                                        <img src="{{asset('assets/img/industrial-3.jpg')}}" class="img-fluid w-100 h-100 card-img-top" alt="Rédaction de Synopsis et Titres">
                                        <div class="border border-top-0 p-4">
                                            <h4 class="mb-3">Rédaction de Synopsis et Titres</h4>
                                            <p class="mb-4">Nous vous aidons à créer des résumés percutants et à choisir les meilleurs titres pour attirer les lecteurs.
                                            </p>
                                            <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->
     <!-- Banner Start -->
         <div class="container-fluid banner py-5 wow zoomIn" data-wow-delay="0.2s">
            <div class="banner-design-1"></div>
            <div class="banner-design-2"></div>
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="">
                            <h4 class="text-white">Contactez-nous</h4>
                            <h1 class="display-4 text-white mb-0">Prêt à donner vie à votre manuscrit ? Contactez Ukweli Editions dès aujourd'hui !</h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center justify-content-lg-end h-100">
                            <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#">DÉCOUVRIR PLUS</a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- Banner End -->
        <!-- Projects Start -->
        <div class="container-fluid projects bg-light py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">Nos Projets</h4>
                            <h1 class="display-4 mb-4">Découvrez Nos meilleures Œuvres</h1>
                            <p class="mb-5">Chez Ukweli Editions, nous sommes fiers des projets que nous avons eu le privilège d'accompagner. Chaque livre est une histoire de collaboration, de créativité et de passion. Explorez quelques-unes de nos réalisations et découvrez la diversité des voix que nous mettons en lumière.</p>
                            <ul class="nav">
                                <li class="nav-item bg-white mb-4 w-100">
                                    <a class="d-flex align-items-center h4 mb-0 p-3 active" data-bs-toggle="pill" href="#ProjectsTab-1">
                                        <div class="projects-icon btn-md-square bg-primary text-white me-3"><span class="fas fa-book small"></span></div><span>Romans et Fictions</span>
                                    </a>
                                </li>
                                <li class="nav-item bg-white mb-4 w-100">
                                    <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-2">
                                        <div class="projects-icon btn-md-square bg-primary text-white me-3"><span class="fas fa-lightbulb small"></span></div><span>Essais et Non-Fiction</span>
                                    </a>
                                </li>
                                <li class="nav-item bg-white mb-4 w-100">
                                    <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-3">
                                        <div class="projects-icon btn-md-square bg-primary text-white me-3"><span class="fas fa-church small"></span></div><span>Ouvrages Chrétiens</span>
                                    </a>
                                </li>
                                <li class="nav-item bg-white mb-4 w-100">
                                    <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-4">
                                        <div class="projects-icon btn-md-square bg-primary text-white me-3"><span class="fas fa-paint-brush small"></span></div><span>Livres Illustrés et Jeunesse</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="tab-content">
                            <div id="ProjectsTab-1" class="tab-pane fade show p-0 active">
                                <div class="projects-item">
                                    <img src="{{asset('assets/img/blog-1.jpg')}}" class="img-fluid w-100" alt="">
                                    <div class="projects-content bg-white p-4">
                                        <h4 class="mb-3">Quand l'église oublie sa relève</h4>
                                        <p class="mb-4">Dans un monde en constante évolution, ce roman poignant interroge la responsabilité de l'Église face à sa jeunesse. À travers une narration captivante, il explore les défis, les doutes et les espoirs d'une génération en quête de repères spirituels, et les conséquences d'une transmission de flambeau manquée. </p>
                                        <a class="btn btn-primary py-2 px-4" href="#" download>Télécharger l'extrait</a>
                                    </div>
                                </div>
                            </div>
                            <div id="ProjectsTab-2" class="tab-pane fade show p-0">
                                <div class="projects-item">
                                    <img src="{{asset('assets/img/about-2.jpg')}}" class="img-fluid w-100" alt="">
                                    <div class="projects-content bg-white p-4">
                                        <h4 class="mb-3">Guerre dans l'Est, Guerre à l'Est</h4>
                                        <p class="mb-4">Cet essai percutant plonge au cœur des conflits qui déchirent l'Est de la RDC. Mêlant analyses géopolitiques, témoignages poignants et réflexions sur l'impact humain, l'auteur décrypte les racines d'une guerre complexe et met en lumière la résilience d'un peuple face à l'adversité. </p>
                                        <a class="btn btn-primary py-2 px-4" href="#" download>Télécharger l'extrait</a>
                                    </div>
                                </div>
                            </div>
                            <div id="ProjectsTab-3" class="tab-pane fade show p-0">
                                <div class="projects-item">
                                    <img src="{{asset('assets/img/blog-2.jpg')}}" class="img-fluid w-100" alt="">
                                    <div class="projects-content bg-white p-4">
                                        <h4 class="mb-3">La pureté sexuelle</h4>
                                        <p class="mb-4">Abordant un sujet délicat avec sagesse et clarté, cet ouvrage offre une perspective biblique sur la pureté sexuelle. Il s'adresse aux croyants de tous âges, proposant des clés pour comprendre et vivre la sexualité selon le plan de Dieu, dans un monde où les repères sont souvent brouillés. </p>
                                        <a class="btn btn-primary py-2 px-4" href="#" download>Télécharger l'extrait</a>
                                    </div>
                                </div>
                            </div>
                            <div id="ProjectsTab-4" class="tab-pane fade show p-0">
                                <div class="projects-item">
                                    <img src="{{asset('assets/img/blog-4.jpg')}}" class="img-fluid w-100" alt="">
                                    <div class="projects-content bg-white p-4">
                                        <h4 class="mb-4">L'équilibre d'un dessein glorieux</h4>
                                        <p class="mb-4">Un conte magnifiquement illustré qui emmène les jeunes lecteurs dans un voyage à la découverte de leur place unique dans le monde. L'histoire suit un personnage attachant qui apprend que chaque créature, grande ou petite, fait partie d'un plan harmonieux et glorieux. </p>
                                        <a class="btn btn-primary py-2 px-4" href="#" download>Télécharger l'extrait</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class=" d-flex align-items-center justify-content-center">
                        <a class="btn btn-primary py-2 px-4" href="#" download>Voir plus</a>
                     </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->


        <!-- Blog Start -->
         <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Notre Blog</h4>
                    <h1 class="display-4 mb-4">Actualités et Conseils pour Auteurs</h1>
                    <p class="mb-0">Découvrez les dernières nouvelles d'Ukweli Editions, des conseils pratiques pour les auteurs, des analyses sur le monde de l'édition et des inspirations pour votre prochaine œuvre.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item card h-100">
                            <img src="{{asset('assets/img/Le-blocage-de-lecrivain.jpg')}}" class="card-img-top h-100" alt="Personne écrivant sur un carnet">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title mb-3"><a href="#" class="text-decoration-none text-dark">5 Astuces pour Vaincre le Blocage de l'Écrivain</a></h5>
                                <div class="d-flex justify-content-between mb-3 text-muted small">
                                    <span><i class="fa fa-calendar me-2"></i> 15 Mai 2024</span>
                                    <span><i class="fa fa-tag me-2"></i> Conseils d'écriture</span>
                                </div>
                                <p class="card-text mb-4">Découvrez des stratégies efficaces pour surmonter le blocage de l'écrivain et retrouver votre inspiration. Des exercices pratiques et des conseils de pro pour relancer votre créativité.</p>
                                <div class="mt-auto">
                                    <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-item card h-100">
                            <img src="{{asset('assets/img/images.jpg')}}" class="card-img-top h-100" alt="Livre ouvert sur une table">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title mb-3"><a href="#" class="text-decoration-none text-dark">Le Processus de Publication: De l'Écriture à la Librairie</a></h5>
                                <div class="d-flex justify-content-between mb-3 text-muted small">
                                    <span><i class="fa fa-calendar me-2"></i> 10 Avril 2024</span>
                                    <span><i class="fa fa-tag me-2"></i> Monde de l'édition</span>
                                </div>
                                <p class="card-text mb-4">Comprenez les étapes clés du processus de publication d'un livre, de la soumission du manuscrit à sa mise en vente. Ukweli Editions vous guide à travers chaque phase.</p>
                                <div class="mt-auto">
                                    <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item card h-100">
                            <img src="{{asset('assets/img/images2.jpg')}}" class="card-img-top h-100" alt="Personne lisant un livre">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title mb-3"><a href="#" class="text-decoration-none text-dark">L'Importance d'une Bonne Réécriture pour Votre Manuscrit</a></h5>
                                <div class="d-flex justify-content-between mb-3 text-muted small">
                                    <span><i class="fa fa-calendar me-2"></i> 28 Mars 2024</span>
                                    <span><i class="fa fa-tag me-2"></i> Édition</span>
                                </div>
                                <p class="card-text mb-4">Découvrez pourquoi la réécriture est une étape cruciale pour transformer un bon manuscrit en un chef-d'œuvre. Nos experts partagent leurs techniques pour affiner votre texte.</p>
                                <div class="mt-auto">
                                    <a class="btn btn-primary py-2 px-4" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- Blog End -->
        <!-- Testimonial Start -->
        <div class="container-fluid testimonial bg-dark py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-xl-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h4 class="text-primary">Témoignages</h4>
                        <h1 class="display-4 text-white mb-4">Ce que Nos Auteurs Disent de Nous</h1>
                        <p class="mb-4">Découvrez ce que nos auteurs pensent de notre collaboration. Leurs succès sont notre plus grande fierté.
                        </p>
                        <a class="btn btn-light py-3 px-5" href="#">Voir tous les témoignages</a>
                    </div>
                    <div class="col-lg-6 col-xl-7 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item">
                                <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="testimonial-inner p-4">
                                    <img src="{{asset('assets/img/testimonial-1.jpg')}}" class="img-fluid" alt="Photo de Salama BYBYLEY">
                                    <div class="ms-4">
                                        <h4>Salama BYBYLEY</h4>
                                        <p>Auteure de "Les Mots des Maux"</p>
                                        <div class="d-flex text-primary">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star text-body"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-text p-4">
                                    <p class="mb-0">"Ukweli Editions a transformé mon manuscrit en un livre dont je suis incroyablement fière. Leur accompagnement a été précieux à chaque étape."</p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="testimonial-inner p-4">
                                    <img src="{{asset('assets/img/testimonial-2.jpg')}}" class="img-fluid" alt="Photo de Fiston M. Glory">
                                    <div class="ms-4">
                                        <h4>Fiston M. Glory</h4>
                                        <p>Auteur de "La Pureté Sexuelle"</p>
                                        <div class="d-flex text-primary">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star text-body"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-text p-4">
                                    <p class="mb-0">"L'équipe a fait preuve d'un grand professionnalisme et d'une expertise remarquable, notamment pour un sujet aussi délicat. Je recommande vivement."</p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="testimonial-inner p-4">
                                    <img src="{{asset('assets/img/testimonial-3.jpg')}}" class="img-fluid" alt="Photo de Tresor Banza">
                                    <div class="ms-4">
                                        <h4>Tresor Banza</h4>
                                        <p>Auteur de "L'Équilibre d'un Dessein Glorieux"</p>
                                        <div class="d-flex text-primary">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star text-body"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="customer-text p-4">
                                    <p class="mb-0">"Une collaboration exceptionnelle. Ukweli Editions a su capturer l'essence de mon message et le présenter dans un livre magnifique. Un grand merci à toute l'équipe."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- Testimonial End -->


        <!-- FAQ Start -->
         <div class="container-fluid faq-section bg-light py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="text-primary">Questions Fréquemment Posées</h4>
                        <h1 class="display-4 mb-4">Vos Interrogations, Nos Réponses</h1>
                        <p class="mb-4">Vous avez des questions sur nos services, le processus d'édition ou la publication de votre livre ? Retrouvez ici les réponses aux questions les plus courantes.
                        </p>
                        <a class="btn btn-primary py-3 px-5" href="#">Contactez-nous</a>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="h-100">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: Comment puis-je soumettre mon manuscrit à Ukweli Editions ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            R: Nous vous invitons à visiter notre page 'Contact' où vous trouverez un formulaire de soumission ainsi que les directives détaillées. Assurez-vous que votre manuscrit est complet et correspond à notre ligne éditoriale. Nous avons hâte de découvrir votre œuvre !
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q: Quels types de livres publiez-vous ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            R: Ukweli Editions est ouverte à une grande variété de genres. Nous publions des romans, des essais, des ouvrages chrétiens, de la non-fiction, ainsi que des livres pour la jeunesse. Notre principal critère est la qualité de l'écriture et l'authenticité du message. N'hésitez pas à consulter notre catalogue pour vous faire une idée de notre ligne éditoriale.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q: Proposez-vous des services de promotion pour les livres publiés ?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            R: Oui, absolument. La publication n'est que le début. Nous élaborons une stratégie de marketing et de promotion sur mesure pour chaque livre, incluant les relations presse, la promotion sur les réseaux sociaux et l'organisation d'événements de lancement pour assurer la meilleure visibilité possible à votre œuvre.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Q: Quel est le coût des services d'édition ?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            R: Nos services sont modulables pour s'adapter aux besoins de chaque auteur. Les coûts varient en fonction de l'étendue des services requis (correction, réécriture, mise en page, publication, promotion, etc.). Nous vous invitons à nous contacter pour un devis personnalisé et transparent, sans engagement de votre part.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- FAQ End -->
@endsection
