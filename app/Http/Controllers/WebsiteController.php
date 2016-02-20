<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}
