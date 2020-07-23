<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist;
use App\Entity\Skill;

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
        cirque alors qu\'il suit des études pour devenir maroquinier. Artiste de cirque, mais aussi chorégraphe,
        auteur et metteur en scène, le jeune Pascal Rousseau devient alors un artiste complet qui s\'illustre notamment 
        dans de magnifiques numéros d\'équilibre, sur des rouleaux, des cannes, un fil... avec toujours plus de 
        technique et d\'originalité.');
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
        découvre alors les arcanes de la discipline.');
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
        qui il ne va pas tarder à jouer ses premiers spectacles.');
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
        d\'Annie Fratellini.');
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
        de nouvelles expériences de spectacles, fondés dans un univers quotidien.');
        $artist->setPicture('https://agendaculturel.emstorage.fr/crop350x200/virginie-mira-21878036.jpg');

        $manager->persist($artist);
        $manager->flush();
    }
}

