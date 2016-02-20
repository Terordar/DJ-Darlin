@extends('Frontend.app')

@section('title', 'Accueil')

@section('content')
<section class="navbar navbar-inverse" role="banner" style="text-align: center;">
    <p style="color:#be042c; font-size: 150%; font-weight: bold;">Nous n’avons pas de magasin. Nous sommes à votre disposition uniquement sur rendez-vous <br> du lundi au jeudi soit en vos bureaux soit en nos bureaux</br> ainsi que les vendredis,
        samedis et lundis matin en notre entrepôt pour l’enlèvement et le retour des locations.</p>
</section>

<section id="main-slider"  class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            @foreach($listSlides as $index => $slide)
            <li data-target="#main-slider" data-slide-to="{{ $index }}" @if ($index == 0) class="active" @endif></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            <!--Slider 1-->
            @foreach($listSlides as $index => $slide)
            <div class="item @if ($index == 0) active @endif" style="background-image: url({{ $slide["img"] }})" >
                <div class="container">
                    <div class="row slide-margin">
                        <div class="@if($slide["logo"] === null) col-sm-12 @else col-sm-6 @endif">
                            <div class="carousel-content" style="margin-top: 0px;">
                                <h1 class="animation animated-item-1">{{ $slide["title"] }}</h1>
                                <h2 class="animation animated-item-2">{{ $slide["content"] }}</h2>
                            </div>
                        </div>

                        @if($slide["logo"] !== null)
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="{{ $slide["logo"] }}" class="img-responsive" style="width: 350px;">
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div><!--/.item-->
           @endforeach
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>En bref...</h2><br>
            <p class="lead" style="font-size: 132%;">Que vous soyez un organisateur occasionnel ou un professionnel dans l’organisation d’évènements, nous avons développé pour vous un ensemble de services et
                de prestations artistiques.</br></br>
                Ceux-ci font partie intégrante (ou non) de votre évènement – à caractère familial ou commercial – pour faire de celui-ci une réussite.</br></br>

                Je ne suis pas le seul disc-jockey dans le domaine de l’évènementiel. Le choix est même très large… trop large parfois ! Depuis 1985,
                je n’ai jamais négligé une prestation, ce qui n’est pas le cas, malheureusement, de certains de mes concurrents trop « bon marché ».</br></br>

                N'engagez jamais un disc-jockey sur la base de ce qu'il vous promet, mais sur sa réputation, son sérieux, ses références et
                la qualité de son matériel de sonorisation et du light show proposé.<br><br>
                Vérifiez toujours son inscription auprès de la Banque Carrefour de Belgique.
            </p>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-home"></i>
                        <h2>Évènements<br> privés :</h2>
                        <h3 style="text-align: justify; text-justify: inter-word;">Prestation DJ pour anniversaire, communion, mariage, retraite ou tout autre évènement familial.</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-headphones"></i>
                        <h2>Évènements professionnels :</h2>
                        <h3 style="text-align: justify; text-justify: inter-word;">Prestation DJ, animation commerciale, lancement de produit, portes-ouvertes, inauguration, fête du personnel.</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-star"></i>
                        <h2>Évènements artistiques :</h2>
                        <h3 style="text-align: justify; text-justify: inter-word;">Notre filiale MH PRODUCTIONS peut vous suggérez un choix de prestations artistiques pour enfants et adultes.</h3>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->

<!--SECTION PHOTO DJ DARLIN-->
<section id="recent-works">
    <div class="container">
        <div class="row">
            @foreach($listImg as $img)
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{ $img["thumbnail"] }}" alt="" style="height: 222px;">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <p style="font-size: 72%;">{{ $img["content"] }}</p>
                            <a class="preview" href="{{ $img["imgFull"] }}" rel="prettyPhoto"><i class="fa fa-eye"></i> Agrandir</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/.row-->
    </div><!--/.container-->

    <div class="center wow fadeInDown">
        <h3>Copyright : Toutes les photos sont la propriété de la SONORISATION DJ DARLIN’ MUSIC & LIGHTS</h3>
    </div>

</section><!--/#recent-works-->

<!-- MOSAIQUE PRESTATAIRES-->
<section id="recent-works" style="background-color: #f5f5f5;">

    <div class="center wow fadeInDown" style="padding-bottom : 0.75%">
        <h2>Nos partenaires commerciaux : </h2>
        <p class="lead" style="font-size: 132%;">L’équipe de la SONORISATION DJ DARLIN’ MUSIC & LIGHTS a sélectionné pour vous des </br>
            partenaires commerciaux qui répondent à la charte de qualité de notre entreprise.</h2>
        </p>
    </div>


    <div class="container">
        <div class="row" id="partenairesCommerciaux">
            @foreach($listPartenaires as $partenaire)
            <div class="col-xs-12 col-sm-4 col-md-2">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/mosaPrestataires/{{ $partenaire["img"] }}" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <a class="preview" href="{{ $partenaire["url"] }}" target="_blank"><i class="fa fa-eye"></i>Site</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/.row-->
    </div><!--/.container-->

    <div class="center wow fadeInDown">
        <h3>Copyright : Le nom des marques, les logos et les slogans sont publiés avec l'autorisation expresse de nos partenaires</h3>
    </div>
</section><!--/#recent-works-->

<!-- FOURNISSEURS -->
<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Nous travaillons avec :</h2>
            <p class="lead" style="font-size: 132%;">Notre matériel de sonorisation et d’éclairage est exclusivement composé par des marques aux fiabilités et aux qualités professionnelles reconnues et à la pointe de la technologie.</p>
        </div>
        <div class="row">
            @foreach($listFournisseurs as $fournisseur)
            <div class="col-xs-12 col-sm-4 col-md-3" style="padding-top: 30px">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="images/services/{{ $fournisseur["img"] }}" alt="" style="height: 222px;">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">{{ $fournisseur["title"] }}</a> </h3>
                            <p>{{ $fournisseur["content"] }}</p>
                            <a class="preview" href="{{ $fournisseur["url"] }}" target="_blank"><i class="fa fa-eye"></i> Site</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/.row-->
        <div class="center wow fadeInDown" style="padding-top: 50px">
            <h3 style="color: white;">Le « Sound System » est toujours judicieusement adapté à la configuration du lieu de votre mariage. Par la qualité de sa diffusion sonore à
                un niveau raisonnable, celui-ci réduit la fatigue auditive et permet à vos proches et invités d’avoir des conversations conviviales dans la première partie de soirée.
                <br><br>
                Pour l’animation dansante de la seconde partie de soirée, le niveau sonore est augmenté progressivement.<br><br>

                Le « Light Show » est toujours un subtil dosage entre un matériel à la technologie avancée et sans cesse renouvelé et un matériel plus ″vintage″.
                Cela permet aux danseurs, en accord avec le tempo du style musical diffusé, d’évoluer dans une ambiance à la fois feutrée et haute en couleur.
            </h3>
        </div>

        <div class="center wow fadeInDown">
            <h3>Copyright : Le nom des marques, les logos et les slogans sont publiés avec l'autorisation expresse de nos partenaires</h3>
        </div>

    </div><!--/.container-->
</section><!--/#services-->

<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>Vous avez une question ? Vous voulez établir un devis ?<br> <br>
                            Contactez-nous !</h2>
                        <p>Vous pouvez nous joindre via le : +32 (0)496/53.76.85 ou cliquez <a href="contact-us.php#ancre_formulaire">ici pour nous contacter par mail</a>
                            <br> Nous ferons notre possible pour vous répondre dans les plus brefs délais.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#conatcat-info-->
@endsection