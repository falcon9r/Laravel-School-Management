@extends('layout.master')

@section('title', 'School Management System')

@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Students</h5>
                </div>
                <div class="col-auto ms-auto">
                    <a href="{{ route('admin.students.create' , $class_id ) }}">
                        <button class="btn btn-outline-primary me-1 mb-1" type="button">
                            <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Create
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                     aria-labelledby="tab-dom-316cb649-6a3e-4ec3-9de8-7d83e880873f"
                     id="dom-316cb649-6a3e-4ec3-9de8-7d83e880873f">
                    <div id="tableExample" data-list='{"valueNames":["name"],"page":5,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                                <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort" data-sort="id">Name</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($students as $student)
                                    <tr>
                                        <td name="name">{{ $student['id'] }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="pagination d-none"></div>
                            <div class="col">
                                <p class="mb-0 fs--1">
                                    <span class="d-none d-sm-inline-block" data-list-info="data-list-info"></span>
                                    <span class="d-none d-sm-inline-block"> &mdash; </span>
                                    <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span
                                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                                        class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                </p>
                            </div>
                            <div class="col-auto d-flex">
                                <button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span>
                                </button>
                                <button class="btn btn-sm btn-primary px-4 ms-2" type="button"
                                        data-list-pagination="next"><span>Next</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
