<?php
namespace App\Service;

use App\Entity\AutosPhotos;
class AutoImageProvider {

public function transformAutoImageForTwig(array $autosphotos): array
{
    $trasformedAutoImage = [];

    foreach ($autosphotos as $autosphoto ){
        $trasformedAutoImage[]= [

            'title'=>$autosphoto->getTitle(),
            'path' => '/' . AutosPhotos::PATH_TO_AUTOS_IMAGES .'/'.$autosphoto->getPath(),
            'alt'=> $autosphoto->getAlt(),
        ];
    }
    return $trasformedAutoImage;
}

}
