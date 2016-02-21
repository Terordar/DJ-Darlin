@extends('Frontend.app')

@section('title', 'Formule standard')

@section('content')

    <section id="content">
        <div class="container">
            <div class="center">
                <h2>Formule STANDARD</h2>
                <p class="lead">Cette configuration est prévue pour une animation Disc-jockey, jusqu’à 75 convives et coûte en moyenne : 382,66 € HTVA</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 wow fadeInDown animated" style="visibility: visible; -webkit-animation: fadeInDown;">
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-bottom">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-02">Personnel</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Sound System</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="analistic-02">Light show</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="analistic-02">Remarques importantes</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="analistic-02">Informations complémentaires</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <ul>
                                            <li>Disc-jockey</li>
                                            <li>Montage et démontage assuré par 2 techniciens</li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="tab2">
                                        <p>Le Sound System sera composé, entre autre de :</p>
                                        <ul>
                                            <li>1 table de mixage SOUNDCRAFT SPIRIT E6</li>
                                            <li>1 micro HF SENNHEISER EW135 G3 A-X</li>
                                            <li>1 micro SHURE SM58 filaire</li>
                                            <li>1 double lecteur CD DENON avec MP3 en USB 2.2</li>
                                            <li>1 ampli CROWN XLS</li>
                                            <li>2 HP TOP AudioFocus </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="tab3">
                                        <p>Le Light Show sera installé sur un pont triangulaire en aluminium soudé de 10/10/10 et d’une longueur de 4 mètres et posé sur deux pieds WORK H 144-265 avec « T » barre agréés par AIV VINCOTTE.
                                            <br><br>Le Light Show à commande classique pour la piste de danse sera composé, entre autre de :</p>
                                        <ul>
                                            <li>4 tubes néons dit "Black Light"</li>
                                            <li>2 scans THUNDERBIRD</li>
                                            <li>2 scans EXERCET</li>
                                            <li>2 effets SPLASH II</li>
                                            <li>2 effets MINI MOON</li>
                                            <li>8 PAR 56 avec gélatines de couleurs</li>
                                            <li>1 effet ROTOMAX à 3 x 6 faisceaux</li>
                                            <li>1 stroboscope 1800W</li>
                                            <li>1 effet STAGELIGHT à 6 faisceaux</li>
                                        </ul>
                                        <p>Sans oublier, au sol : 1 fumigène pour le rendu du Light Show.</p>
                                    </div>


                                    <div class="tab-pane fade" id="tab4">
                                        <p>La hauteur sous plafond pour l’installation du Light Show sur le pont doit être d’au moins 3,5 mètres.</p>
                                        <p>
                                            Merci de veiller à ce que l’installation électrique soit équipée d’une prise femelle "P32" pour le branchement de notre coffret électrique
                                            « IN : 32A – 3 x 220/380 Volt – OUT : 12 x Schuko sur 6 circuits mono 220 Volt en 20 Ampères ».
                                        </p>
                                    </div>

                                    <div class="tab-pane fade" id="tab5">
                                        <p>La durée moyenne de cette formule est estimée à 12h00 de travail sur 1 jour. Chargement du matériel, temps de déplacement aller,
                                            déchargement et montage du matériel sur le lieu de votre évènement, prestation Disc-jockey de 19h00 à 02h00, démontage et chargement
                                            du matériel, temps de déplacement retour, déchargement du matériel.</p>
                                        <p>
                                            Un supplément de 20,45 €/heure HTVA pour le Disc-jockey et de 12,40 €/heure par technicien est à prévoir et sera payable
                                            anticipativement à l’heure commencée de plus de 10 minutes.
                                        </p>

                                        <p>
                                            Pour des services plus complets, comme : des installations la veille, le démontage le lendemain, des accès difficiles
                                            ou encore l’obligation de rester sur place, n’hésitez pas à nous consulter.
                                        </p>
                                    </div>
                                </div> <!--/.tab-content-->
                            </div> <!--/.media-body-->
                        </div> <!--/.media-->
                    </div><!--/.tab-wrap-->
                </div><!--/.col-sm-6-->
            </div><!--/.row-->
            <div class="center">
                <form action="{!! url("/prix") !!}">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Retourner aux prix</button>
                </form>
                <form action="{!! url("/devis") !!}">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Demander un devis</button>
                </form>
            </div>
        </div><!--/.container-->
    </section>

@endsection