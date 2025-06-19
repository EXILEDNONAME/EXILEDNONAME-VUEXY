@extends('layouts.backend.default')

@section('content')
<div class="card card-action mb-4">
  <div class="card-header border-bottom">
    <div class="card-action-title align-middle fw-bold text-uppercase"> {{ __('default.label.edit') }} </div>
    <div class="card-action-element">
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="{{ $url }}"><i class="tf-icons ti ti-arrow-back ti-xs"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="collapse show">
    <div class="card-body">
      <form method="POST" id="exilednoname-form" action="{{ URL::current() }}/../../{{ $data->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <input name="id" type="hidden" value="{{ $data->id }}">
        @include($path . 'form', ['formMode' => 'edit'])
        <hr>
        <p class="text-end">
          <button type="submit" class="btn btn-primary text-uppercase"> {{ __('default.label.submit') }} </button>
          <a href="javascript:void(0);"><button type="button" class="btn btn-danger text-uppercase" id="cancel"> {{ __('default.label.cancel') }} </button></a>
        </p>
      </form>
    </div>
  </div>
</div>
@endsection

@push('js')
<script src="{{ env('APP_URL') }}/assets/backend/vendor/libs/autosize/autosize.js"></script>
<script> autosize(document.querySelector('#exilednoname-autosize')); </script>
<script>
  $('body').on('click', '#cancel', function () {
    Swal.fire({
      icon: 'question', text: "{{ __('default.notification.confirm.cancel') }}?",
      confirmButtonText: "{{ __('default.label.yes') }}", cancelButtonText: "{{ __('default.label.cancel') }}",
      customClass: { confirmButton: 'btn btn-primary text-uppercase', cancelButton: 'btn btn-danger text-uppercase' },
      showCancelButton: true, buttonsStyling: false,
    }).then(function (result) { if (result.value) { window.location = "{{ $url }}"; } });
  });
</script>
@endpush
