@extends('layout.master')

@section('title', 'School Management System')

@section('content')
    <div class="card">
        <div class="card-body overflow-hidden p-lg-6">
            <div class="row align-items-center">
                <!--
                  Container start
                -->
                <div class="card">
                    <div class="card-header">
                        <div class="row flex-between-end">
                            <div class="col-auto align-self-center">
                                <h5 class="mb-0" data-anchor="data-anchor">Subject create</h5>
                            </div>
                            <div class="col-auto ms-auto">
                                <a href="{{ route('admin.subjects.index') }}">
                                    <button class="btn btn-falcon-default">All Subjects</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                  Form for create grade  #start
                --->
                <div class="card-body bg-light">
                    <div class="tab-content">
                        <div class="tab-pane preview-tab-pane active" role="tabpanel"
                             aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                             id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                            <form action="{{ route('admin.subjects.store') }}" method="post"
                                  enctype=multipart/form-data>
                                @csrf

                                @if(Session::has('created'))
                                    <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
                                        <div class="bg-success me-3 icon-item"><span
                                                class="fas fa-check-circle text-white fs-3"></span></div>
                                        <p class="mb-0 flex-1">{{ Session::get('created') }}</p>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-gender">Name of subject</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name"
                                           required/>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control  @error('description') is-invalid @enderror"
                                              name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit">
                                </button>
                            </form>
                        </div>
                    </div>

                    <!--
                      Form for create grade  #end
                    --->

                    <!--
                      Container end
                    -->
                </div>
            </div>
        </div>
    </div>
@endsection
