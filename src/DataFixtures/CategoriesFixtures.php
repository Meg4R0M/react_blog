<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categories();
        $categorie1->setNom("Web Design");
        $categorie1->setImage($this->getReference('media1'));

        $manager->persist($categorie1);

        $categorie2 = new Categories();
        $categorie2->setNom("HTML");
        $categorie2->setImage($this->getReference('media2'));

        $manager->persist($categorie2);

        $categorie3 = new Categories();
        $categorie3->setNom("Freebies");
        $categorie3->setImage($this->getReference('media3'));

        $manager->persist($categorie3);

        $categorie4 = new Categories();
        $categorie4->setNom("Javascript");
        $categorie4->setImage($this->getReference('media4'));

        $manager->persist($categorie4);

        $categorie5 = new Categories();
        $categorie5->setNom("CSS");
        $categorie5->setImage($this->getReference('media5'));

        $manager->persist($categorie5);

        $categorie6 = new Categories();
        $categorie6->setNom("Tutorials");
        $categorie6->setImage($this->getReference('media6'));

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
        return 4;
    }
}
