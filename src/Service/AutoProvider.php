<?php
namespace App\Service;

use App\Entity\Auta;

class AutoProvider
{
    public function __construct(
       private AutoImageProvider $autoImageProvider
    )
    {

    }

    public function prepareAuta($auta, bool $shortendesc=true): array
    {

        $dane = [];
        foreach ($auta as $auto){
            $trnsformeddataautoImage = $this->autoImageProvider->transformAutoImageForTwig(
                $auto->getAutosPhotos()->toArray(),
            );

            if($shortendesc){
                $opis = substr($auto->getDescription(),0,15)."...";
            }
           else{ $opis = $auto->getDescription();};


         $dane['auta'][] =[
             'serial_nr'=>$auto->getSerialNr(),
             'model'=>$auto->getModel(),
             'opis'=>$opis,
             'kolor'=>$auto->getKolor(),
             'cena'=>$auto->getPrice(),
             'images'=>$trnsformeddataautoImage,


                     ];
     }
     return $dane;
    }
}
