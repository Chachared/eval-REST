<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $film1 = new Film();
        $film1->setTitle("Alien, le 8ème passager");
        $film1->setDescription("
Le vaisseau commercial Nostromo et son équipage, sept hommes et femmes, rentrent sur Terre avec une importante cargaison de minerai. Mais lors d'un arrêt forcé sur une planète déserte, l'officier Kane se fait agresser par une forme de vie inconnue, une arachnide qui étouffe son visage.Après que le docteur de bord lui retire le spécimen, l'équipage retrouve le sourire et dîne ensemble. Jusqu'à ce que Kane, pris de convulsions, voit son abdomen perforé par un corps étranger vivant, qui s'échappe dans les couloirs du vaisseau...");
        $film1->setDirector("Ridley Scott");
        $manager->persist($film1);

        $film2 = new Film();
        $film2->setTitle("Blade Runner");
        $film2->setDescription("À la fin du XXème siècle, des milliers d'hommes ont quitté la Terre pour fonder des colonies sur d'autres planètes. Les \"Répliquants\", des androïdes que rien ne peut distinguer des autres êtres humains, leur servent d'esclaves. En 2019 à Los Angeles, un agent spécial est chargé de traquer et d'éliminer un groupe de Répliquants rebelles.");
        $film2->setDirector("Ridley Scott");
        $manager->persist($film2);

        $film3 = new Film();
        $film3->setTitle("Dune");
        $film3->setDescription("L’histoire de Dune débute en l’an 10191 après la fondation de la Guilde spatiale. L'univers connu est régi par l’empereur Padishah Shaddam IV, le chef de la Maison Corrino, qui exerce son pouvoir féodal sur la multitude de planètes de l'Imperium, un vaste empire qui s'étend sur des centaines de mondes dans la galaxie.");
        $film3->setDirector("Denis Villeneuve");
        $manager->persist($film3);

        $manager->flush();
    }
}