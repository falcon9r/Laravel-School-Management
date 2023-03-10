@extends('layout.master')

@section('title', 'Photo Gallery')

@section('content')

    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-sm-auto mb-2 mb-sm-0">
                    <h6 class="mb-0">Showing 1-24 of 205 Products</h6>
                </div>
                <div class="col-sm-auto">
                    <div class="row gx-2 align-items-center">
                        <div class="col-auto">
                            <a href="{{ route("admin.news.create") }}">
                                <button class="btn btn-outline-primary me-1 mb-1" type="button">
                                    <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Create
                                </button>
                            </a>
                        </div>
                        <div class="col-auto">
                            <form class="row gx-2">
                                <div class="col-auto"><small>Sort by: </small></div>
                                <div class="col-auto">
                                    <select class="form-select form-select-sm" aria-label="Bulk actions">
                                        <option selected="">Best Match</option>
                                        <option value="Refund">Newest</option>
                                        <option value="Delete">Price</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-auto pe-0"><a class="text-600 px-1" href="{{ route('admin.news.index') }}" data-bs-toggle="tooltip" title="News Grid"><span class="fas fa-th"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('alerts.success')
    <div class="card">
        <div class="card-body p-0 overflow-hidden">
            <div class="row g-0">
                @foreach($news as $new)
                <div class="col-12 p-card">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="position-relative h-sm-100"><a class="d-block h-100" href="#">
                                    <img class="img-fluid fit-cover w-sm-100 h-sm-100 rounded-1 absolute-sm-centered"
                                         src="{{ asset('storage/' . $new->photo) }}" alt="" />
                                </a>
                                <div class="badge rounded-pill bg-success position-absolute top-0 end-0 me-2 mt-2 fs--2 z-index-2">New</div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                    <div class="col-lg-8">
                                        <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1" href="{{ route('admin.news.show' , $new->id) }}"> {{ $new->title }} </a></h5>
                                        <p class="fs--1 mb-2 mb-md-3">Date {{ $new->date == null ? "???? ??????????????" : $new->date }}</p>
                                    </div>
                                    <div class="col-lg-4 d-flex justify-content-between flex-column">
                                        <div>
                                            <h4 class="fs-1 fs-md-2 text-warning mb-0">$1199.5</h4>
                                            <h5 class="fs--1 text-500 mb-0 mt-1">
                                                <del>$2399 </del><span class="ms-1">-50%</span>
                                            </h5>
                                            <div class="mb-2 mt-3"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span><span class="ms-1">(8)</span>
                                            </div>
                                            <div class="d-none d-lg-block">
                                                <p class="fs--1 mb-1">Shipping Cost: <strong>$50</strong></p>
                                                <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-2"><a class="btn btn-sm btn-outline-secondary border-300 d-lg-block me-2 me-lg-0" href="#!"><span class="far fa-heart"></span><span class="ms-2 d-none d-md-inline-block">Favourite</span></a><a class="btn btn-sm btn-primary d-lg-block mt-lg-2" href="#!"><span class="fas fa-cart-plus"> </span><span class="ms-2 d-none d-md-inline-block">Add to Cart</span></a></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer border-top d-flex justify-content-center">
                {{ $news->onEachSide(2)->links()}}
        </div>
    </div>
@endsection
