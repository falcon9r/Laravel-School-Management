@extends('layout.master')

@section('title', 'Photo Gallery')

@section('before_css')
    <link href="{{ asset("vendors/glightbox/glightbox.min.css")}}" rel="stylesheet"/>
@endsection
@section('before_script')
    <script src="{{ asset("vendors/glightbox/glightbox.min.js") }}"></script>
@endsection
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">Photo Gallery (Archive)</h5>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route("admin.photo-gallery.index") }}" class="hover-text-decoration-none me-3">
                        Активные
                    </a>
                    <a href="{{ route("admin.photo-gallery.create") }}" class="btn btn-outline-primary mb-1">
                        <span class="fas fa-plus me-2" data-fa-transform="shrink-3"></span>Добавить
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('alerts.success')

    <div class="card mt-4">
        <div class="card-body pt-0">

            <div class="row mx-n1 mt-3">
                @foreach($photos as $photo)
                    <div class="col-3 p-2">
                        <a class="color-white" href="#!">
                            <div class="hoverbox rounded-3 p-0">
                                <img class="img-fluid" src="{{ asset($photo->thumb_photo) }}" alt=""/>
                                <div class="light hoverbox-content bg-dark p-5 flex-center">
                                    <div class="p-0 m-0 text-center">
                                        <p class=" text-white">{{ $photo->description}}</p>
                                        {!! Form::open(['route' => ['admin.photo-gallery.destroy', $photo->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Разархивировать', ['class' => 'btn btn-danger btn-sm mt-1']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $photos->onEachSide(2)->links()}}
            </div>
        </div>
    </div>
@endsection
