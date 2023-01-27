@extends('layout.landing')

@section('content')
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ locale_route('home') }}">{{ trans('landing.menu.home') }}</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2"
                                             aria-hidden="true"></span> {{ trans('landing.menu.photo_gallery') }}</li>
                </ul>
            </div>
        </section>
    </div>

    <section class="w3l-blogpost-content w3l-courses py-5">
        <div class="container py-md-5">
            <div class="header-title mb-md-5 mb-4">
                <span class="sub-title">Моменты из нашей школы</span>
{{--                <h3 class="hny-title text-left"> Моменты из нашей школы</h3>--}}
            </div>
            <div class="tz-gallery">

                <div class="row">
                    @foreach($photos as $photo)
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{ asset($photo->photo) }}">
                            <img class="" src="{{ asset($photo->thumb_photo) }}" alt="{{ $photo->description }}">
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>
            {{ $photos->onEachSide(2)->links() }}
        </div>
    </section>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('vendor/baguettebox/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gallery-grid.css') }}">
@endsection

@section('script')
    <script src="{{ asset('vendor/baguettebox/baguetteBox.min.js') }}"></script>
    <script>
        baguetteBox.run('.tz-gallery', {
            animation: 'fadeIn',
            captions: function(element) {
                return element.getElementsByTagName('img')[0].alt;
            }
        });
    </script>
@endsection
