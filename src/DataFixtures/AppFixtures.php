<?php

namespace App\DataFixtures;

use App\Entity\Auta;
use App\Entity\AutosPhotos;
use App\Entity\ContactInformation;
use App\Entity\Image;
use App\Entity\InformationAboutMe;
use App\Entity\Notatki;
use App\Entity\Owners;
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
        $article2->setContent('To jest treść drugiego artykułu');
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

        $contactInfo1 = new ContactInformation();
        $contactInfo1 ->setKey(key:'e-mail');
        $contactInfo1 ->setValue(value:'ghys@wp.pl');
        $manager ->persist($contactInfo1);

        $contactInfo2 = new ContactInformation();
        $contactInfo2 ->setKey(key:'Telefon');
        $contactInfo2 ->setValue(value:'885447184');
        $manager ->persist($contactInfo2);

        $contactInfo3 = new ContactInformation();
        $contactInfo3 ->setKey(key:'Miasto');
        $contactInfo3 ->setValue(value:'Bydgoszcz');
        $manager ->persist($contactInfo3);

        $autoInfo1 = new Auta();
        $autoInfo1->setSerialNr(serial_nr:'01');
        $autoInfo1->setModel(model:'SEAT');
        $autoInfo1->setDescription(description:'Ogólnie znana teza głosi, iż użytkownika może rozpraszać zrozumiała zawartość strony, kiedy ten chce zobaczyć sam jej wygląd. Jedną z mocnych stron używania Lorem Ipsum jest to, że ma wiele różnych „kombinacji” zdań, słów i akapitów, w przeciwieństwie do zwykłego: „tekst, tekst, tekst”, sprawiającego, że wygląda to „zbyt czytelnie” po polsku. Wielu webmasterów i designerów używa Lorem Ipsum jako domyślnego modelu tekstu i wpisanie w internetowej wyszukiwarce ‘lorem ipsum’ spowoduje znalezienie bardzo wielu stron, które wciąż są w budowie. Wiele wersji tekstu ewoluowało i zmieniało się przez lata, czasem przez przypadek, czasem specjalnie (humorystyczne wstawki itd).');
        $autoInfo1->setKolor(kolor:'POPIELATY');
        $autoInfo1->setPrice(price:'48.000 zł');
        $manager ->persist($autoInfo1);

        $autoInfo2 = new Auta();
        $autoInfo2->setSerialNr(serial_nr:'02');
        $autoInfo2->setModel(model:'AUDI');
        $autoInfo2->setDescription(description:'Jest dostępnych wiele różnych wersji Lorem Ipsum, ale większość zmieniła się pod wpływem dodanego humoru czy przypadkowych słów, które nawet w najmniejszym stopniu nie przypominają istniejących. Jeśli masz zamiar użyć fragmentu Lorem Ipsum, lepiej mieć pewność, że nie ma niczego „dziwnego” w środku tekstu. Wszystkie Internetowe generatory Lorem Ipsum mają tendencje do kopiowania już istniejących bloków, co czyni nasz pierwszym prawdziwym generatorem w Internecie. Używamy zawierającego ponad 200 łacińskich słów słownika, w kontekście wielu znanych sentencji, by wygenerować tekst wyglądający odpowiednio. To wszystko czyni „nasz” Lorem Ipsum wolnym od powtórzeń, humorystycznych wstawek czy niecharakterystycznych słów.'
    );
        $autoInfo2->setKolor(kolor:'BIAŁY');
        $autoInfo2->setPrice(price:'88.000 zł');
        $manager ->persist($autoInfo2);

        $autoInfo3 = new Auta();
        $autoInfo3->setSerialNr(serial_nr:'03');
        $autoInfo3->setModel(model:'MERCEDES');
        $autoInfo3->setDescription(description:'W przeciwieństwie do rozpowszechnionych opinii, Lorem Ipsum nie jest tylko przypadkowym tekstem. Ma ono korzenie w klasycznej łacińskiej literaturze z 45 roku przed Chrystusem, czyli ponad 2000 lat temu! Richard McClintock, wykładowca łaciny na uniwersytecie Hampden-Sydney w Virginii, przyjrzał się uważniej jednemu z najbardziej niejasnych słów w Lorem Ipsum – consectetur – i po wielu poszukiwaniach odnalazł niezaprzeczalne źródło: Lorem Ipsum pochodzi z fragmentów (1.10.32 i 1.10.33) „de Finibus Bonorum et Malorum”, czyli „O granicy dobra i zła”, napisanej właśnie w 45 p.n.e. przez Cycerona. Jest to bardzo popularna w czasach renesansu rozprawa na temat etyki. Pierwszy wiersz Lorem Ipsum, „Lorem ipsum dolor sit amet...” pochodzi właśnie z sekcji 1.10.32.');
        $autoInfo3->setKolor(kolor:'CZARNY');
        $autoInfo3->setPrice(price:'148.000 zł');
        $manager ->persist($autoInfo3);

        $autoImage1 = new AutosPhotos();
        $autoImage1 ->setPath(path:'seat.jpg');
        $autoImage1 ->setTitle(title:'seat');
        $autoImage1 ->setAlt(alt:'seat alt');
        $autoInfo1->addAutosPhoto($autoImage1);
        $manager ->persist($autoImage1);

        $autoImage2 = new AutosPhotos();
        $autoImage2 ->setPath(path:'audi.jpg');
        $autoImage2 ->setTitle(title:'audi');
        $autoImage2 ->setAlt(alt:'audi alt');
        $autoInfo2->addAutosPhoto($autoImage2);
        $manager ->persist($autoImage2);

        $autoImage3 = new AutosPhotos();
        $autoImage3 ->setPath(path:'Mercedes.jpg');
        $autoImage3 ->setTitle(title:'Mercedes');
        $autoImage3 ->setAlt(alt:'Mercedes alt');
        $autoInfo3->addAutosPhoto($autoImage3);
        $manager ->persist($autoImage3);

        $autoOwner1 =new Owners();
        $autoOwner1 ->setName(Name:'Hys');
        $autoOwner1 ->setFirstName(FirstName:'Grzegorz');
        $autoOwner1 ->setPurchaseDate(new \DateTime('2023-10-26'));
        $autoOwner1 ->setSaleDate(new \DateTime('2023-10-29'));
        $autoInfo1 ->addOwner($autoOwner1);
        $manager->persist($autoOwner1);

        $autoOwner2 =new Owners();
        $autoOwner2 ->setName(Name:'Hys');
        $autoOwner2 ->setFirstName(FirstName:'Paweł');
        $autoOwner2 ->setPurchaseDate(new \DateTime('2023-10-29'));
       // $autoOwner2 ->setSaleDate(new\DateTime());
        $autoInfo2 ->addOwner($autoOwner2);
        $manager->persist($autoOwner2);

        $autoOwner3 =new Owners();
        $autoOwner3 ->setName(Name:'Kowalski');
        $autoOwner3 ->setFirstName(FirstName:'Robert');
        $autoOwner3 ->setPurchaseDate(new\DateTime('2023-10-27'));
        $autoOwner3 ->setSaleDate(new\DateTime('null'));
        $autoInfo1 ->addOwner($autoOwner3);
        $manager->persist($autoOwner3);


        $manager->flush();
    }
}
