<?php
namespace App\Service;

use App\Entity\Owners;

class OwnersProvider
{
    public function __construct(
       private AutoProvider $autoProvider
    )
    {

    }

    public function prepareOwners($owners): array
    {
        dd($owners);
        $dane = [];
        foreach ($owners as $owner){

         $dane['owners'][] =[
            'id'=>$owner->getId(),
            'Nazwisko'=>$owner->getName(),
            'Imię'=>$owner->getFirstName(),
            'Data zakupu'=>$owner->getpurchase_date(),
            'Data sprzedaży'=>$owner->getSale_date(),

                     ];
     }
     return $dane;
    }
}
