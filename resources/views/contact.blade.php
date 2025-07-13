@extends('layout.app_site')
@section('contenu')
   <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="text-primary">Contactez-nous</h4>
                        <h1 class="display-4 mb-4">Besoin d'aide ? N'hésitez pas !</h1>
                        <p class="mb-4">Vous avez une question, une proposition de manuscrit ou vous souhaitez simplement en savoir plus sur nos activités ? Remplissez le formulaire ci-dessous et notre équipe vous répondra dans les plus brefs délais.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Votre Nom">
                                        <label for="name">Votre Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Votre Email">
                                        <label for="email">Votre Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Sujet">
                                        <label for="subject">Sujet</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Laissez un message ici" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <h4 class="text-primary">Nos Coordonnées</h4>
                        <h1 class="display-4 mb-4">Entrons en contact</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-lg-square bg-primary rounded-circle me-3">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h4>Notre Siège</h4>
                                <p class="mb-0">97, de l'UNITE, Ville de GOM, RDC</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-lg-square bg-primary rounded-circle me-3">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h4>Email</h4>
                                <p class="mb-0">contact@ukwelieditions.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection

