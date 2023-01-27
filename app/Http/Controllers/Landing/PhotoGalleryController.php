<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\PhotoGallery\PhotoGalleryContract;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PhotoGalleryController extends Controller
{
    protected PhotoGalleryContract $photoGallery;

    public function __construct(PhotoGalleryContract $photoGallery)
    {
        $this->photoGallery = $photoGallery;
    }

    public function index(): Factory|View|Application
    {
        $photos = $this->photoGallery->activePhotos();

        return view('landing.photo-gallery.index', compact('photos'));
    }
}
