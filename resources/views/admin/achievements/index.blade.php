@extends('layout.master')

@section('title', 'Achievements')

@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">Достижения</h5>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route("admin.achievements.index") }}" class="hover-text-decoration-none me-3">
                        Архив
                    </a>
                    <a href="{{ route("admin.achievements.create") }}" class="btn btn-outline-primary mb-1">
                        <span class="fas fa-plus me-2" data-fa-transform="shrink-3"></span>Добавить
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('alerts.success')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                @foreach($achievements as $achievement)
                    <div class="mb-4 col-md-6 col-lg-4">
                        <div class="border rounded-1 h-100 d-flex flex-column justify-content-between pb-3">
                            <div class="overflow-hidden">
                                <div class="position-relative rounded-top overflow-hidden">
                                    <a class="d-block" href="{{ route('admin.achievements.show' , $achievement->id) }}">
                                        <img class="img-fluid rounded-top" src="{{ asset('storage/' . $achievement->photo) }}" alt="" /></a>
                                </div>
                                <div class="p-3">
                                    <h5 class="fs-0"><a class="text-dark" href="{{ route('admin.achievements.show' , $achievement->id)  }}">{{ $achievement->title }}</a></h5>
                                    <p class="fs--1 mb-3"><a class="text-500" href="#!">{{ $achievement->text }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer bg-light d-flex justify-content-center">
            {{ $achievements->onEachSide(2)->links()}}
        </div>
    </div>
@endsection
