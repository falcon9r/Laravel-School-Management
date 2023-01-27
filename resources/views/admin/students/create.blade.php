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
                                <h5 class="mb-0" data-anchor="data-anchor">Student Register</h5>
                            </div>
                            <div class="col-auto ms-auto">
                                <a href="{{ route('admin.classes.show' , $class_id) }}">
                                    <button class="btn btn-falcon-default">All Students</button>
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
                            <form action="{{ route('admin.students.store') }}" method="post"
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
                                    <label class="form-label" for="basic-form-gender">First name</label>
                                    <input class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" required/>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-gender">Last name</label>
                                    <input class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name" required/>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-gender">Middle name</label>
                                    <input class="form-control @error('middle_name') is-invalid @enderror"
                                           name="middle_name"/>
                                    @error('middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-gender">Phone</label>
                                    <input class="form-control @error('phone') is-invalid @enderror" type="tel"
                                           name="phone" required/>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-gender">Class</label>
                                    <select class="form-select @error('class_id') is-invalid @enderror" name="class_id"
                                            id="basic-form-gender" aria-label="Default select example" required>
                                        @foreach($classes as $class)
                                            <option value="{{ $class->id }}"
                                                    @if($class_id == $class->id) selected @endif>{{ $class->Name() }}</option>
                                        @endforeach
                                    </select>
                                    @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input type="file" name="photo"
                                           class="form-control @error('photo') is-invalid @enderror"  required/>
                                    @error('photo')
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
