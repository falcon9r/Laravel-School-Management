<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 12.01.2023
 * Time: 15:46
 */

namespace App\Repositories\Admin\PhotoGallery;


use App\Models\PhotoGallery\PhotoGallery;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PhotoGalleryRepository implements PhotoGalleryContract
{
    protected PhotoGallery $gallery;

    public function __construct(PhotoGallery $gallery)
    {
        $this->gallery = $gallery;
    }

    public function activePhotos($perPage = 12): LengthAwarePaginator
    {
        return $this->gallery->query()
            ->where('is_active' , true)
            ->whereNotNull('position')
            ->union($this->photosWithPositionIsNull(true))
            ->orderByDesc('position')
            ->orderByDesc('created_at')
            ->paginate($perPage);
    }

    private function  photosWithPositionIsNull(bool $is_active): Builder
    {
        return $this->gallery->query()
            ->where('is_active' , $is_active)
            ->whereNull('position');
    }

    public function archivePhotos($perPage = 0): LengthAwarePaginator
    {
        return $this->gallery->query()
            ->where('is_active' , false)
            ->where('position' , '!=' , 'null')
            ->union($this->photosWithPositionIsNull(false))
            ->orderByDesc('position')
            ->orderByDesc('created_at')
            ->paginate($perPage);
    }

    public function create($data): PhotoGallery
    {
        return $this->gallery->query()->create($data);
    }

    public function getById($id): PhotoGallery
    {
        return $this->gallery->query()->findOrFail($id);
    }

    public function destroy($id): PhotoGallery
    {
        $gallery = $this->getById($id);
        $gallery->is_active = !$gallery->is_active;
        $gallery->save();

        return $gallery;
    }
}
