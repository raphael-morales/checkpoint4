<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist;

class ArtistFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $artist = new Artist();
        $artist->setFirstname('Rémi');
        $artist->setLastname('Luchez');
        $artist->setAge(27);
        $artist->setDescription('Rémi Luchez propose des spectacles arts de la rue. 
        Découvrez les dates de représentation de Rémi Luchez.
        Rémi Luchez est déjà monté sur la scène de ces salles de spectacles : Le sabot d\'or à Saint Gilles.');
        $artist->setPicture('https://agendaculturel.emstorage.fr/crop350x200/remi-luchez-96318158.jpg');
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstname('Pascal');
        $artist->setLastname('Rousseau');
        $artist->setAge(30);
        $artist->setDescription('Poussé par son frère, alors cascadeur, Pascal Rousseau se forme au 
        cirque alors qu\'il suit des études pour devenir maroquinier. Artiste de cirque, mais aussi chorégraphe, auteur et metteur en scène, le jeune Pascal Rousseau devient alors un artiste complet qui s\'illustre notamment dans de magnifiques numéros d\'équilibre, sur des rouleaux, des cannes, un fil... avec toujours plus de technique et d\'originalité.
        A l\'âge de 25 ans, il intègre la compagnie Volte Face en tant que jongleur, compagnie qu\'il ne quittera
        que neuf ans plus tard pour se lancer dans l\'écriture de ses propres spectacles. De ses débuts, avec le spectacle 
        de rue "Le Bateleur Circassien", à sa toute dernière création "Ivre d\'Équilibre", Pascal Rousseau à parcouru un 
        sacré bout de de chemin. Aujourd\'hui, il se produit partout, en France, mais aussi à l\'étranger : son premier spectacle
        à été présenté au Japon pendant près de quatre ans !');
        $artist->setPicture('https://agendaculturel.emstorage.fr/crop350x200/pascal-rousseau-17516561.jpg');
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstname('Julien');
        $artist->setLastname('Cottereau');
        $artist->setAge(26);
        $artist->setDescription('Peu enclin aux études, Julien Cottereau voue, adolescent, 
        toute son énergie à l\'apprentissage de la musique et du théâtre. Presque par hasard, il 
        découvre les vertus du spectacle de rue en remplaçant un mime bonimenteur sur le parvis de 
        Beaubourg. Décision est prise, il se lance dans le concours de l\'Ecole de la rue Blanche et 
        découvre alors les arcanes de la discipline. Il enchaîne lectures et spectacles qu\'il crée 
        avec des amis, parfait sa technique de mime sans pour autant s\'y consacrer pleinement. Après 
        deux ans d\'école, c\'est l\'un de ses enseignants qui l\'oriente vers le Cirque du Soleil qui 
        recherche alors un clown-mime-bruiteur. Début de la grande aventure pour Julien. Au sein de la 
        troupe québécoise, il parcourt le monde entier pendant plus de dix ans et se fait notamment considérablement 
        remarquer avec son numéro visuel du clown Eddy au sein du spectacle \'Saltimbanco\'. Dans cette 
        période faste, il trouve néanmoins le temps de faire des apparitions dans quelques films, courts 
        métrages et pièces de théâtre. Il s\'implique même activement dès 2002 dans l\'association Clowns 
        sans frontières, partant jouer aux quatre coins du globe devant des populations pauvres et isolées. 
        En 2004, artiste forgé et en quête de son univers personnel, Julien quitte le Cirque du Soleil pour 
        voler de ses propres ailes. Le résultat de sa remise en cause arrive bientôt sur les planches. \'Imagine-toi\' 
        est une fantaisie de clown qui mime, bruite et donne vie à des situations incongrues par sa seule force 
        d\'évocation. Succès public et critique, ce spectacle impose un Julien Cottereau dans le droit sillage des 
        Buster Keaton, Stan Laurel ou Harpo Marx. De belles références.');
        $artist->setPicture('https://agendaculturel.emstorage.fr/crop350x200/julien-cottereau-35921321.jpg');
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstname('Younesse');
        $artist->setLastname('El Hariri');
        $artist->setAge(24);
        $artist->setDescription('Younesse El Hariri est comédien et acrobate. Cet artiste du Cirque étudie son
        art au sein de l\'Ecole Nationale des Arts du Cirque de Rosny, en 2008, 
        avant de débuter une carrière d\'acrobate
        . Durant sa formation, Alexandre Fournier rencontre Mathias Pilet, un autre interprète avec 
        qui il ne va pas tarder à jouer ses premiers spectacles.
        Les deux artistes débutent par travailler sous la direction et les conseils de Fabrice 
        Champion, ancien acrobate devenu 
        tétraplégique après un accident de travail. Ce dernier les dirige dans le spectacle Totem de Cirque,
         en 2010. Alexandre Fournier
        a par la suite intégré la troupe de l\'Académie Fratellini pour plusieurs spectacles.
        En 2011, Alexandre Fournier et son camarade Mathias Pilet travaillaient sur un nouveau spectacle avec
         Fabrice Champion, lors duquel
        ils auraient dû jouer tous les trois. Malheureusement, l\'artiste Fabrice Champion est décédé 
        avant de pouvoir remonter sur scène.
        En hommage, les deux acrobates ont terminé le projet auprès du chorégraphe Radhouane el-Meddeb.');
        $artist->setPicture('https://agendaculturel.emstorage.fr/crop350x200/younesse-el-hariri-70985082.jpg');
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstname('Stéphane');
        $artist->setLastname('Ricordel');
        $artist->setAge(32);
        $artist->setDescription('Stéphane Ricordel est un homme du Cirque, né en Algérie, qui étonne
        par son parcours multidisciplinaire et atypique. Jusqu\'à ses 17 ans, Stéphane Ricordel vit en Algérie, 
        avant de rejoindre Paris pour des études de biologie cellulaire et d\'arts plastiques. Passionné de création,
        il découvre très vite le théâtre et le cirque, et apprend au Cours Florent, puis à l\'école de cirque 
        d\'Annie Fratellini.
        Trapéziste talentueux, Stéphane Ricordel débute sa carrière dans le monde du Cirque, et entame des 
        tournées mondiales,
        en faisant une apparition remarquée au Festival mondial du cirque de demain, et plus tard au sein du 
        prestigieux Cirque du Soleil.
        En 1993, Stéphane Ricordel fonde la compagnie Les Arts Sauts, avec ses amis Germain Guillemot, Côme Doerflinger,
        Fabrice Champion, Laurent de Magalhaes et Frank Michel. Ces acrobates créent des spectacles sous 
        chapiteau pendant près
        d\'une quinzaine d\'années, et présentent leurs créations en France et à l\'étranger.
        Après avoir été un acrobate de talent, Stéphane Ricordel s\'est reconverti. En 2009, il a pris la tête 
        du théâtre Silvia 
        Monfort pour imaginer de nouveaux spectacles ouverts sur le monde et multidisciplinaires. Il n\'a donc p
        as cessé la création,
        et forme désormais les plus jeunes artistes pour charmer le public de son théâtre et des autres.');
        $artist->setPicture('https://static.agendaculturel.fr/e/120x80/2012/09/04/default-arts-du-spectacle.jpg');
        $manager->persist($artist);

        $artist = new Artist();
        $artist->setFirstname('Willi');
        $artist->setLastname('Dorner');
        $artist->setAge(27);
        $artist->setDescription('Fondée en 1999 par l\'artiste de rue et chorégraphe
        Willi Dorner, la Compagnie Willi Dorner est basée à Vienne. Cette curieuse compagnie 
        de danse a depuis présenté des spectacles partout autour du monde. L\'objectif de la 
        compagnie est de proposer des événements inédits et de permettre au public de découvrir 
        de nouvelles expériences de spectacles, fondés dans un univers quotidien.
        Avec ses danseurs, Willi Dorner aime à investir les espaces et environnements urbains, utilisant 
        les moindres recoins de la ville pour s\'intégrer au paysage.
        Pour les créations de sa compagnie, Willi Dorner collabore avec des artistes issus de toutes les 
        disciplines. Ils ont été joué dans des festivals aussi prestigieux que le Tanzquartier Wien, 
        l\'ImpulsTanz, le Musica Strasbourg, le Philadelphia Live Arts Festival ou encore le Festival Paris 
        Quartier d\'été.');
        $artist->setPicture('https://agendaculturel.emstorage.fr/crop350x200/virginie-mira-21878036.jpg');

        $manager->persist($artist);
        $manager->flush();
    }
}
