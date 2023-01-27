<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 12.01.2023
 * Time: 15:45
 */

namespace App\Repositories\Admin\PhotoGallery;


interface PhotoGalleryContract
{
    public function activePhotos($perPage = 12);

    public function archivePhotos($perPage = 12);

    public function create($data);

    public function getById($id);

    public function destroy($id);

}
