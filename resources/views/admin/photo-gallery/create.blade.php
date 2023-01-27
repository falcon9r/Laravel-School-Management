@extends('layout.master')

@section('title', "Add Photo Gallery")

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">Photo Gallery</h5>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route("admin.photo-gallery.create") }}" class="btn btn-outline-primary mb-1">
                        Посмотреть все
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Добавление новой фотографии</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row align-items-center">

                <div class="tab-content">
                    {!! Form::open(['route' => 'admin.photo-gallery.store', 'enctype' => 'multipart/form-data']) !!}
                    @include('common.errors')

                    <div class="mb-3">
                        {!! Form::label('photo', 'Фотография') !!}
                        {!! Form::file('photo', ['class' => 'form-control', 'required']) !!}
                        @error('photo')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        {!! Form::label('description', 'Описание', ['class' => 'label-text']) !!}
                        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Введите описание', 'required' => 'required']) !!}
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        {!! Form::label('position', 'Позиция', ['class' => 'label-text']) !!}
                        {!! Form::number('position', null, ['class' => 'form-control', 'placeholder' => 'Введите значение']) !!}
                        @error('position')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        {!! Form::submit('Добавить', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
