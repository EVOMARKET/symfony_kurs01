<?php

namespace App\DataFixtures;

use App\Entity\Image;
use App\Entity\InformationAboutMe;
use App\Entity\Notatki;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article2 = new Article();
        $article->setTitle('To jst pierwszy artykuł');
        $article->setContent(
            'To jest treść artykułu'
        );
        $article->setDateAdded(new \DateTime('2023-01-01'));
        $image1 = new Image();
        $image1->setPath('laska1.jpg');
        $image1->setTitle('laska1');
        $image1->setAlt('alt laska 1');
        $article->addImage($image1);
        $manager->persist($image1);

        $image2 = new Image();
        $image2->setPath('laska2.jpg');
        $image2->setTitle('laska2');
        $image2->setAlt('alt laska 2');
        $article->addImage($image2);
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setPath('laska3.jpg');
        $image3->setTitle('laska3');
        $image3->setAlt('alt laska 3');
        $article->addImage($image3);
        $manager->persist($image3);

        $manager->persist($article);

        $article2->setTitle('To jst drugi artykuł');
        $article2->setContent(
            'To jest treść drugiego artykułu'
        );
        $article2->setDateAdded(new \DateTime('2023-01-02'));
        $manager->persist($article2);

        $image4 = new Image();
        $image4->setPath('laska4.jpg');
        $image4->setTitle('laska4');
        $image4->setAlt('alt laska 4');
        $article2->addImage($image4);
        $manager->persist($image4);
        $manager->persist($article2);

        $image5 = new Image();
        $image5->setPath('laska5.jpg');
        $image5->setTitle('laska5');
        $image5->setAlt('alt laska 5');
        $article2->addImage($image5);
        $manager->persist($image5);
        $manager->persist($article2);

        $image6 = new Image();
        $image6->setPath('laska6.jpg');
        $image6->setTitle('laska6');
        $image6->setAlt('alt laska 6');
        $article2->addImage($image6);
        $manager->persist($image6);
        $manager->persist($article2);



        $infoAboutMe1 = new InformationAboutMe( key:'Imię', value:'Grzegorz');
        $manager->persist($infoAboutMe1);

        $infoAboutMe2 = new InformationAboutMe( key:'Nazwisko', value:'Hys');
        $manager->persist($infoAboutMe2);

        $infoAboutMe3 = new InformationAboutMe( key:'Kilka informacji o mnie', value:'Cześć, jestem początkującym programistaą php');
        $manager->persist($infoAboutMe3);

        $infoAboutMe4 = new InformationAboutMe( key:'Wiek', value:'59');
        $manager->persist($infoAboutMe4);

        $dodajnotatke = new Notatki (Title:'To jest tytuł notatki',ContentNote:'To jest treść pierwszej notatki');
        $manager->persist($dodajnotatke);



        $manager->flush();
    }
}
