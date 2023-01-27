@extends('layout.master')

@section('title', 'School Management System')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" > Schedule </h5>
                </div>
            </div>
        </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @foreach($days as $key => $day)
                        @if($key == $day_id)
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-{{ $key }}" data-bs-toggle="tab" href="#content-{{  $key }}">
                                {{ $day }}
                            </a>
                        </li>
                        @else
                            <li class="nav-item">
                                @php
                                @endphp
                                <a class="nav-link" id="tab-{{ $key }}"  href="{{ route('admin.schedules.edit' , [$class_id, $key ]) }}">
                                    {{ $day }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
                <div class="tab-content p-3" id="myTabContent">
                    @foreach($days as $key => $day)
                        @if($key == $day_id)
                            <div class="tab-pane fade show active" id="content-{{ $key }}" role="tabpanel" aria-labelledby="">
                                <form action="{{ route('admin.schedules.store') }}" method="post">
                                    @csrf

                                    @if(Session::has('success'))
                                        <div class="alert alert-success border-2 d-flex align-items-center" role="alert">
                                            <div class="bg-success me-3 icon-item"><span
                                                        class="fas fa-check-circle text-white fs-3"></span></div>
                                            <p class="mb-0 flex-1">{{ Session::get('success') }}</p>
                                            <button class="btn-close" type="button" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if(Session::has('error'))
                                        <div class="alert alert-danger border-2 d-flex align-items-center" role="alert">
                                            <div class="bg-error me-3 icon-item"><span
                                                        class="fas fa-check-circle text-white fs-3"></span></div>
                                            <p class="mb-0 flex-1">{{ Session::get('error') }}</p>
                                            <button class="btn-close" type="button" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Hour</th>
                                            <th>Subject</th>
                                            <th>Teacher</th>
                                        </tr>
                                        @php
                                            $counter = 0;
                                            $limit = 6;
                                        @endphp
                                        @foreach($schedules as $schedule)
                                            <tr>
                                                <td>
                                                    <span>
                                                        {{ $schedule->hour }}
                                                       <input type="number" style="display:none;" value="{{ $schedule->hour }}" name="hours[{{ $counter }}]">
                                                    </span>
                                                </td>
                                                <td>
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="subjects[{{ $counter }}]">
                                                        @foreach($subjects as $subject)
                                                            @if($schedule->subject->id == $subject['id'])
                                                                <option value="{{ $subject['id'] }}" selected> {{ $subject['name']  }}</option>
                                                            @else
                                                                <option value="{{ $subject['id'] }}"> {{ $subject['name']  }}</option>
                                                            @endif
                                                        @endforeach
                                                            <option value="">Delete</option>
                                                    </select>
                                                </td>

                                                <td>

                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="teachers[{{ $counter }}]">
                                                        <option selected="">Select teacher</option>
                                                        @foreach($teachers as $teacher)
                                                            @if($teacher->id == $schedule->teacher_id)
                                                                <option value="{{ $teacher->id }}" selected> {{ $teacher  }}</option>
                                                            @else
                                                                <option value="{{ $teacher->id }}"> {{ $teacher  }}</option>
                                                            @endif
                                                        @endforeach
                                                        <option value="">Delete</option>
                                                    </select>
                                                </td>
                                                @php
                                                $counter++;
                                                @endphp
                                            </tr>
                                        @endforeach
                                        @for($counter; $counter < $limit; $counter++)
                                            <tr>
                                                <td>
                                                    <span>
                                                        {{ $counter + 1 }}
                                                    </span>
                                                    <input  class="form-control" type="number" value="{{ $counter + 1 }}" name="hours[{{ $counter }}]" style="display: none">

                                                </td>
                                                <td>
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="subjects[{{ $counter }}]">
                                                        <option value="" selected="">Select subject</option>
                                                        @foreach($subjects as $subject)
                                                            <option value="{{ $subject['id'] }}"> {{ $subject['name']  }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td>
                                                    <select class="form-select form-select-sm"   aria-label=".form-select-sm example" name="teachers[{{ $counter }}]">
                                                        <option value="" selected="">Select teacher</option>
                                                        @foreach($teachers as $teacher)
                                                            <option value="{{ $teacher->id }}"> {{ $teacher  }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                        @endfor
                                    </table>
                                    <input type="text" style="display: none" value="{{ $day_id }}" name="day">
                                    <input type="text" style="display: none" value="{{ $class_id }}" name="class_id">

                                    <div class="mb-3">
                                        <input type="submit" value="Save" class="btn-outline-facebook btn" style="width: 100%">
                                    </div>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

