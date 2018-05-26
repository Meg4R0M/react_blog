<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CategorieFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categorie();
        $categorie1->setNom("Web Design");

        $manager->persist($categorie1);

        $categorie2 = new Categorie();
        $categorie2->setNom("HTML");

        $manager->persist($categorie2);

        $categorie3 = new Categorie();
        $categorie3->setNom("Freebies");

        $manager->persist($categorie3);

        $categorie4 = new Categorie();
        $categorie4->setNom("Javascript");

        $manager->persist($categorie4);

        $categorie5 = new Categorie();
        $categorie5->setNom("CSS");

        $manager->persist($categorie5);

        $categorie6 = new Categorie();
        $categorie6->setNom("Tutorials");

        $manager->persist($categorie6);

        $manager->flush();

        $this->addReference('categorie1', $categorie1);
        $this->addReference('categorie2', $categorie2);
        $this->addReference('categorie3', $categorie3);
        $this->addReference('categorie4', $categorie4);
        $this->addReference('categorie5', $categorie5);
        $this->addReference('categorie6', $categorie6);
    }

    public function getOrder()
    {
        return 1;
    }
}
