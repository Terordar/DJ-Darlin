<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevisRequest;
use App\Http\Requests\MessageRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\User;

class WebsiteController extends Controller
{
    public function index()
    {
        $listSlides = array(
            array('logo' => 'images/slider/img1.png',
                'title' => "Bienvenue sur le site de la :\n SONORISATION DJ DARLIN’ MUSIC & LIGHTS",
                'content' => "L’équipe de la SONORISATION DJ DARLIN’ MUSIC & LIGHTS est à votre service dans le seul but de réaliser votre mariage dans les meilleures conditions possibles et avec nos 30 années d’expérience et de compétence qui font notre force. Nous pouvons nous prévaloir d'y parvenir avec passion, savoir-faire et un goût de l’exceptionnel.",
                'img' => 'images/slider/bg.jpg'),

            array('logo' => 'images/slider/img2.png',
                'title' => "Vous cherchez des artistes ou une animation pour votre : \n fête de famille, d’école ou de quartier, votre braderie ou brocante ?",
                'content' => "Pour une meilleure réussite de votre évènement, notre filiale MH PRODUCTIONS peut vous suggérer des animations intérieures et extérieures à destination des enfants et des adultes. Le catalogue d'artistes est composé, entre-autre : d’artistes de cirque, d’artistes de rues, d’artistes transformistes, de chanteurs, de clowns, de conteurs, de cracheurs de feu, d’échassiers, de grimeuses, d’illustrateurs, de jongleurs, de magiciens, de sculpteurs de ballons, Etc.",
                'img' => 'images/slider/bg2.jpg'),

            array('logo' => null,
                'title' => "Notre matériel de sonorisation et d’éclairage est exclusivement composé par des marques aux fiabilités et aux qualités professionnelles reconnues et à la pointe de la technologie.",
                'content' => "Le  « Sound System » est toujours judicieusement adapté à la configuration du lieu de votre mariage. Par la qualité de sa diffusion sonore à un niveau raisonnable, celui-ci réduit la fatigue auditive et permet à vos proches et invités d’avoir des conversations conviviales dans la première partie de soirée. Pour l’animation dansante de la seconde partie de soirée, le niveau sonore est augmenté progressivement. \n \n

                                    Le « Light Show » est toujours un subtil dosage entre un matériel à la technologie avancée et sans cesse renouvelé et un matériel plus ″vintage″. Cela permet aux danseurs, en accord avec le tempo du style musical diffusé, d’évoluer dans une ambiance à la fois feutrée et haute en couleur. \n \n

                                    Nous assurons aussi bien des animations dansantes que la régie de spectacle.",
                'img' => 'images/slider/bg3.jpg'),

            array('logo' => null,
                'title' => 'Vous organisez : une fête d’école ou de quartier, une braderie ou une brocante, une journée portes-ouvertes ou une journée découverte entreprise ?',
                'content' => 'Nous vous proposons un concept unique et original à destination des enfants. Ce concept « N°3 » comprend : la sonorisation du lieu de votre évènement (avec ou sans présentation commerciale), des animations ludiques et amusantes animées par un magicien et/ou un clown et la prestation de deux grimeuses. Sans oublier, notre remorque de 6 mètres qui est équipée de jeux dits forains, tel que : une « Pêche aux canards », deux jeux de « Massacre » et un jeu de « Rebonds ». Ces jeux sont payants et les enfants repartent avec de très beaux cadeaux !',
                'img' => 'images/slider/bg4.jpg'),

            array('logo' => null,
                'title' => 'Pour agrémenter votre fête de famille : anniversaire, barbecue, communion, mariage… ou encore, si vous organisez une fête commerciale : une fête d’école ou de quartier, une braderie ou une brocante, une inauguration ou une journée portes-ouvertes !',
                'content' => 'Découvrez dans l’onglet LOCATION notre catalogue de châteaux gonflables et de jeux gonflables qui vous assurera un évènement réussi !<br><br>

                                    Nous vous proposons également à la location – uniquement pour les fêtes de famille – un large choix de chapiteaux et de mobilier de qualité à emporter et au meilleur prix.',
                'img' => 'images/slider/bg5.png'),

            array('logo' => null,
                'title' => 'Il est important pour la réussite de votre fête de famille, fête d’école ou fancy fair ou encore votre soirée de la Saint-Sylvestre de ne pas oublier, les articles et les produits festifs spécifiques à votre évènement.',
                'content' => 'Grâce à nos partenaires et à notre volume d’achat, nous pouvons vous proposer à des prix attractifs des services annexes, tels que : la fourniture de confettis, de serpentins, de lanternes chinoises, de ballons à gonfler à l’hélium, d’articles de décorations et nous réalisons même vos décorations de salle selon votre budget, vos envies et vos goûts.',
                'img' => 'images/slider/bg6.png'),
        );
        $listImg = array(
            array('thumbnail' => 'images/portfolio/recent/image1.jpg',
                'imgFull' => 'images/portfolio/full/image1.jpg',
                'content' => "Nous assurons des prestations Disc-jockey pour les fêtes de famille, les fêtes d’entreprise ou les fêtes publique."),

            array('thumbnail' => 'images/portfolio/recent/image2.jpg',
                'imgFull' => 'images/portfolio/full/image2.jpg',
                'content' => "Le « Light Show » est toujours un subtil dosage entre un matériel à la technologie avancée et sans cesse renouvelé et un matériel plus ″vintage″."),

            array('thumbnail' => 'images/portfolio/recent/image13.jpg',
                'imgFull' => 'images/portfolio/full/image13.jpg',
                'content' => "L’animation d’un évènement ne s’improvise pas, c’est pourquoi, il est toujours bon d’établir une liste des titres que vous souhaiterez impérativement
                                écouter ou ne pas écouter lors de la soirée dansante."),

            array('thumbnail' => 'images/portfolio/recent/image4.jpg',
                'imgFull' => 'images/portfolio/full/image4.jpg',
                'content' => "Les boules à facettes créent toujours une ambiance lumineuse particulière et festive à tout moment de la soirée."),

            array('thumbnail' => 'images/portfolio/recent/image5.jpg',
                'imgFull' => 'images/portfolio/full/image5.jpg',
                'content' => "Une ″petite″ vue d’ensemble sur l’agencement de notre matériel, lors de l’organisation d’une de nos soirées souper-spectacle avec les artistes de la troupe transformistes « LES AFFOLANTES » à Ruisbroek."),

            array('thumbnail' => 'images/portfolio/recent/image6.jpg',
                'imgFull' => 'images/portfolio/full/image6.jpg',
                'content' => "Pour protéger notre matériel de sonorisation et d’éclairage qui est exclusivement composé par des marques aux fiabilités et aux qualités professionnelles reconnues et à la pointe de la technologie, ce dernier est installé et transporté dans des FLIGHTCASE de la marque COMPTECH."),

            array('thumbnail' => 'images/portfolio/recent/image7.jpg',
                'imgFull' => 'images/portfolio/full/image7.jpg',
                'content' => "Nous privilégions, l’installation de nos light shows au-dessus de la piste de danse – comme, ici au Château de DEULIN – ce qui permet aux danseurs en accord avec le tempo du style musical diffusé d’évoluer dans une ambiance à la fois feutrée et haute en couleur."),

            array('thumbnail' => 'images/portfolio/recent/image8.jpg',
                'imgFull' => 'images/portfolio/full/image8.jpg',
                'content' => "Nous animons votre évènement avec les plus grands succès des années ‘70, ‘80, ‘90 ou 2000 et avec les meilleurs titres commerciaux d’aujourd’hui."),

            array('thumbnail' => 'images/portfolio/recent/image9.jpg',
                'imgFull' => 'images/portfolio/full/image9.jpg',
                'content' => "Une bonne qualité de son est obtenue en tenant compte de nombreux paramètres. C’est notre métier de prévoir la disposition et le nombre de haut-parleurs (HP) à disposer pour le meilleur confort acoustique de vos invités."),

            array('thumbnail' => 'images/portfolio/recent/image10.jpg',
                'imgFull' => 'images/portfolio/full/image10.jpg',
                'content' => "Pour la sonorisation de vos évènements extérieures, comme : les braderies, les brocantes ou les fêtes d’école et de village, notre caravane technique est équipée d’une sonorisation complète, d’une loge pour les artistes et d’une caisse pour l’accès aux jeux forains et/ou aux grimages, si ces derniers sont payants."),

            array('thumbnail' => 'images/portfolio/recent/image11.jpg',
                'imgFull' => 'images/portfolio/full/image11.jpg',
                'content' => "Notre remorque de 6 mètres qui est équipée de jeux dits forains, tel que : une « Pêche aux canards », deux jeux de « Massacre » et un jeu de « Rebonds » est un vrai succès auprès des enfants grâce aux très beaux cadeaux à gagner !"),

            array('thumbnail' => 'images/portfolio/recent/image12.jpg',
                'imgFull' => 'images/portfolio/full/image12.jpg',
                'content' => "Voici ″ARTHUR″ la mascotte de notre filiale MH PRODUCTIONS qui non seulement peut vous suggérer des animations intérieures et extérieures grâce à ses artistes, mais, qui a également développé des concepts d’animations originaux à destination des enfants avec ou sans prestations artistiques."),
        );
        $listPartenaires = array(
            array('img' => 'maisonFrancaise.jpg',
                'url' => 'http://www.maisonfrancaise.be/'),

            array('img' => 'boes.jpg',
                'url' => 'http://www.boes-hommes.be/'),

            array('img' => 'tailleurConstant.jpg',
                'url' => 'http://www.tailleurconstantmary.be/'),

            array('img' => 'modesty.jpg',
                'url' => 'http://www.modesty.be/FR/ACCUEIL/index.php'),

            array('img' => 'romeo.jpg',
                'url' => 'http://tailleurliege.be/fr'),

            array('img' => 'chateauLimon.jpg',
                'url' => 'http://www.chateaulimont.be/'),

            array('img' => 'chateauDeulin.jpg',
                'url' => 'http://www.espacedeulin.be/'),

            array('img' => 'chateauModav.jpg',
                'url' => 'http://www.domaineduchateaudemodave.be/'),

            array('img' => 'fermeJose.jpg',
                'url' => 'http://www.fermedejose.be/'),

            array('img' => 'waides.jpg',
                'url' => 'http://www.leswaides.be/'),

            array('img' => 'carmelo.jpg',
                'url' => 'http://www.traiteurcarmelo.be/Accueil.php'),

            array('img' => 'toqueBlanche.jpg',
                'url' => 'http://www.toqueblanche.com/'),

            array('img' => 'cours.jpg',
                'url' => 'http://www.lescours.be'),

            array('img' => 'mascaron.jpg',
                'url' => 'www.mascaron.be'),

            array('img' => 'abracadabre.jpg',
                'url' => 'http://www.abracadabraliege.com/'),

            array('img' => 'feuFollet.jpg',
                'url' => 'http://www.aufeufollet.be/'),

            array('img' => 'magicien.jpg',
                'url' => 'http://www.samy-le-magicien.be/'),

            array('img' => 'affolante.jpg',
                'url' => 'http://www.lesaffolantes.sitew.com/#Accueil.A'),

            array('img' => 'feeDeco.jpg',
                'url' => 'http://www.la-fee-decoration.be/fr/'),
        );
        $listFournisseurs = array(
            array('title' => 'ANTARI',
                'img' => 'antari.jpg',
                'content' => 'Leader mondiale des machines à fumée',
                'url' => 'http://www.antari.com/'),

            array('title' => 'AUDIOFOCUS',
                'img' => 'audiofocus.jpg',
                'content' => 'Fournisseur de système audio de haute qualité',
                'url' => 'http://www.audiofocus.eu/fr/'),

            array('title' => 'BRITEQ',
                'img' => 'briteq.jpg',
                'content' => 'Fournisseur européen de système sons et lumières',
                'url' => 'http://fr.briteq-lighting.com/about'),

            array('title' => 'DENON DJ',
                'img' => 'denon.jpg',
                'content' => 'Constructeur de tables de mixages professionelles',
                'url' => 'http://www.denondj.com/'),

            array('title' => 'JB SYSTEMS',
                'img' => 'jbsystem.jpg',
                'content' => 'Fournisseur de tables de mixage',
                'url' => 'http://fr.beglec.com/'),

            array('title' => 'JB SYSTEMS LIGHT',
                'img' => 'jblight.png',
                'content' => 'Fabricant d\'éclairage professionnel',
                'url' => 'http://fr.beglec.com/'),

            array('title' => 'PALMER',
                'img' => 'palmer.jpg',
                'content' => 'Constructeur et réparateur de matériel audio',
                'url' => 'http://www.palmer-germany.com/'),

            array('title' => 'PIONEER',
                'img' => 'pioneer.jpg',
                'content' => 'Constructeur de matériel audio',
                'url' => 'http://www.pioneer.be/'),

            array('title' => 'SENNHEISER',
                'img' => 'sennheiser.jpg',
                'content' => 'Constructeur et Fournisseur de casque et micro',
                'url' => 'http://fr-fr.sennheiser.com/'),

            array('title' => 'SHOWTEC',
                'img' => 'showtec.jpg',
                'content' => 'Fournisseur d\'effet lumineux',
                'url' => 'http://www.highlite.nl/fr/Shop/Products/Showtec'),

            array('title' => 'SHURE',
                'img' => 'shure.jpg',
                'content' => 'Fabricant de produit de sonorisation',
                'url' => 'http://www.shure.fr/'),

            array('title' => 'SOUNDCRAFT',
                'img' => 'soundcraft.jpg',
                'content' => 'Constructeur de tables de mixage',
                'url' => 'http://www.soundcraft.com/'),
        );

        return view('Frontend.index', compact('listSlides', 'listImg', 'listPartenaires', 'listFournisseurs'));
    }

    public function materiel(){
        $listMateriel = array(
            array('img' => 'images/materiel/mini/01DENON.jpg',
                  'description' => 'Double lecteur DENON « DN D/4500 » USB/MP3 et CD 19’’',
                  'imgGrande' => 'images/materiel/grande/01DENON.jpg',
                  'type' => 'sono'),

            array('img' => 'images/materiel/mini/02JBSYSTEM.jpg',
                'description' => 'Double lecteur JB SYSTEMS « USB 2.2 » USB/MP3 et CD 19’’',
                'imgGrande' => 'images/materiel/grande/02JBSYSTEM.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/01EXERCET.jpg',
                'description' => 'Effet lumineux « EXERCET » de chez JB SYSTEMS LIGHT',
                'imgGrande' => 'images/materiel/grande/01EXERCET.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/03SOUNDCRAFT.jpg',
                'description' => 'Table de mixage SOUNDCRAFT « SPIRIT E6 » de 6 voies d’entrées mono et de 2 voies d’entrées stéréo',
                'imgGrande' => 'images/materiel/grande/03SOUNDCRAFT.JPG',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/02PAR58.jpg',
                'description' => 'Projecteur « PAR 56 » à 146 LEDS de chez SHOWTEC',
                'imgGrande' => 'images/materiel/grande/02PAR58.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/03SMARTBEAM.jpg',
                'description' => 'Effets lumineux « SMART BEAM » de chez JB SYSTEMS LIGHT',
                'imgGrande' => 'images/materiel/grande/03SMARTBEAM.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/04SENNHEISER.jpg',
                'description' => 'Casque SENNHEISER « HD 25-1 II » pour la pré écoute',
                'imgGrande' => 'images/materiel/grande/04SENNHEISER.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/04BOULE.jpg',
                'description' => 'Les boules à facettes créent toujours une ambiance lumineuse particulière et festive à tout moment de la soirée.',
                'imgGrande' => 'images/materiel/grande/04BOULE.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/05SENNHEISER.jpg',
                'description' => 'Micro HF SENNHEISER « EW 100 » pour la scène et discours',
                'imgGrande' => 'images/materiel/grande/05SENNHEISER.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/06SHURE.jpg',
                'description' => 'Micro SHURE « SM58 » pour le DJ et pour le chant',
                'imgGrande' => 'images/materiel/grande/06SHURE.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/05SMARTMOON.jpg',
                'description' => 'Effets lumineux « SMART MOON » de chez JB SYSTEMS LIGHT',
                'imgGrande' => 'images/materiel/grande/05SMARTMOON.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/06PAR56.jpg',
                'description' => 'Projecteur « PAR 56 LONG » spécialement utilisé pour l’éclairage scénique.',
                'imgGrande' => 'images/materiel/grande/06PAR56.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/02JBSYSTEM.jpg',
                'description' => 'Double lecteur JB SYSTEMS « USB 2.2 » USB/MP3 et CD 19’’',
                'imgGrande' => 'images/materiel/grande/02JBSYSTEM.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/07LYRE.jpg',
                'description' => 'Lyre « PHANTOM 250 SPOT » de chez SHOWTEC',
                'imgGrande' => 'images/materiel/grande/07LYRE.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/07PALMER.jpg',
                'description' => 'Ampli PALMER « 800 LX² » que nous utilisons pour les HP BASS et les HP TOP en façade',
                'imgGrande' => 'images/materiel/grande/07PALMER.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/08JBSYSTEM.jpg',
                'description' => 'Ampli JBSYSTEMS « C2-450 SONO PRO » de 2 x 300 watt en 8 Ohms ou de 2 x 450 watt en 4 Ohms pour les HP TOP',
                'imgGrande' => 'images/materiel/grande/08JBSYSTEM.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/09STROBO.jpg',
                'description' => 'Stroboscope DMX 1800 watt de chez SHOWTEC',
                'imgGrande' => 'images/materiel/grande/09STROBO.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/09CROWN.jpg',
                'description' => 'Ampli CROWN « XLS 2500 » de 2 x 440 watt en 8 Ohms ou de 2 x 775 watt en 4 Ohms pour les HP TOP',
                'imgGrande' => 'images/materiel/grande/09CROWN.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/10AUDIOFOCUS.jpg',
                'description' => 'HP AUDIOFOCUS « FR115 » est une enceinte passive d’une haute qualité sonore et acoustique',
                'imgGrande' => 'images/materiel/grande/10AUDIOFOCUS.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/10PUISSANCE.jpg',
                'description' => 'Bloc de puissance « MULTIDIM MKIII » à commande DMX de chez SHOWTEC',
                'imgGrande' => 'images/materiel/grande/10PUISSANCE.jpg',
                'type' => 'divers'),

            array('img' => 'images/materiel/mini/11EFFETS.jpg',
                'description' => 'Nos light shows sont toujours un subtil dosage entre un matériel à la technologie avancée et un matériel à la technologie plus ″vintage″.',
                'imgGrande' => 'images/materiel/grande/11EFFETS.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/11AUDIOFOCUS.jpg',
                'description' => 'HP AUDIOFOCUS « FR115 » est une enceinte passive d’une haute qualité sonore et acoustique',
                'imgGrande' => 'images/materiel/grande/11AUDIOFOCUS.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/12COFFRET.jpg',
                'description' => 'Coffret d’alimentation : IN 360 volt OUT 24 x 220 volts',
                'imgGrande' => 'images/materiel/grande/12COFFRET.jpg',
                'type' => 'sono'),

            array('img' => 'images/materiel/mini/12POURSUITE.jpg',
                'description' => 'Projecteur poursuite « HMI 575 PRO » de chez SHOWTEC avec zoom, iris et changeur de couleur intégré dichroïques.',
                'imgGrande' => 'images/materiel/grande/12POURSUITE.jpg',
                'type' => 'lumiere'),

            array('img' => 'images/materiel/mini/08SPLASH.jpg',
                'description' => 'Effet lumineux « LIGHT SPLASH II » JB SYSTEMS LIGHT',
                'imgGrande' => 'images/materiel/grande/08SPLASH.jpg',
                'type' => 'lumiere'),
        );

        return view('Frontend.materiel', compact('listMateriel'));
    }

    public function partenaires()
    {
        $listPartenaires = array(
            array('img' => 'images/partenaires/credal.jpg',
                'description' => 'La coopérative « CREDAL ASBL » est spécialisée dans le placement éthique, l’accompagnement de projets et l’octroi de crédit solidaire, c’est grâce à leur confiance que nous avons pu faire l’acquisition de notre camion ″NISSAN Atleon″.',
                'url' => 'http://www.credal.be/',
                'alt' => 'Logo credal'
            ),
            array('img' => 'images/partenaires/DEBEULESABINE.png',
                'description' => 'Les lettrages publicitaires « SABINE DE BEULE » sont spécialisée dans la peinture sur les tracteurs poids lourd. Adhésif sur tous les types de véhicules, panneaux, vitrines, calicots, etc. Graphisme et dessins artistiques. Décoration de vitrines pour les fêtes. Sérigraphie et impression sur textile, impression sur film vinyle.',
                'url' => 'http://www.lettragesabine.be',
                'alt' => 'Logo Debeule Sabine'
            ),
            array('img' => 'images/partenaires/dune.jpg',
                'description' => 'L’équipe professionnelle de « DUNE it’s a World of Music » est spécialisée dans la vente, la location et l’installation de matériel de sonorisation et de lumière.',
                'url' => 'https://fr-fr.facebook.com/duneliege',
                'alt' => 'logo groupe dune'
            ),
            array('img' => 'images/partenaires/DUPUISSPRL.jpg',
                'description' => 'La société « PIERRE DUPUIS SPRL » et ses filiales vous propose les services d’une agence bancaire indépendante du réseau ING Belgique, d’un bureau de courtage en assurances toutes compagnies et un département immobilier.',
                'url' => 'http://www.pierre-dupuis.be',
                'alt' => 'logo dupuis SPRL'
            ),
            array('img' => 'images/partenaires/IMPRIMAT.jpg',
                'description' => 'La société « IMPRIMAT SPRL » est notre partenaire bureautique depuis bientôt 20 ans ! Vous y trouverez les conseils d’un personnel disponible et qualifié. Un stock important de matériel de bureau et une large gamme de produits de papeterie,
                           sans oublier, le département POLYPRINT pour la réalisation de vos travaux d’imprimerie.',
                'url' => 'http://www.imprimat.be',
                'alt' => 'logo Imprimat'
            ),
            array('img' => 'images/partenaires/ING.jpg',
                'description' => 'L’agence bancaire indépendante « ING LEMAN » est gérée par Pierre DUPUIS et son personnel cette agence bancaire est située, Place du Général LEMAN, 16 à B-4000 LIÈGE.',
                'url' => 'http://www.ing.be',
                'alt' => 'logo ING'
            ),
            array('img' => 'images/mosaPrestataires/maisonFrancaise.jpg',
                'description' => 'La « MAISON FRANÇAISE » est le spécialiste depuis 1939 du vêtement de cérémonies de suite et de ville en petites et grandes tailles. Costumes enfants de 6 mois à 16 ans ainsi que chaussures et accessoires adaptés aux costumes. Le patron Angelo est à votre service au magasin et vous propose : choix, qualité, prix étudiés, accueil personnalisé pour le succès des hommes.',
                'url' => 'http://www.maisonfrancaise.be/',
                'alt' => 'logo maison française'
            ),
            array('img' => 'images/partenaires/z - MATELEK.jpg',
                'description' => 'Le magasin « MATELEK » est le : Led Lights Center Osram de Liège et est spécialisé dans l’éclairage et le commerce de gros de matériel électrique, y compris le matériel d’installation.',
                'url' => 'http://www.matelek.be/',
                'alt' => 'logo Matelek'
            ),
            array('img' => 'images/partenaires/NISSAN-TRUCKS.png',
                'description' => 'Nous avons choisis de faire confiance aux Ets. VANDORMAEL qui est spécialisé en véhicules utilitaires depuis 3 générations et qui est le concessionnaire officiel « NISSAN TRUCKS » pour le transport de notre matériel.',
                'url' => 'http://www.ets-vandormael.be/',
                'alt' => 'logo Nissan'
            ),
            array('img' => 'images/partenaires/PANTHER PRINT.jpg',
                'description' => 'La société « KOTO PANTHER PRINT » est une imprimerie « made in belgium » pour l’impression en 48h de vos : affiches, brochures, cartes de visite, dépliants, flyers.',
                'url' => 'http://koto.pantherprint.org',
                'alt' => 'logo Panther print'
            ),
            array('img' => 'images/partenaires/deckers.png',
                'description' => 'Les « REMORQUES JOSEPH DECKERS » est le N°1 en Belgique et vous offre la garantie du meilleur service – qualité – prix de la Province de LIÈGE, depuis plus de 38 ans.
                          Vente et location de remorques. Pose d’attelages pour tous types de véhicules. Vente de porte vélo THULE.',
                'url' => 'http://www.remorques-deckers.com',
                'alt' => 'logo remorques Deckers'
            ),
            array('img' => 'images/partenaires/SABAM.jpg',
                'description' => 'La « SABAM » c’est la Société Belge des Auteurs, Compositeurs et Editeurs. Créée en 1922 à l\'initiative d’auteurs, la SABAM regroupe à l\'heure actuelle des milliers d\'auteurs, toutes disciplines confondues. Trop souvent exclusivement associée à la musique,
                          la SABAM revendique son caractère pluridisciplinaire. Cette singularité fait de la SABAM un cas presque unique dans le monde.',
                'url' => 'http://www.sabam.be',
                'alt' => 'logo SABAM'
            ),
            array('img' => 'images/partenaires/SMART.jpg',
                'description' => 'L’ASBL « SMARTBE – PRODUCTIONS ASSOCIÉES » est spécialisée dans la gestion de contrats et la gestion d’Activités artistiques.',
                'url' => 'http://www.smartbe.be',
                'alt' => 'logo SMART'
            ),
            array('img' => 'images/partenaires/SUPERPLASTIC.jpg',
                'description' => 'La société « SUPERPLASTIC » c’est le professionnel des matériaux plastiques et vous propose sur plus de 30000 m² un choix de 36000 références.',
                'url' => 'http://www.superplastic.be',
                'alt' => 'logo Super plastic'
            ),
            array('img' => 'images/partenaires/VEDI.jpg',
                'description' => 'L’entreprise « VEDI EXPRESS » met son savoir-faire à votre service pour vos impressions géantes, vos outils de communications PLV, votre signalétique
                          d’entreprise et vos publicités évènementielles. C’est le N°1 de l’impression grand format au meilleur prix.',
                'url' => 'http://www.vedi-express.com',
                'alt' => 'logo vedi'
            ),
            array('img' => 'images/partenaires/VIVIUM.jpg',
                'description' => 'Le bureau d’assurances « DUPUIS SPRL » situé, Place du Général LEMAN, 16 à B-4000 LIÈGE, vous propose un service complet pour vos assurances et services bancaires.',
                'url' => 'http://www.vedi-express.com',
                'alt' => 'logo vivium'
            ),
            array('img' => 'images/partenaires/VLAN.jpg',
                'description' => 'Les journaux « VLAN » font partie du Groupe Rossel et vous propose avec ses éditions personnalisées toutes l’actualité de votre région et sur « VLAN.BE » – le portail des petites annonces de Belgique – achetez ou vendez des biens neufs ou d\'occasion grâce aux nombreuses petites annonces classées en rubriques avec des descriptions détaillées et photos.',
                'url' => 'http://www.vlan.be/fr/index.php',
                'alt' => 'logo VLAN'
            )
        );

        return view('Frontend.partenaires', compact('listPartenaires'));
    }

    public function sendDevis(DevisRequest $request){
        Mail::send('emails.devis', ['data' => $request], function($message)
        {
            $message->to('pierreclotuche@gmail.com', 'Pierre Clotuche')->subject('Demande de devis');
        });

        return redirect('/devis')->with('status', '<strong>Parfait!</strong> Nous avons bien reçu votre message. Nous vous contacterons dès que possible.');
    }

    public function sendMessage(MessageRequest $request){
        Mail::send('emails.contact', ['data' => $request], function($message)
        {
            $message->to('pierreclotuche@gmail.com', 'Pierre Clotuche')->subject('Client');
        });

        return redirect('contactez-nous')->with('status', '<strong>Parfait!</strong> Nous avons bien reçu votre message. Nous vous contacterons dès que possible.');
    }

    public function location(){
        $listLocation = array(
            array('titre' => 'SOURCES',
                  'color' => 'red',
                  'items' => array(
                      'LECTEUR CD SIMPLE USB' => '25,00',
                      'LECTEUR CD SYNQ DMC 1000 (PITCH CONTROL / CUE / EFFECTS) + LECTURE USB' => '40,00',
                      'LECTEUR CD PIONEER CDJ 2000 NEXUS (PITCH CONTROL / CUE / EFFECTS/LINK…) + LECTURE USB' => '95,00',
                      'LECTEUR MINI DISC SONY' => '35,00',
                      'LECTEUR CASSETTE PIONEER' => '20,00',
                      'PLATINE TECHNICS SL 1200 MKII AVEC CELLULE « ORTOFON Concorde »' => '45,00',
                      'LECTEUR DVD' => '13,00'
                  )),
            array('titre' => 'MICROS FILAIRES / HF + ACCESSOIRES',
                'color' => 'red',
                'items' => array(
                    'SHURE 565 SD' => '15,00',
                    'SHURE SM 57' => '15,00',
                    'SHURE SM 58' => '15,00',
                    'SHURE BETA 58' => '17,50',
                    'SHURE BETA 52 (PRISE DE SON GROSSE CAISSE / BASSE / CONTREBASSE…)' =>'19,50',
                    'SHURE PG 81 – CONDENSATEUR (PRISE DE SON CHŒUR / INSTRUMENTS)' => '25,00',
                    'SHURE KSM 137 – CONDENSATEUR (PRISE DE SON CHŒUR / INSTRUMENTS)' => '30,00',
                    'SHURE SM 98 / BETA 98 – CONDENSATEUR (PRISE DE SON CUIVRE / TOMS)' => '30,00',
                    'SENNHEISER MD 409' => '17,50',
                    'IN-EAR (KIT 3 PIÈCES)' => '170,00',
                    'KIT BATTERIE 7 MICROS + PIEDS (1 x BETA 52 / 1 x MD 409 / 3 x SM 98 / 2 x C 391)' => '135,00',
                    'CÂBLE MICRO DE 10M EN XLR IN / OUT' => '5,00',
                    'PIED DE MICRO' => '6,00',
                    'JB SYSTEMS HF (MAIN OU SERRE TÊTE)' => '35,00',
                    'SENNHEISER HF (MAIN)' =>'40,00',
                    'SENNHEISER HF (SERRE-TÊTE)' => '45,00',
                    'SHURE HF SM 58 (MAIN)' => '45,00',
                    'PIED DE MICRO AVEC PINCE HF' => '9,00'
                )),
            array('titre' => 'TABLE DE MIXAGE DISC-JOCKEY / SCÈNE',
                'color' => 'red',
                'items' => array(
                    'PIONEER DJM 400 (2 x LINE / 3 x PHONO / 1 x MICRO)' => '50,00',
                    'PIONEER DJM 800 (4 x LINE / 2 x PHONO / 2 x MICRO)' => '70,00',
                    'YAMAHA (6 ENTRÉES MICROS + LINE)' => '40,00',
                    'YAMAHA (16 VOIES)' => '60,00',
                    'YAMAHA (24 VOIES AVEC EFFETS)' => '80,00',
                    'SOUNDCRAFT K3 TH. (40/8/2 AVEC MATRIX 4 x 12 – 8 AUX.)' => '250,00',
                    'MULTICÂBLE 12 P (50 MÈTRES – 10 IN / 2 OUT AVEC ÉPANOUI ET STAGE BOX)' => '65,00',
                    'MULTICÂBLE 20 P (30 MÈTRES – 16 IN / 4 OUT AVEC ÉPANOUI ET STAGE BOX SUR ENROULEUR)' => '40,00',
                    'MULTICÂBLE 28 P (30 MÈTRES – 24 IN / 4 OUT AVEC ÉPANOUI ET STAGE BOX)' => '55,00',
                    'DI BOX SCV DI 2 MKII – ACTIVE (BOOST / ATTÉN. / Gnd-LIFT)' => '17,00',
                    'DI BOX DIB 200 – ACTIVE (PHASE REVERSE / Lo & Hi CUT / ATTÉN. / Gnd-LIFT)' => '17,00'
                )),
            array('titre' => 'PÉRIPHÉRIQUES / EFFETS',
                'color' => 'red',
                'items' => array(
                    'ÉGALISEUR 2 x 1/3 OCTAVES APEX GX 230' => '45,00',
                    'ÉGALISEUR 2 X 1/3 OCTAVES SYMETRIX 533 E' => '45,00',
                    'FILTRE ACTIF DBX 223 Xs (2 VOIES STÉRÉO)' => '45,00',
                    'MULTI-EFFETS YAMAHA SPX 900/990 (REVERB/ECHO/CHORUS/DELAY/PHASER/PITCH…)' => '48,00',
                    'MULTI-EFFETS LEXICON PCM 80 (REVERB/ECHO/CHORUS/DELAY/PHASER/PITCH…) FULL STÉRÉO' => '53,00'
                )),
            array('titre' => 'AMPLIS',
                'color' => 'red',
                'items' => array(
                    'CROWN MA 600/602 (2 x 245W – 8 Ω / 2 x 340W – 4 Ω)' => '40,25',
                    'CROWN/AMCRON MA 1200/1202 (2 x 330W – 8 Ω / 2 x 495W – 4 Ω)' => '52,35',
                    'CROWN/AMCRON MA 2400 (2 x 550W – 8 Ω / 2 x 830W – 4 Ω)' => '64,45',
                    'CROWN/AMCRON MA 2400 + 1 MA 1200 (2 x 880W – 8 Ω / 2 x 1325W – 4 Ω)' => '100,75',
                    'CROWN MA 5000 VZ + 1 MA 2400 + 1 MA 600 (2 x 2180W – 8 Ω / 2 x 3170W – 4 Ω)' => '159,15'
                )),
            array('titre' => 'ENCEINTES',
                'color' => 'red',
                'items' => array(
                    'AUDIOFOCUS "TOP" (ENCEINTE À 2 VOIES DE 350W – 75 x 45 x 35 CM)' => '34,20',
                    'AUDIOFOCUS "BASS" (ENCEINTE À 1 VOIE DE 600W – 115 x 70 x 60 CM)' => '46,30',
                    'AUDIOFOCUS "RETOUR SCÈNE" (ENCEINTE À 2 VOIES DE 300W – 67 x 50 x 39 CM)' => '36,65',
                    'PIED POUR HP AUDIOFOCUS' => '12,50',
                    'ELECTRO-VOICE SX 100 (ENCEINTE À 2 VOIES DE 200W – 59 x 43 x 31 CM)' => '34,20',
                    'ELECTRO-VOICE SX 300 (ENCEINTE À 2 VOIES DE 300W – 59 x 43 x 31 CM)' => '36,65',
                    'CELESTION CX 1220 (ENCEINTE À 2 VOIES DE 200W – 62 x 40 x 34 CM)' => '34,20',
                    'PIED POUR HP ELECTRO-VOICE OU CELESTION' => '11,05',
                    'DS 512 (ENCEINTE DE CONFÉRENCE À 2 VOIES DE 40W – 23 x 16 x 16 CM)' => '17,10',
                    'PIED POUR HP DS 512' => '9,85'
                )),
            array('titre' => 'KIT RÉGIES DISC-JOCKEY',
                'color' => 'red',
                'items' => array(

                )),
            array('titre' => 'KIT 2 HP + 1 AMPLI + CÂBLES',
                'color' => 'red',
                'items' => array(
                    '400W (2 x 200W) CROWN MA 600 + 2 CELESTION CX 1220' => '89,00',
                    '600W (2 x 300W) CROWN/AMCRON MA 1200 + ELECTRO-VOICE SX 300' => '107,15',
                    '700W (2 x 350W) CROWN/AMCRON MA 1200 + AUDIOFOCUS « TOP »' =>  '155,55'
                )),
            array('titre' => 'KIT KARAOKÉ',
                'color' => 'red',
                'items' => array()),
            array('titre' => 'KIT CONFÉRENCE',
                'color' => 'red',
                'items' => array()),
            array('titre' => 'INTERPHONIE',
                'color' => 'red',
                'items' => array(
                    'INTERPHONE EAR MONITORING HF SHURE PSM 200' => '58,40',
                    'INTERPHONE CLEARCOM MS 232 (STATION DE BASE)' => '40,25',
                    'BELT PACK CLEARCOM RS 501' => '17,10',
                    'INTERPHONE – SANS FIL – TELEX TR 200 (STATION DE BASE – FIXE)' => '58,40',
                    'BELT PACK TELEX BTR 200' => '23,15',
                    'CASQUE INTERPHONE BEYER DT 109 / 190' => '17,10',
                    'CASQUE INTERPHONE BEYER DT 390' => '19,52',
                    'CASQUE D’ÉCOUTE SENNHEISER HD 2xx' => '11,05',
                    'CASQUE D’ÉCOUTE JBS HP 2000 PRO' => '11,05',
                    'TALKIE WALKIE COBRA MT 925' => ' 17,10',
                    'OREILETTE AVEC MICRO « CRAVATTE » POUR COBRA MT 925' => '11,05'
                )),
            array('titre' => 'PUBLIC ADRESS',
                'color' => 'red',
                'items' => array(
                    'TROMPE DE RUE (30W)' => '8,00',
                    'PROJECTEUR DE SON TOA PJ 200 (20W)' => '15,00',
                    'DIFFUSEUR PAVILLON RCF HD 216/ST (20/30W)' => '17,10',
                    'AMPLI MÉLANGEUR 100V (120W) AVEC 4 MICROS/AUX. + 1 AUX.' => '30,50',
                    'AMPLI 100V (250W)' => '35,00',
                    'AMPLI PUISSANCE CREST (240W) (2 LIGNES 100V DE 120W)' => '56,30',
                    'SONORISATION "PA" POUR VOITURE (3 CÔNES + AMPLI-CASSETTE PASO 30 W) ENLEVÉ' => '74,45',
                    'SONORISATION "PA" POUR VOITURE (3 CÔNES + AMPLI-CASSETTE PASO 30 W) PLACÉ PAR NOS SOINS' => '98,65',
                    'MÉGAPHONE PORTATIF (AVEC SIRÈNE)' => '29,20'
                )),
            array('titre' => 'RACKS CONFÉRENCES',
                'color' => 'red',
                'items' => array(
                    'RACK 1 : 300W = 1CD / USB + 1 MIX 16 A&H + 2MICROS FILAIRES + 2 HP + PIEDS' => '130,00',
                    'RACK 2 : 800W = 1CD / USB + 1 MIX + 2MICROS FILAIRES + 4 HP + PIEDS' => '160,00',
                    'RACK 3 : 800W = 1 DOUBLE CD + MIX BEAT6 USB + 1MICRO FILAIRE + 6 HP + PIEDS' => '195,00',
                    'SUPPLÉMENT MICRO H-F' => '40,00'
                )),
            array('titre' => 'PROJECTEURS "PAR"',
                'color' => 'blue',
                'items' => array(
                    'PAR 36 (6V – 30W)' => '9,85',
                    'PAR 56 SHORT (230V – 300W)' => '9,25',
                    'PAR 56 LONG (230V – 300W)' => '9,85',
                    'PAR 56 SHORT (230V – 300W) BARRE DE 4 PAR AVEC CROCHET' => '29,35',
                    'PAR 64 (230V – 500W)' => '12,25',
                    'PAR 64 (230V – 500W) BARRE DE 6 PAR AVEC CROCHET' => '43,90',
                    'PAR SOURCE 4 (230V – 575W) BARRE DE 4 PAR AVEC BLOC DE PUISSANCE DMX INTÉGRÉ' => '64,45'
                )),
            array('titre' => 'PROJECTEURS "THÉÂTRE – CINÉMA" – POURSUITE',
                'color' => 'blue',
                'items' => array(
                    'PLAN CONVEXE ADB F 51 (500W)' => '15,90',
                    'PLAN CONVEXE ADB C 101 (1000W)' => '18,35',
                    'COUPE FLUX POUR ADB C 101' => '8,05',
                    'PROJECTEUR DE PRISE DE VUE "OPEN FACE" (1000W) AVEC PARAPLUIE ET PIED' => '40,25',
                    'PROJECTEUR FOCALISABLE PC (1000W)' => '15,00',
                    'PROJECTEUR MIG (400W) HQI' => '30,00',
                    'I-COLOR (PAR 2 PIÈCES) AVEC ACCESSOIRES ET COMMANDE' => '70,00',
                    'DÉCOUPE ROBERT JULIAT SX 614 (1000W)' => ' 36,65',
                    'IRIS POUR DÉCOUPE ROBERT JULIAT SX 614' => '9,85',
                    'POURSUITE ROBERT JULIAT (1000W) AVEC PIED ET IRIS' => '46,30',
                    'POURSUITE (1000W) HALLOGÈNE AVEC PIED' => '58,00',
                    'POURSUITE 575 HMI AVEC PIED (5 COULEURS)' => '80,00',
                    'POURSUITE FSP 575 AVEC PIED (5 COULEURS + DISPERSION DE FAISCEAU)' => '90,00'
                )),
            array('titre' => 'ÉCLAIRAGES à LED’s AVEC DMX',
                'color' => 'blue',
                'items' => array(
                    'BARRE DE 4 PAR 64 LED FULL AUTOMATIQUE' => '55,00',
                    'PROJECTEUR MINICOLOR 7TC DMX' => '16,00',
                    'PROJECTEUR POWER BANK' => '50,00',
                    'PROJECTEUR STAGE COLOR 48 (PAR 2 PIÈCES) AVEC COMMANDE' => '60,00',
                    'LED BLINDER (PAR 2 PIÈCES)' => '50,00',
                    'LED PIXEL BAR (PAR 2 PIÈCES)' => '60,00',
                    'LED BT-PAR 18TC' => '35,00',
                    'PROJECTEUR PLANO 7TC' => '16,00'
                )),
            array('titre' => 'EFFETS "DISCOTHÈQUE"',
                'color' => 'blue',
                'items' => array(
                    'BOULE À FACETTES 30CM AVEC 1 PAR 36' => '12,00',
                    'BOULE À FACETTES 40CM AVEC 1 PAR 36' => '22,00',
                    'BOULE À FACETTES 50CM AVEC 1 PAR 36' => '32,00',
                    'KALÉIDOSCOPE' => '25,00',
                    'ORION LED (224 LED’s) PUISSANCE ET ATTRAIT EXCEPTIONNEL' => '31,65',
                    'CYCLOPE LED' => '30,00',
                    'LED DEVIL II (LED DE 10W AVEC 3 DISQUES OPTIQUES ET 6 LENTILLES)' => '35,00',
                    'INVADER (3 EFFETS EN 1 : LED DEVIL + EFFET STROBO + LASER ROUGE/VERT)' => '41,30',
                    'THUNDERBIRD' => '25,00',
                    'EXERCET' => '25,00',
                    'SPLASH II' => '20,00',
                    'MINI MOON BLANC' => '20,00',
                    'WILD BLAZE' => '25,00',
                    'THOMAHAWK' => '30,00',
                    'SMART BEAM (PAR 4 PIÈCES) MAÎTRE/ESCLAVES' => '50,00',
                    'SMART MOON (PAR 4 PIÈCES) MAÎTRE/ESCLAVES' => '50,00',
                    'TUBE UV 120CM AVEC ARMATURE' => '15,00',
                    'PROJECTEUR UV 400W' => '30,00'
                )),
            array('titre' => 'EFFETS "VINTAGE"',
                'color' => 'blue',
                'items' => array(
                    'ARAIGNÉE 4 PAR 36' => '15,00',
                    'ARAIGNÉE 10 PAR 36' => '35,00',
                    'RAMPE HORIZONTALE ET OSCILLANTE DE 4 PAR 36' => '15,00',
                    'RAMPE VERTICALE ET OSCILLANTE DE 4 PAR 36' => '15,00',
                    'ROTAMAX 3 x 6 FAISCEAUX BLANCS' => '25,00',
                    'STAGE LIGHT 1 x 6 FAISCEAUX DE COULEUR' => '22,00',
                    'TRIPLE W HEEL' => '22,00',
                    'SCAN FUNKY (MULTITUDE DE MIROIRS)' => '35,00',
                    'SCAN SPINNER (1 MIROIR)' => '35,00',
                    'CIEL CYCLOPE (575 HMI)' => '45,00',
                    'CORONA (575 HMI)' => '35,00',
                    'MAGIC FOL 003' => '22,00',
                    'CROCOLIGHT' => '22,00'
                )),
            array('titre' => 'EFFETS "EXTÉRIEURS"',
                'color' => 'blue',
                'items' => array(
                    'SKYTRACER 1200 HMI'=>'107,15',
                    'SKYTRACER 2500HMI "COMET" (DOUBLE ROTATION)'=>'150,00'
                )),
            array('titre' => 'MACHINES à FUMÉES / BULLES + ARTIFICES',
                'color' => 'blue',
                'items' => array(
                    'FUMIGÈNE PETIT MODÈLE – AVEC PRODUIT' => '40,00',
                    'FUMIGÈNE GROS MODÈLE – AVEC PRODUIT' => '55,00',
                    'FUMIGÈNE DE 2000W – AVEC PRODUIT' => '50,00',
                    'HAZER (BROUILLARD)' => '45,00',
                    'MACHINE À NEIGE – AVEC PRODUIT' => '65,00',
                    'MACHINE À MOUSSE – SANS PRODUIT' => '35.00',
                    'MACHINE À BULLES – SANS PRODUIT' => '35.00',
                    'CANON À CONFETTIS (SOCLE + DÉTONATEUR 220V) PROJECTIONS À 8 MÈTRES (2 PIÈCES)' => '45,00',
                    'CARTOUCHE (PAR PIÈCE)' => '25.00'
                )),
            array('titre' => 'STROBOSCOPES',
                'color' => 'blue',
                'items' => array(
                    'STROBOSCOPE (300W)' => '20,00',
                    'STROBOSCOPE (1500W) DIMMABLE' => '32,85',
                    'STROBOSCOPE (1800W) AVEC OU SANS DMX' => '37,00'
                )),
            array('titre' => 'EFFETS "ROBOTISÉS"',
                'color' => 'blue',
                'items' => array(
                    'MARTIN MAC 250+' => '58,40',
                    '4 MARTIN MAC 250+ AVEC CONSOLE SM 1612' => '247,80',
                    'SCAN CLUBSCAN 25W LED (PAR 4 PIÈCES) AVEC COMMANDE' => '95,00',
                    'LYRES CLUB HEAD 25W LED (PAR 4 PIÈCES) AVEC COMMANDE' => '120,00',
                    'LYRES BT36II (PAR 4 PIÈCES)' => '125,00',
                    'LYRES SPOT BT250 MSD DÉCHARGE (PAR 4 PIÈCES)' => '300,00'
                )),
            array('titre' => 'KITS LIGHT + DJ',
                'color' => 'blue',
                'items' => array(
                    'KIT 01 : 2 x 4 PAR 56 + PIEDS ET LM400' => '50,00',
                    'KIT 02 : 2 x 4 PAR 64 LED + PIEDS ET LEDCON 02' => '70,00',
                    'KIT 03 : IDEM KIT 02 + 2 EFFETS' => '100,00',
                    'KIT 04 : IDEM KIT 02 + 2 CLUBSCAN ET PONT DE 6 MÈTRES' => '155,00',
                    'KIT 05 : PONT DE 12 MÈTRES + 4 CLUBSCAN + 16 PAR 64 LED + LASER' => '260,00'
                )),
            array('titre' => 'LASERS',
                'color' => 'blue',
                'items' => array(
                    'LASER RADIANT 24 mW 2 COULEURS (BLEU/VERT)' => '47,35',
                    'TW IN EFFECT LASER 3 COULEURS (40 ET 80 Mw)' => '55,00',
                    'TW IN BEAM LASER 3 COULEURS (70 ET 150 Mw)' => '70,00',
                    'LASER FULL COLOR (1W )' => '125,00'
                )),
            array('titre' => 'DISPATCHING',
                'color' => 'blue',
                'items' => array(
                    '10 CIRCUITS ON/OFF + FLASH' => '17,10'
                )),
            array('titre' => 'MODULATEUR / CHENILLARD',
                'color' => 'blue',
                'items' => array(
                    'LM 400 – 4 x 1KW' => '35,25'
                )),
            array('titre' => 'PIEDS',
                'color' => 'green',
                'items' => array(
                    'PIED ALU SIMPLE (3,0 MÈTRES POUR 35 KG MAXIMUM)' => '10,00',
                    'PIED À TREUIL « WORK LW 155 R » (5,0 MÈTRES POUR 150 KG MAXIMUM)' => '45,00',
                    'PIED À TREUIL « WORK LW 255 R » (6,0 MÈTRES POUR 255 KG MAXIMUM)' => '55,00',
                    'PIED À TREUIL (3,0 MÈTRES POUR 60 KG MAXIMUM)' => '18,00',
                    'PIED « VMB » À TREUIL (3,4 MÈTRES POUR 65 KG MAXIMUM)' => '30,00',
                    'PIED « VMB » À TREUIL (6,0 MÈTRES POUR 95 KG MAXIMUM)' => '35,00'
                )),
            array('titre' => 'STRUCTURE TRIANGULAIRE EN 29/29/29',
                'color' => 'green',
                'items' => array(
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 0,29 MÈTRE' => '8,05',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 0,50 MÈTRE' => '8,05',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 0,71 MÈTRE' => '8,05',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 1 MÈTRE' => '8,05',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 1,5 MÈTRES' => '9,26',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 2 MÈTRES' => '9,26',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 3 MÈTRES' => '12,95',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – COINS 2 DIRECTIONS 90° – 2 x HOR. – C003' => '11,68',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – COINS 2 DIRECTIONS 135° – 2 x HOR. – C005' => '14,10',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – COINS 2 DIRECTIONS – 1 x HOR. 1 x VER. – C007' => '11,70',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – COINS 3 DIRECTIONS – 2 x HOR. 1 x VER. – C012' => '14,10',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – COINS 3 DIRECTIONS – 2 x HOR. 1 x VER. – C013' => '14,10',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – COINS 4 DIRECTIONS – 4 x HOR. – C016' => '16,55',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – T 3 DIRECTIONS – 3 x HOR. – C017' => '14,10',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – T 3 DIRECTIONS – 2 x HOR. 1 x VER. – C018' => '14,10',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – T 4 DIRECTIONS – 3 x HOR. 1 x VER. – C020' => '16,55',
                    'STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ – Cercle 4 MÈTRES DIAMÈTRE (APEX DOWN – 4 CUT)' => '106,80',
                    'EMBASE POUR STRUCTURE TRIANGULAIRE EN ALUMINIUM SOUDÉ' => '8,50'
                )),
            array('titre' => 'STRUCTURE CARRÉE EN 29/29/29/29',
                'color' => 'green',
                'items' => array(
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 0,21 MÈTRE' => '9,30',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 0,29 MÈTRE' => '9,30',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 0,50 MÈTRE' => '9,30',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 0,71 MÈTRE' => '9,30',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 1 MÈTRE' => '9,30',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 2 MÈTRES' => '11,70',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 2,5 MÈTRES' => '14,10',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – ÉLÉMENT DE 3 MÈTRES' => '16,55',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – COINS 2 DIRECTIONS – C003' => '14,10',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – COINS 3 DIRECTIONS – C012' => '16,55',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – COINS 4 DIRECTIONS – C016' => '18,95',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – T 3 DIRECTIONS – C017' => '16,55',
                    'STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ – T 4 DIRECTIONS  – C020' => '18,95',
                    'EMBASE POUR STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ' => '9,30',
                    'EMBASE LOURDE (100 CM DE DIAMÈTRE) POUR STRUCTURE CARRÉE EN ALUMINIUM SOUDÉ' => '16,55'
                )),
            array('titre' => 'ACCESSOIRES DIVERS',
                'color' => 'green',
                'items' => array(
                    'CROCHET' => '0,90',
                    'SANGLE' => '0,90',
                    'CHAINE DE SÉCURITÉ AVEC MOUSQUETON' => '0,90',
                    'ÉLINGUE ACIER DE SÉCURITÉ AVEC MOUSQUETON' => '0,90',
                    'SPIGOT TV – M 10' => '0,90',
                    'T-BAR POUR SUPPORT DE STRUCTURE' => '4,35',
                    'T-BAR POUR 2 OU 4 PROJECTEURS' => '5,45'
                )),
            array('titre' => 'LUTRIN, PODIUMS + ACCESSOIRES',
                'color' => 'red-black',
                'items' => array(
                    'LUTRIN (PUPITRE ORATEUR) POUR CONFÉRENCE EN MDF GRIS VERNIS ET ALU AVEC FIXATION MICRO ET ÉCLAIRAGE' => '28,15',
                    'LUTRIN (PUPITRE ORATEUR) POUR CONFÉRENCE EN PLEXI TRANSPARENT AVEC FIXATION MICRO ET ÉCLAIRAGE' => '46,30',
                    'FLEXIBLE D’ÉCLAIRAGE (POUR LUTRIN)' => '12,25',
                    'PODESTRE (PODIUM) EN 1 MÈTRE SUR 2 MÈTRES ET EN : 40 – 60 – 80 CM DE HAUTEUR' => '19,50',
                    'ESCALIER POUR PODESTRE 60 CM' => '14,10',
                    'JUPE POUR PODESTRE EN : 40 – 60 – 80 CM DE HAUTEUR (PRIX AU MÈTRE COURANT)' => '2,50'
                )),
            array('titre' => 'TEXTILES',
                'color' => 'red-black',
                'items' => array(

                )),
            array('titre' => 'CÂBLAGE ÉLECTRIQUE',
                'color' => 'yellow',
                'items' => array(
                    'ALLONGE BLANC MONOPHASÉE = 1 x "M"/"F" EN 220V  – 16A EN 3 MÈTRES' => '1,50',
                    'ALLONGE BLANC MONOPHASÉE = 1 x "M"/"F" EN 220V – 16A EN 5 MÈTRES' => '2,50',
                    'ALLONGE BLANC MONOPHASÉE = 1 x "M"/"F" EN 220V – 16A EN 10 MÈTRES' => '5,00',
                    'MULTIPRISE BLANCHE MONOPHASÉE = 1 x "M" ET 3 x "F" EN 220V – 16A en 1,5 MÈTRES' => '2,50',
                    'ALLONGE NOIRE MONOPHASÉE = 1 x "M" ET 1 x "F" EN 220V – 32A EN 50 MÈTRES' => '30,00',
                    'ALLONGE NOIRE TRIPHASÉE = 1 X "M" EN 380V – 32A/63A ET 1 x "F" EN 380V – 32A/63A EN 15 MÈTRES' => '18,00',
                    'CÂBLE ÉCLATÉ TRIPHASÉ/MONOPHASÉ = 1 x "M" EN 380V – 32A IN / 3 x "F" EN 220V – 16A OUT' => '15,00',
                    'ALLONGE TRIPHASÉE = 1 x "M" EN 380V – 63A IN / 1 x "F" EN 380V – 32A OUT' => '15,00'
                )),
            array('titre' => 'DISTRIBUTION ÉLECTRIQUE',
                'color' => 'yellow',
                'items' => array(
                    'TABLEAU AVEC FUSIBLES TRIPHASÉ/MONOPHASÉ = 1 x "M" 380V – 32A/63A IN / 3 x "F" 220V – 16A' => '25,00',
                    'TABLEAU AVEC FUSIBLES TRIPHASÉ/MONOPHASÉ = 1 x "M" 380V – 32A/63A IN / 12 x "F" 220V – 16A' => '36,30',
                    'TABLEAU AVEC FUSIBLES ET DIFFÉRENTIEL TRIPHASÉ/MONOPHASÉ = 1 x "M" 380V – 32A/63A IN / 12 "F" x 220V – 16A' => '65,00'
                )),
            array('titre' => 'CÂBLAGE SIGNAL / HP',
                'color' => 'yellow',
                'items' => array(
                    'ALLONGE LIGNE/MICRO (1 x XLR "M" / 1 x XLR "F") 5 MÈTRES' => '3,50',
                    'ALLONGE LIGNE/MICRO (1 x XLR "M" / 1 x XLR "F") 10 MÈTRES' => '7,25',
                    'ALLONGE LIGNE/MICRO (1 x XLR "M" / 1 x XLR "F") 20 MÈTRES' => '14,50',
                    'ALLONGE LIGNE/MICRO (12 x XLR "M" / 4 x XLR "F") 30 MÈTRES' => '21,50',
                    'ALLONGE HP (SPEAKON) 5 MÈTRES' => '5,00',
                    'ALLONGE HP (SPEAKON) 10 MÈTRES' => '9,00',
                    'ALLONGE HP (SPEAKON) 20 MÈTRES' => '16,00',
                    'ALLONGE HP (SPEAKON) 50 MÈTRES' => '30,00',
                    'ALLONGE HP (SPEAKON) 100 MÈTRES (SUR ENROULEUR)' => '50,00',
                    'ALLONGE HD (HDMI) 10 MÈTRES' => '4,50'
                )),
            array('titre' => 'MATÉRIEL AUDIO-VISUEL – PROJECTEURS VIDÉOS',
                'color' => 'mauve',
                'items' => array(
                    'VIDÉO CONTROLLER BT-VMS (SWITCH 3 SOURCES)' => '35.00',
                    'PROJECTEUR (2700 lumens)' => '95,00',
                    'PROJECTEUR (6000 lumens)' => '230,00',
                    'ECRAN 50’' => '120.00',
                    'TOTEM (PIED)' => '30.00'
                )),
            array('titre' => 'MATÉRIEL AUDIO-VISUEL – ÉCRANS',
                'color' => 'mauve',
                'items' => array(
                    'DÉROULABLE FACE DE 4 MÈTRES SUR 3 MÈTRES AVEC 2 PIEDS À TREUIL' => '70,00',
                    'DÉROULABLE 240 CM + PIED CENTRAL' => '50,00',
                    'ÉCRAN DE RÉTRO-PROJECTION DE 4 MÈTRES SUR 3 MÈTRES AVEC 2 PIEDS À TREUIL' => '70,00',
                    'ÉCRAN LED P 37,5 VJ 12,5 M² AVEC CONTRÔLEUR PC ET ACCÈS (MONTÉ, GÉRÉ, DÉMONTÉ)' => '850,00',
                    'TOTEM LED 4 PIEDS 1,2 MÈTRES SUR 2.4 MÈTRES' => '850.00',
                    'ÉCRAN LED "TRELLIS" AVEC CONTRÔLEUR PC ET ACCÈS DE 12 MÈTRES SUR 2,4 MÈTRES' => '400,00'
                )),
            array('titre' => 'TRANSPORT ET PRISE EN CHARGE',
                'color' => 'green-light',
                'items' => array(
                    'PRÉPARATION, PRISE EN CHARGE, CHARGEMENT, TRANSPORT, LIVRAISON ET REPRISE EN CAMIONNETTE 12 m3' => '30,25',
                    'PRÉPARATION, PRISE EN CHARGE, CHARGEMENT, TRANSPORT, LIVRAISON ET REPRISE EN CAMIONNETTE 20 m3' => '42,35'
                )),
            array('titre' => 'FRAIS DE KILOMÈTRAGE',
                'color' => 'green-light',
                'items' => array(
                    'PAR KM PARCOURUS EN CAMIONNETTE 12 m3' => '0,4225',
                    'PAR KM PARCOURUS EN CAMIONNETTE 20 m3' => '0,6835'
                )),
            array('titre' => 'MAIN D’OEUVRE',
                'color' => 'green-light',
                'items' => array(
                    'MONTAGE ET/OU DÉMONTAGE DU MATÉRIEL LOUÉ (PRIX PAR HEURE)' => '70,35',
                    'PRESTATION D’UN TECHNICIEN/RÉGISSEUR (PRIX PAR HEURE)' => '70,35',
                    'PRESTATION D’UN TECHNICIEN/RÉGISSEUR (PRIX PAR JOURNÉE)' => '375,00'
                )),
            array('titre' => 'TARIFS DÉGRESSIF',
                'color' => 'green-light',
                'no_euro' => true,
                'items' => array(
                    '1 JOUR' => 'x 1,0',
                    '2 JOURS' => 'x 1,5',
                    '3 JOURS' => 'x 1,8',
                    '4 JOURS' => 'x 2,1',
                    '5 JOURS' => 'x 2,2',
                    '1 SEMAINE' => 'x 2,5',
                    '10 JOURS' => 'x 3,0',
                    '2 SEMAINES' => 'x 3,5',
                    '3 SEMAINES' => 'x 3,8',
                    '1 MOIS' => 'x 4,0'
                )),
            array('titre' => 'CAUTIONS',
                'one_line' => true,
                'color' => 'green-light',
                'items' => array(
                    'LE PAYEMENT D’UNE GARANTIE DE MINIMUM 200,00 € EN CASH SERA DEMANDÉ AU CLIENT POUR UNE LOCATION "CLASSIQUE".' => '',
                    'LE PAYEMENT D’UNE GARANTIE DE MINIMUM 750,00 € EN CASH SERA DEMANDÉ AU CLIENT POUR UNE LOCATION "VIDÉO ET ÉCRAN".' => '',
                    'CE MONTANT LUI SERA RESTITUÉ APRÈS VÉRIFICATION DU MATÉRIEL.' => ''
                )),
            array('titre' => 'PAIEMENT',
                'one_line' => true,
                'color' => 'green-light',
                'items' => array(
                    'LE MONTANT TOTAL DE LA LOCATION SERA PAYÉ À NOTRE ADRESSE, AU GRAND COMPTANT ET SANS ESCOMPTE, LE JOUR DE L’ENLÈVEMENT DU MATÉRIEL, SAUF INDICATION CONTRAIRE AU MOMENT DE LA COMMANDE.' => ''
                )),
            array('titre' => 'CONDITIONS GÉNÉRALES',
                'one_line' => true,
                'color' => 'green-light',
                'items' => array(
                    'LA RÉSERVATION NE SERA EFFECTIVE QU’APRÈS SIGNATURE D’UN CONTRAT DE LOCATION ET PERCEPTION DE LA CAUTION. PAR LA SEULE SIGNATURE DU CONTRAT DE LOCATION, LE CLIENT S’EST OBLIGÉ AU RESPECT DES CONDITIONS GÉNÉRALES DE LOCATION DE LA « SONORISATION DJ DARLIN’ MUSIC & LIGHTS ».' => '',
                    'LE MATÉRIEL VOYAGE AUX RISQUES ET PÉRILS DU CLIENT.' => '',
                    'EN CAS D’ANNULATION DE LA LOCATION APRÈS SIGNATURE DU CONTRAT, LE CLIENT S’ENGAGE À PAYER LA MOITIÉ DU PRIX DE LA LOCATION S’IL A PRÉVENU LA « SONORISATION DJ DARLIN’ MUSIC & LIGHTS » AU MOINS 48H AVANT LA DATE DE LOCATION. PASSÉ CE DÉLAIS, LA TOTALITÉ SERA DUE. EN CAS D’ANNULATION, UN ACCORD ÉCRIT SERA TOUJOURS RÉDIGÉ ET SIGNÉ PAR LES DEUX PARTIES.' => '',
                    'LE CLIENT S’ENGAGE À REMETTRE LE MATÉRIEL AUX JOURS ET HEURES PRÉVUS. EN CAS DE RETARD, LE CLIENT DEVRA PAYER LA SOMME DE LOCATION JOURNALIÈRE (PRIX TARIF) PAR JOUR DE RETARD. CETTE SOMME EST IRRÉDUCTIBLE ET FORFAITAIRE.' => '',
                    'LE CLIENT PRENDRA TOUTES LES MESURES NÉCESSAIRES AFIN DE NE PAS PRIVER LA « SONORISATION DJ DARLIN’ MUSIC & LIGHTS » DE SON MATÉRIEL PASSÉ LA DURÉE DE LOCATION DÉTERMINÉE.' => '',
                    'LE CLIENT S’ENGAGE À REMETTRE LE MATÉRIEL DANS UN ÉTAT IMPECCABLE. LE NETTOYAGE DU MATÉRIEL SOUILLÉ SERA TOUJOURS FACTURÉ AU CLIENT. (PAR EXEMPLE : POUR TOUS CÂBLE RENTRÉ NON ROULÉ PROPREMENT ET INDIVUELLEMENT, IL SERA COMPTÉ LA SOMME DE 5,00 € PAR CÂBLE)' => '',
                    'LE CLIENT RESTE SEUL RESPONSABLE VIS- À -VIS DE LA « SONORISATION DJ DARLIN’ MUSIC & LIGHTS » ET S’ENGAGE À SUPPORTER LES FRAIS RÉSULTANT DES DÉTÉRIORATIONS AU MATÉRIEL LOUÉ, À SA PERTE, SON VOL, ETC. LE CLIENT EST CENSÉ CONTRACTER UNE ASSURANCE EN CE SENS. LA « SONORISATION DJ DARLIN’ MUSIC & LIGHTS » SE RÉSERVE LE DROIT D’EXIGER LA PREUVE DE LA PRISE DE CE TYPE D’ASSURANCE. TOUT APPAREIL MANQUANT SERA CONSIDÉRÉ COMME NEUF ET FACTURÉ AU PRIX DE VENTE CATALOGUE EN VIGUEUR À CE JOUR.' => '',
                    'LA « SONORISATION DJ DARLIN’ MUSIC & LIGHTS » DISPOSE DE 48H POUR VÉRIFIER LE BON FONCTIONNEMENT À DATER DE SON RETOUR. TOUTE REMISE EN ETAT ÉVENTUELLE OU RÉPARATION SERA FACTURÉE ENDÉANS LES QUINZE JOURS SUIVANT LA RENTRÉE DU MATÉRIEL ET SERA PAYABLE AU GRAND COMPTANT.' => '',
                    'LE CLIENT S’ENGAGE À NE PAS METTRE EN CAUSE, SOUS QUELQUE FORME QUE CE SOIT, LA RESPONSABILITÉ DE LA « SONORISATION DJ DARLIN’ MUSIC & LIGHTS » EN CAS DE DOMMAGES, D’ACCIDENTS, DE NUISSANCES OU DE PROBLÈMES QUELCONQUES POUVANT RESULTER DE L’UTILISATION DU MATÉRIEL LOUÉ.' => '',
                    'LE FAIT QUE LE TRANSPORT ET/OU LE MONTAGE DU MATÉRIEL SOIT EFFECTUÉ PAR LA « SONORISATION DJ DARLIN’ MUSIC & LIGHTS » N’ENLÈVE EN RIEN LA RESPONSABILITÉ DU PRENEUR QUANT AU CONTENU DES CONDITIONS GÉNÉRALES DE LOCATION REPRISES CI-AVANT.' => '',
                    'LES LISTES DE PRIX DE LOCATION SONT EDITÉES À TITRE INFORMATIF. LA « SONORISATION DJ DARLIN’ MUSIC & LIGHTS » SE RÉSERVE LE DROIT DE MODIFICATION À TOUS MOMENTS, SANS PRÉAVIS  ET POUR TOUTES OCCASIONS.' => '',
                    'EN CAS DE LITIGE, SEULS LES TRIBUNAUX DE LIÈGE SONT COMPÉTENTS.' => ''
                )),
            array('titre' => 'DATE DE MISE À JOUR',
                'one_line' => true,
                'color' => 'blue-black',
                'items' => array(
                    '21/12/2015' => ''
                )),
            array('titre' => 'INFORMATIONS DIVERSES',
                'one_line' => true,
                'color' => 'blue-black',
                'items' => array(
                    'UNE MULTITUDE D’AUTRES ÉVÈNEMENTS PEUVENT VOUS ÊTRE PROPOSÉS (CONCERTS, SPECTACLES, SON & LUMIÈRE, DÉFILÉS DE MODE, SOIRÉES, INAUGURATIONS, PORTES OUVERTES, BRADERIES, BROCANTES, FÊTES FAMILIALES, ETC.) SUR SIMPLE DEMANDE, NOUS VOUS FERONS PARVENIR UN DEVIS GRATUIT EN FONCTION DE VOS DÉSIDÉRATAS !' => ''
                )),
        );

        return view('Frontend.locations', compact('listLocation'));
    }
}
