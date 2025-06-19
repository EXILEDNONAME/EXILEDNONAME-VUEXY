@extends('layouts.backend.default')

@section('content')
<div class="card card-action mb-4">
  <div class="card-header border-bottom">
    <div class="card-action-title align-middle fw-bold text-uppercase"> {{ __('default.label.details') }} </div>
    <div class="card-action-element">
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="{{ $url }}"><i class="tf-icons ti ti-arrow-narrow-left scaleX-n1-rtl ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal_qrcode"><i class="tf-icons ti ti-qrcode ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" onclick="printData('printData')"><i class="tf-icons ti ti-printer ti-xs"></i></a></li>
        <li class="list-inline-item">
          <a href="javascript:void(0);" data-bs-toggle="dropdown"><i class="tf-icons ti ti-chevron-down ti-xs"></i></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ URL::current() }}/edit"> {{ __('default.label.edit') }} </a>
            <form method="POST" id="exilednoname-form" class="nav-link" action="{{ URL::current() }}/../{{ $data->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
              @method('DELETE')
              @csrf
              <a class="dropdown-item" href="javascript:void(0);" id="delete"> {{ __('default.label.delete./') }} </a>
            </form>
          </div>
          </li>
      </ul>
    </div>
  </div>
  <div class="collapse show">
    <div id="printData">
      <div class="card-body overflow-auto">
        <div class="table-responsive">
          <table class="table" width="100%">
            <tr>
              <td class="text-nowrap" style="padding-right:150px"></td>
              <td class="text-nowrap"> </td>
            </tr>
            @stack('content')
            <tr>
              <td class="align-middle font-weight-bold"> {{ __('default.label.active') }} </td>
              <td class="align-middle">
                @if ( $data->active == 1 ) {{ __('default.label.yes') }}
                @else {{ __('default.label.no') }}
                @endif
              </td>
            </tr>
            <tr>
              <td class="align-middle font-weight-bold"> {{ __('default.label.status') }} </td>
              <td class="align-middle text-nowrap"> {!! $data->status !!} </td>
            </tr>
            <tr>
              <td class="align-middle font-weight-bold"> {{ __('default.label.created_at') }} </td>
              <td class="align-middle text-nowrap"> {{ \Carbon\Carbon::parse($data->created_at)->format('d F Y, H:i') }} </td>
            </tr>
            <tr>
              <td class="align-middle font-weight-bold"> {{ __('default.label.created_by') }} </td>
              <td class="align-middle text-nowrap">
                @if ($data->created_by == 0 || $data->created_by == NULL) - System -
                @else {{ \DB::table('users')->where('id', $data->created_by)->first()->name }}
                @endif
              </td>
            </tr>
            <tr>
              <td class="align-middle font-weight-bold"> {{ __('default.label.updated_at') }} </td>
              <td class="align-middle"> {!! $data->updated_at !!} </td>
            </tr>
          </table>
        </div>
        <div class="divider divider-dashed text-end"><div class="divider-text"><i class="ti ti-cut rotate-n90"></i></div></div>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_qrcode" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-center"> {!! QrCode::size(250)->generate(URL::current()); !!} </p>
      </div>
    </div>
  </div>
</div>


@endsection

@push('js')
<script>
  function printData(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
  }
</script>

<script>
$('body').on('click', '#delete', function (e) {
  e.preventDefault()
  Swal.fire({
    icon: 'warning', text: "{{ __('default.notification.confirm.delete') }}?",
    confirmButtonText: "{{ __('default.label.yes') }}", cancelButtonText: "{{ __('default.label.cancel') }}",
    customClass: { confirmButton: 'btn btn-primary text-uppercase', cancelButton: 'btn btn-danger text-uppercase' },
    showCancelButton: true, buttonsStyling: false,
  }).then(function(result) {
    if (result.value) {
      $(e.target).closest('form').submit()
    }
  });
});
</script>
@endpush
