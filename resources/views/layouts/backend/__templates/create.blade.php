@extends('layouts.backend.default')

@section('content')
<div class="card card-action mb-4">
  <div class="card-header border-bottom">
    <div class="card-action-title align-middle fw-bold"> CREATE </div>
    <div class="card-action-element">
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="{{ $url }}"><i class="tf-icons ti ti-arrow-back ti-xs"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="collapse show">
    <div class="card-body">
      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Text</label>
        <div class="col-md-10">
          <input class="form-control" type="text">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="html5-search-input" class="col-md-2 col-form-label">Search</label>
        <div class="col-md-10">
          <input class="form-control" type="search">
        </div>
      </div>
      <hr>
      <p class="text-end">
        <button type="button" class="btn btn-primary"> Submit </button>
        <a href="{{ $url }}"><button type="button" class="btn btn-danger"> Cancel </button></a>
      </p>

    </div>
  </div>
</div>
@endsection
