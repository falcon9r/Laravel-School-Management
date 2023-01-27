@extends('layout.master')

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
                                <h5 class="mb-0" data-anchor="data-anchor">Basic form</h5>
                            </div>
                            <div class="col-auto ms-auto">
                                <a href="{{ route('admin.classes.index') }}">
                                    <button class="btn btn-falcon-default">All Classes</button>
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
                            <form action="{{ route('admin.classes.store') }}" method="post">
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
                                @error('message')
                                <div class="alert alert-danger border-2 d-flex align-items-center" role="alert">
                                    <div class="bg-danger me-3 icon-item"><span
                                            class="fas fa-times-circle text-white fs-3"></span></div>
                                    <p class="mb-0 flex-1">{{ $message }}</p>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>

                                @enderror
                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-gender">Sign</label>
                                    <select class="form-select @error('number') is-invalid @enderror"
                                            id="basic-form-gender" name="sign" aria-label="Default select example">
                                        <option value="No choose">No choose</option>
                                        @foreach($signs as $sign)
                                            <option value="{{$sign}}">{{ $sign }}</option>
                                        @endforeach
                                    </select>
                                    @error('sign')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-gender">Number</label>
                                    <select class="form-select @error('number') is-invalid @enderror"
                                            id="basic-form-gender" name="number" aria-label="Default select example">
                                        <option value="No choose">No choose</option>
                                        @foreach($numbers as $number)
                                            <option value="{{$number}}">{{ $number }}</option>
                                        @endforeach
                                    </select>
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-gender">Teacher</label>
                                    <select class="form-select @error('classroom_teacher') is-invalid @enderror"
                                            id="basic-form-gender" name="classroom_teacher"
                                            aria-label="Default select example">
                                        <option value="no choose">No choose</option>
                                        @foreach($teachers as $teacher)
                                            <option value="{{ $teacher->id }}">{{ $teacher }}</option>
                                        @endforeach
                                    </select>
                                    @error('classroom_teacher')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!--
                      Form for create class  #end
                    --->

                    <!--
                      Container end
                    -->
                </div>
            </div>
        </div>
    </div>
@endsection
