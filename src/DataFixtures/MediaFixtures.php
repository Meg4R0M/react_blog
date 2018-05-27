<?php

namespace App\DataFixtures;

use App\Entity\Media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class MediaFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setNom("Web Design");
        $media1->setPath("https://www.botlibre.com/avatars/a15166455.jpg");
        $media1->setAlt("Web Design");
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setNom("HTML");
        $media2->setPath("https://www.w3.org/html/logo/downloads/HTML5_Badge_512.png");
        $media2->setAlt("HTML");
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setNom("Freebies");
        $media3->setPath("https://i.pinimg.com/564x/be/76/29/be7629dd58286e8519f0b92ee3120f68--security-logo-secret-service.jpg");
        $media3->setAlt("Freebies");
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setNom("Javascript");
        $media4->setPath("https://www.codementor.io/assets/page_img/learn-javascript.png");
        $media4->setAlt("Javascript");
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setNom("CSS");
        $media5->setPath("https://maxcdn.icons8.com/Share/icon/Logos/css31600.png");
        $media5->setAlt("CSS");
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setNom("Tutorials");
        $media6->setPath("http://devfloat.net/wp-content/uploads/2016/02/bird-design-logo-design.jpg");
        $media6->setAlt("Tutorials");
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setNom("Article 1");
        $media7->setPath("https://symfony.fi/files/2017-11/symfony-4-a.png");
        $media7->setAlt("Article 1");
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setNom("Article 2");
        $media8->setPath("https://codeplanet.io/wp-content/uploads/2016/10/react.png");
        $media8->setAlt("Article 2");
        $manager->persist($media8);

        $media9 = new Media();
        $media9->setNom("Article 3");
        $media9->setPath("https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/01/1484692838webpack-dependency-tree.png");
        $media9->setAlt("Article 3");
        $manager->persist($media9);

        $manager->flush();

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
        $this->addReference('media9', $media9);

    }

    public function getOrder()
    {
        return 1;
    }
}
