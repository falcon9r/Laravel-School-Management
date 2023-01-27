@extends('layout.master')

@section('title', "Add Achievement")

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">Достижения</h5>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route("admin.achievements.create") }}" class="btn btn-outline-primary mb-1">
                        Посмотреть все
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Добавление Достижения</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row align-items-center">
                <div class="tab-content">
                    {!! Form::open(['route' => 'admin.achievements.store', 'enctype' => 'multipart/form-data']) !!}
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
                        {!! Form::label('title', 'Загаловок', ['class' => 'label-text']) !!}
                        {!! Form::text('title', null, ['class' => 'form-control','required' ,'placeholder' => 'Введите загаловок']) !!}
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        {!! Form::label('text', 'Текст', ['class' => 'label-text']) !!}
                        {!! Form::textarea('text', null, ['class' => 'form-control', 'required' , 'placeholder' => 'Введите Текст' ,  'rows' =>"4", 'cols' => "50"]) !!}
                        @error('text')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        {!! Form::label('date', 'Дата', ['class' => 'label-text']) !!}
                        {!! Form::date('date', null, ['class' => 'form-control' , 'required']) !!}
                        @error('date')
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
