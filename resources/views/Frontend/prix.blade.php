@extends('Frontend.app')

@section('title', 'Prix')

@section('content')

    <section class="pricing-page" style="padding-bottom: 0px;">
        <div class="container">
            <div class="center" style="padding-bottom: 5px;">
                <h3 style="font-size: 150%"><strong>Pour nous, « les meilleurs prix » tant en prestation disc-jockey qu’en prestation artistique<br>
                        qu’en location ou vente de matériel, ce n’est pas un simple slogan,<br>
                        mais, un engagement autour duquel s’est développée toute notre organisation.<br></strong></h3>

                <p class="lead" style="font-size: 120%; padding-top: 10px;">EXEMPLES DE NOS MEILLEURS PRIX HTVA – APPLICABLE EN 2015 / 2016 – HORS DIMANCHES ET JOURS FÉRIÉS</p>

                <p class="lead" style="font-size: 120%">Du 01 juillet 2015 au 30 juin 2016, l'indemnité kilométrique est de 0,3512 € du KM parcourus HTVA.</p>

                <p class="lead" style="font-size: 120%">Nous sommes inscrits à la SABAM-SIMIM sous le numéro de licence UNISONO-DJ/JH : 15/00031840</p>

                <p class="lead" style="font-size: 120%">Grâce à la carte du site <a href="http://www.mariage.be">www.mariage.be</a> bénéficiez d’une des 3 ristournes :<br>
                </p>
                <p class="lead" style="font-size: 220%"><strong>
                        -5% &nbsp;&nbsp; -10% &nbsp;&nbsp; -15%
                    </strong></p>

                <p class="lead" style="font-size: 120%; font-weight: bold;">Découvrez ci-dessous nos différentes formules de base :</p>
            </div>
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-3 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>STANDARD</h1>
                                <span>382,66 € HTVA</span>
                            </li>
                            <li>Personnel</li>
                            <li>Sound System</li>
                            <li>Light Show</li>
                            <li>Remarques importantes</li>
                            <li>Informations complémentaires</li>
                            <li class="plan-action">
                                <a href="{!! url('/prix-standard') !!}" class="btn btn-primary">En savoir plus</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1>PREMIUM</h1>
                                <span>546,66 € HTVA</span>
                            </li>
                            <li>Personnel</li>
                            <li>Sound System</li>
                            <li>Light Show</li>
                            <li>Remarques importantes</li>
                            <li>Informations complémentaires</li>
                            <li class="plan-action">
                                <a href="{!! url('/prix-premium') !!}" class="btn btn-primary">En savoir plus</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-three wow fadeInDown">
                        <!--<img src="images/ribon_two.png"> -->
                        <ul>
                            <li class="heading-three">
                                <h1>PRESTIGE</h1>
                                <span>655,99 € HTVA</span>
                            </li>
                            <li>Personnel</li>
                            <li>Sound System</li>
                            <li>Light Show</li>
                            <li>Remarques importantes</li>
                            <li>Informations complémentaires</li>
                            <li class="plan-action">
                                <a href="{!! url('/prix-prestige') !!}" class="btn btn-primary">En savoir plus</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-3 plan price-four wow fadeInDown">
                        <ul>
                            <li class="heading-four">
                                <h1>SPECTACLE</h1>
                                <span>921,42 € HTVA</span>
                            </li>
                            <li>Personnel</li>
                            <li>Sound System</li>
                            <li>Light Show</li>
                            <li>Remarques importantes</li>
                            <li>Informations complémentaires</li>
                            <li class="plan-action">
                                <a href="{!! url('/prix-spectacle') !!}" class="btn btn-primary">En savoir plus</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->

    <section id="portfolio" style="padding-top: 5px; padding-bottom: 0px;">
        <div class="container">
            <div class="center">
                <p style="font-size: 125%; text-align: justify;">
                    <br>
                    Le prix de notre prestation sera calculé en fonction : du nombre de vos convives (ce qui détermine le matériel à installer) ;
                    de la configuration du lieu de l’animation ; du temps de préparation et de chargement du matériel adéquat à votre évènement ;
                    du temps de déplacement aller, du déchargement et du montage dudit matériel ; de la prestation Disc-jockey et/ou artistique choisie et de la durée
                    totale de celle-ci ; du temps de démontage et de chargement du matériel utilisé ; du temps de déplacement retour ; des kilomètres parcourus ;
                    du montant de la TVA en application soit de 6% pour une prestation artistique soit de 21% pour une prestation non artistique ; des frais sociaux de
                    6,5% de notre secrétariat social « SMartbe – productions associées asbl » et des éventuels frais annexes, tels que : la nourriture et/ou le logement
                    des artistes et des techniciens ou encore de la location d’un matériel bien spécifique.
                    <br>
                </p>
                <h4 style="font-size: 150%; padding-top:15px;">Nous estimons la durée moyenne d’une prestation Disc-jockey selon la formule choisie<br>
                    entre 12h00 et 18h00 de travail au total.</h4>
                <p style="font-size: 125%; text-align: justify;">
                    <br>
                    Il est important que vous sachiez que pour une prestation Disc-jockey avec ou sans prestation artistique, nous estimons que l’heure raisonnable pour la fin de
                    l’animation dansante est de 03h00 du matin. Il est bon de noter que si vous souhaitez la prolongation de l’animation dansante au-delà de 03h00 du matin, un supplément vous
                    sera porté en compte et sera obligatoirement payable anticipativement pour toutes heures commencées de plus de 10 minutes.
                    <br>
                </p>
                <p style="font-size: 125%; text-align: justify;">
                    <br>
                    Merci de veillez à ce que l’installation électrique soit si possible équipée d’une prise femelle : « OUT : 64A ou 32A pour le branchement de
                    notre coffret électrique « IN : 32A – 3 x 220/380V – OUT : 12 x Schuko sur 6 circuits mono 220V en 20A ».
                    <br>
                </p>
                <p style="font-size: 125%; text-align: justify; padding-bottom: 15px">
                    <br>
                    Pour des services plus complets, tels que : le montage de notre matériel la veille, un accès difficile au lieu de notre prestation ou encore
                    l’obligation de rester sur place, n’hésitez pas à nous consulter.
                    <br>
                </p>
                <h4 style="font-size: 150%;">PROFITEZ DE NOS OFFRES PROMOTIONNELLES POUR VOUS OFFRIR CE QUI SE FAIT DE MIEUX AU MEILLEUR PRIX !</h4>

                <img src="images/carteReduction.jpg" alt="Carte de reduction marriage.be">
            </div>
        </div>
    </section>

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInDown animated" style="visibility: visible; -webkit-animation: fadeInDown;">
                    <div class="accordion">
                        <h2>Nos tarifs &amp; explications</h2>
                        <div class="panel-group" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle hidden-xs" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                            Prestations diverses
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>

                                <div id="collapseOne1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Maître de Cérémonie (forfait 4h/maître) : 300,00 €<br>
                                            Hôtesse d’accueil (à partir de) : 30,00 €/heure (minimum 3h)<br>
                                            Parking Boy avec surveillance des véhicules (à partir de) : 25,00 €/heure (minimum 3h)<br>
                                            Garde de sécurité (à partir de) : 35,00 €/heure (minimum 3h)<br>
                                            Dame Vestiaire (à partir de) : 18,00 €/heure (minimum 3h)<br>
                                            Dame Sanitaire (à partir de) : 18,00 €/heure (minimum 3h)<br>
                                            Magicien « Close Up » (à partir de) : 150,00 €/heure<br>
                                            Grimeuse (à partir de) : 30,00 €/heure (minimum 3h)
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                            Main d’œuvre supplémentaire
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Montage et/ou démontage du matériel loué : 50,00 €/heure<br>
                                            Prestation d’un Technicien ou d’un Régisseur : 280,00 €/par journée de prestation sur une base de 14h<br>
                                            Prestation d’un aide Technicien ou d’un aide Régisseur : 175,00 €/par journée de prestation sur une base de 14h</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                            Options diverses
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Kit pour prestation Karaoké avec 450 titres fournis : 150,00 € (écrans de télévision non fournis ou en location)<br>
                                            Sonorisation périphérique composé de 2 HP AudioFocus de 2 x 150 watt avec ampli (à partir de) : 55,776 €<br>
                                            Podium dit podestre de : 2m² en 40 / 60 / 80 cm de hauteur : 17,50 €<br>
                                            Escalier pour podestre 60 cm : 12,50 €<br>
                                            Pendrions noir / bleu foncé : 125 x 322 : 8,67 €/pièce</p>

                                        <p class="lead">
                                            N’hésitez pas à consulter notre onglet LOCATION/VENTE pour l’audio-visuel, interphonie, sonorisation, effets lumineux, etc.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix1">
                                            Prise en charge
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseSix1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Préparation, prise en charge, chargement et transport du matériel en camionnette 12 m3 : 25,00 € + 0,3512 du KM<br>
                                            Préparation, prise en charge, chargement et transport du matériel en camionnette 22 m3 : 35,00 € + 0,3512 du KM</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                            Comment est calculé le prix ?
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFour1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Le prix de notre prestation sera calculé en fonction : du temps de préparation et de chargement du matériel adéquat à votre mariage ;
                                            du temps de déplacement aller ; du déchargement et du montage dudit matériel ; de la prestation Disc-jockey et / ou artistique choisie
                                            et de la durée totale de celle(s)-ci ; du temps de démontage et de chargement du matériel utilisé ; du temps de déplacement retour ; des
                                            kilomètres parcourus ; du taux de TVA en application (soit de 6% pour une prestation artistique soit de 21% pour une prestation non artistique) ;
                                            des frais de notre secrétariat social « SMartbe – productions associées asbl » à un taux de 6,5 % ; d’éventuels frais annexes.
                                        </p>

                                        <p>
                                            Il est important que vous sachiez que nous estimons la durée moyenne d’une prestation Disc-jockey à environ 14 heures de travail au total.
                                            Donc pour une prestation Disc-jockey (avec ou sans prestation artistique), nous estimons que l’heure raisonnable pour la fin de l’animation
                                            dansante est de 03h00 du matin. Il est bon de noter que si vous souhaitez la prolongation de l’animation dansante au-delà de 03h00 du matin,
                                            des suppléments de 25,00 € / heure pour le Disc-jockey et de 12,50 € / heure par technicien seront à prévoir et obligatoirement payables
                                            anticipativement pour toute heure commencée de plus de 10 minutes.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                                            Informations complèmentaires
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFive1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Les HP BASS AudioFocus sont toujours installés au sol et les HP TOP AudioFocus sont toujours installés sur pieds ;
                                        </p>

                                        <p>
                                            Les HP TOP AudioFocus seront répartis dans la salle pour une meilleure qualité du son – musique et discours – et surtout pour que vos convives ne
                                            soient pas dérangés par un son "trop bruyant" au niveau de la piste de danse et une absence de son dans le fond de la salle ;
                                        </p>

                                        <p>
                                            Les HP BASS AudioFocus et les HP TOP AudioFocus sont alimentés par des amplis différents, ce qui permet de gérer le niveau sonore de chaque
                                            HP BASS AudioFocus et HP TOP AudioFocus individuellement et aussi, de rendre l'effet stéréo "quadriphonique" ;
                                        </p>

                                        <p>
                                            Pour un Light Show digne de votre évènement, nous privilégions, l’installation de ce dernier au-dessus de la piste de danse ce qui
                                            permet de créer, un Light Show comme dans une discothèque ;
                                        </p>

                                        <p>
                                            L’ensemble du matériel du Light Show est géré par des commandes DMX ;
                                        </p>

                                        <p>
                                            Pour les inquiets… la fumée du fumigène est non toxique et est sans odeur, la fumée émise permet quant à elle, un excellent rendu du Light Show.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section>


@endsection