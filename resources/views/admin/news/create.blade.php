@extends('layout.master')

@section('title', 'Create News')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">News Add</h5>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('admin.news.index') }}" class="btn btn-outline-primary mb-1">
                        Посмотреть все
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Добавление новости</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row align-items-center">

                <div class="tab-content">
                    {!! Form::open(['route' => 'admin.news.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
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
                        {!! Form::label('title[tj]', 'Загаловок', ['class' => 'label-text']) !!}
                        {!! Form::text('title[tj]', null, ['class' => 'form-control', 'placeholder' => 'Введите загаловок', 'required' => 'required']) !!}
                        @error('title.tj')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        {!! Form::label('text[tj]', 'Описание', ['class' => 'label-text']) !!}
                        {!! Form::text('text[tj]', null, ['class' => 'form-control', 'placeholder' => 'Введите описание', 'required' => 'required']) !!}
                        @error('description.tj')
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
