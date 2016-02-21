@extends('Frontend.app')

@section('title', 'Formule premium')

@section('content')

    <section id="content">
        <div class="container">
            <div class="center">
                <h2>Formule PREMIUM</h2>
                <p class="lead">Cette configuration est prévue pour les événements de taille moyenne et coûte en moyenne 546,66 € HTVA</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 wow fadeInDown animated" style="visibility: visible; -webkit-animation: fadeInDown;">
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-bottom">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-02">Personnel</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Sound system</a></li>
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
                                            <li>Montage et démontage assuré par 3 techniciens</li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="tab2">
                                        <p>Le Sound System sera composé, entre autre de :</p>
                                        <ul>
                                            <li>1 table de mixage SOUNDCRAFT SPIRIT E6</li>
                                            <li>1 micro HF SENNHEISER EW135 G3 A-X</li>
                                            <li>1 micro filaire SHURE SM58</li>
                                            <li>1 double lecteur CD DENON avec MP3 en USB 2.2</li>
                                            <li>2 amplis PALMER 800 LX</li>
                                            <li>2 HP BASS AudioFocus</li>
                                            <li>4 HP TOP AudioFocus</li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="tab3">
                                        <p>Le Light Show sera installé sur un pont triangulaire en aluminium soudé de 30/30/30 et d'une longueur de : 8, 9, 10 ou 11 mètres et posé sur 2 pieds à treuil WORK LW 155 R agréés par AIV VINCOTTE.
                                            <br><br>Le Light Show à commande DMX pour la piste de danse sera composé, entre autre de :</p>
                                        <ul>
                                            <li>4 tubes néons dit "Black Light"</li>
                                            <li>7 boules à facettes (4 x Ø 20 CM, 1 x Ø 30 CM, 1 x Ø 40 CM, 1 x Ø 50 CM)</li>
                                            <li>4 PAR 36 blancs (pour les boules à facettes)</li>
                                            <li>2 scans WILD BLAZE</li>
                                            <li>2 scans THOMAHAWK</li>
                                            <li>4 effets SMART BEAM</li>
                                            <li>8 PAR 56 avec gélatines de couleurs</li>
                                            <li>2 stroboscopes 1800W</li>
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
                                        <p>La durée moyenne de cette formule est estimée à 18h00 de travail sur 2 jour. Chargement du matériel, temps de déplacement aller,
                                            déchargement et montage du matériel sur le lieu de votre évènement, prestation Disc-jockey de 19h00 à 02h00, démontage et chargement
                                            du matériel, temps de déplacement retour, déchargement du matériel.</p>
                                        <p>
                                            Un supplément de 28,50 €/heure HTVA pour le Disc-jockey et de 20,45 €/heure par technicien est à prévoir et sera payable anticipativement
                                            à l’heure commencée de plus de 10 minutes.
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