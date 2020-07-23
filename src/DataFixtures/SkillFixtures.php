<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist;
use App\Entity\Skill;

class SkillFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $skill = new Skill();
        $skill->setTitle('Clown');
        $manager->persist($skill);
        $manager->flush();

        $skill = new Skill();
        $skill->setTitle('Equilibriste');
        $manager->persist($skill);
        $manager->flush();

        $skill = new Skill();
        $skill->setTitle('accrobate');
        $manager->persist($skill);
        $manager->flush();
    }
}