<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PhotoGallery\StoreRequest;
use App\Models\PhotoGallery\PhotoGallery;
use App\Repositories\Admin\PhotoGallery\PhotoGalleryContract;
use App\Services\Common\Image\ImageService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PhotoGalleryController extends Controller
{
    private ?PhotoGalleryContract $galleryRepository;

    public function __construct(PhotoGalleryContract $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    public function index(): View|Factory|Application
    {
        $photos = $this->galleryRepository->activePhotos();

        return view('admin.photo-gallery.index', compact('photos'));
    }

    public  function  archive(): Factory|View|Application
    {
        $photos = $this->galleryRepository->archivePhotos();
        return view('admin.photo-gallery.archive' , compact('photos'));
    }

    public function create(): Factory|View|Application
    {
        return view('admin.photo-gallery.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $photo = $request->file('photo');

        if (isset($photo)) {
            $img = ImageService::saveWithThumb(PhotoGallery::DIRECTORY, $request->file('photo'));

            $data['photo'] = $img->basename;

            $this->galleryRepository->create($data);

            session()->flash('success', 'Успешно добавлено');
        }
        else {
            session()->flash('file', 'Файл недействителен');
        }

        return redirect()->route('admin.photo-gallery.index');
    }

    public function show($id)
    {
        $photo = $this->galleryRepository->getById($id);

        return redirect()->to(asset('storage/' . $photo->photo));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id): RedirectResponse
    {
        $this->galleryRepository->destroy($id);

        session()->flash('success', 'Успешно изменен');

        return redirect()->back();
    }
}
