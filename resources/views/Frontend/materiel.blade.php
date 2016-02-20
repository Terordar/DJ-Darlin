@extends('Frontend.app')

@section('title', 'Matériel')

@section('content')
<section id="portfolio" style= "padding-bottom: 25px;">
    <div class="container">
        <div class="center">
            <h4 style="font-size: 150%">Notre matériel de sonorisation et d’éclairage est exclusivement composé par des marques aux fiabilités et
                aux qualités professionnelles reconnues et à la pointe de la technologie.</h4>
        </div>

        <ul class="portfolio-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">Tout le matériel</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".sono">Sonorisation</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".lumiere">Lumière</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".divers">Divers</a></li>
        </ul><!--/#portfolio-filter-->

        <div class="row">
            <div class="portfolio-items">
                @foreach($listMateriel as $materiel)
                <div class="portfolio-item {{ $materiel["type"] }} col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="{{ $materiel["img"] }}" alt="" style="height: 222px;">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <p>{{ $materiel["description"] }}</p>
                                <a class="preview" href="{{ $materiel["imgGrande"] }}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                @endforeach
            </div>
        </div>
    </div>
</section><!--/#portfolio-item-->
<div class="container">
    <div class="center">
        <p style="text-align: center;">Copyright : Les photos – non contractuelles – sont publiées avec l’autorisation expresse de nos partenaires.</p><br>
        <p style="text-align: justify; text-justify: inter-word; font-size: 140%;">Une bonne qualité de son est obtenue en tenant compte de nombreux paramètres. C’est notre métier de prévoir la disposition et le nombre de haut-parleurs (HP) à
            disposer pour le meilleur confort acoustique de vos invités.<br><br>

            Le « Sound System » est toujours judicieusement adapté à la configuration du lieu de votre évènement et de par la qualité de sa diffusion sonore à un niveau
            raisonnable, celui-ci réduit la fatigue auditive et permet à vos invités d’avoir des conversations conviviales dans la première partie de la soirée et pour
            l’animation dansante dans la seconde partie de la soirée, le niveau sonore est augmenté.<br><br>

            Le « Light Show » est toujours un subtil dosage entre un matériel à la technologie avancée et sans cesse renouvelé et un matériel à la technologie plus
            ″vintage″ ce qui permet aux danseurs en accord avec le tempo du style musical diffusé d’évoluer dans une ambiance à la fois feutrée et haute en couleur.<br><br>

            Notre matériel de sonorisation et d’éclairage est exclusivement composé par des marques aux fiabilités et aux qualités professionnelles reconnues
            et à la pointe de la technologie. Celui-ci est toujours judicieusement adapté à la configuration de votre évènement. Nous pouvons assurer aussi bien des animations
            dansantes que la régie de spectacle.</p><br>

        <h2 style="font-size: 150%;">Nos techniciens sont tous très expérimentés dans le montage et le démontage<br>
            du matériel de salle et / ou de plateau.</h2>

        <p style="text-align: center; font-size: 125%;">
            <strong>Nous nous déplaçons en camion et remorque, il faut donc prévoir un espace adéquat obligatoirement au
                plus près du plateau.</strong><br><br>
        </p>

        <p style="text-align: justify; text-justify: inter-word; font-size: 140%;">
            Afin d’éviter des frais supplémentaires en personnel technique, il faut éviter au maximum : les accès difficiles, les salles en étage, etc.<br><br>

            Notre filiale MH PRODUCTIONS est un secrétariat artistique qui nous permet de vous proposer, non seulement, un large choix d’artistes et d’animations à thème,
            mais aussi de disposer de chapiteaux, de podiums, d’une caravane technique, etc.<br><bt>
        </p>

        <p style="text-align: center; font-size: 140%; padding-top: 25px;">
            <strong>L’ampérage de l’installation électrique du lieu de votre évènement est-il suffisant ?</strong><br><br>
        </p>

        <p style="text-align: justify; text-justify: inter-word; font-size: 140%;">
            Des coupures de courant intempestives peuvent avoir des conséquences fâcheuses sur le bon déroulement de votre évènement et des conséquences graves sur le
            matériel utilisé. Pour éviter ce genre de désagrément, assurez-vous que le lieu de votre évènement est équipé d’une arrivée
            380 volts en 32 ou 64 ampères.</p><br>

        <h2 style="font-size: 150%;">-- Le professionnalisme des Disc-jockeys et des techniciens est intimement liée au matériel
            utilisé. --</h2>

    </div>
</div>

@endsection