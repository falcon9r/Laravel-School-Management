@extends('layout.master')

@section('title', 'School Management System')

@section('before_css')
    <link href="{{ asset("vendor/choices/choices.min.css") }}" rel="stylesheet" />
@endsection

@section('before_script')
    <script src="{{ asset("vendor/choices/choices.min.js") }}"></script>
@endsection

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
                                <h5 class="mb-0" data-anchor="data-anchor">Teacher Register</h5>
                            </div>
                            <div class="col-auto ms-auto">
                                <a href="{{ route('admin.teachers.index') }}">
                                    <button class="btn btn-falcon-default">All Teachers</button>
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
                            <form action="{{ route('admin.teachers.store') }}" method="post"
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
                                    <label for="organizerMultiple">Multiple</label>
                                    <select class="form-select js-choice" id="organizerMultiple" multiple="multiple" size="1" name="subjects[]" data-options='{"removeItemButton":true,"placeholder":true}'>
                                       @foreach($subjects as $subject)
                                            <option value="{{$subject['id']}}">{{ $subject['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="file" name="photo"
                                           class="form-control @error('photo') is-invalid @enderror"/>
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
