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
      <form method="POST" action="{{ URL::current() }}/../" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3 row">
          <label class="col-md-3 col-form-label">Text</label>
          <div class="col-md-9">
            {{ Html::search('name', (isset($data->name) ? $data->name : ''))->class([ $errors->has('name') ? 'form-control is-invalid' : 'form-control'])->required() }}
            @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-md-3 col-form-label">Text</label>
          <div class="col-md-9">
            <input class="form-control" type="text">
          </div>
        </div>
        <hr>
        <p class="text-end">
          <button type="submit" class="btn btn-primary"> Submit </button>
          <a href="javascript:void(0);"><button type="button" class="btn btn-danger" id="cancel"> Cancel </button></a>
        </p>
      </form>
    </div>
  </div>
</div>
@endsection

@push('js')
<script>
$('body').on('click', '#cancel', function () {
  Swal.fire({
    // title: 'Apa anda yakin?',
    text: "Apa anda yakin menutup halaman ini, dan kembali ke halaman awal?",
    icon: 'question',
    showCancelButton: true,
    confirmButtonText: 'Ya',
    cancelButtonText: 'Batalkan',
    customClass: {
      confirmButton: 'btn btn-primary me-3',
      cancelButton: 'btn btn-label-secondary'
    },
    buttonsStyling: false,
  }).then(function (result) {
    if (result.value) {
      window.location = "{{ $url }}";
    }
  });
});
</script>
@endpush
