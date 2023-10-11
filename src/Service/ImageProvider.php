<?php
namespace App\Service;

use App\Entity\Image;
class ImageProvider {

public function transformDataForTwig(array $images): array
{
    $trasformedData = [];
//**@var Image $image */
    foreach ($images as $image){
        $trasformedData[]= [
            'title'=> $image->getTitle(),
            'path' => '/' . Image::PATH_TO_IMAGES . '/' . $image->getPath(),
            'alt'=> $image->getAlt(),
        ];
    }
    return $trasformedData;
}

}
