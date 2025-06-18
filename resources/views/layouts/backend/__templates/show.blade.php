@extends('layouts.backend.default')

@section('content')
<div class="card card-action">
  <div class="card-header border-bottom">
    <div class="card-action-title align-middle"> Details </div>
    <div class="card-action-element">
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="{{ $url }}"><i class="tf-icons ti ti-arrow-narrow-left scaleX-n1-rtl ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalCenter"><i class="tf-icons ti ti-qrcode ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" onclick="printData('printData')"><i class="tf-icons ti ti-printer ti-xs"></i></a></li>
        <li class="list-inline-item">
          <a href="javascript:void(0);" data-bs-toggle="dropdown"> <i class="tf-icons ti ti-chevron-down ti-xs"></i> </a>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="javascript:void(0);"> Edit </a>
            <a class="dropdown-item" href="javascript:void(0);"> Delte </a>
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
              <td class="align-middle font-weight-bold"> Active </td>
              <td class="align-middle"> {!! $data->active !!} </td>
            </tr>
            <tr>
              <td class="align-middle font-weight-bold"> Status </td>
              <td class="align-middle"> {!! $data->status !!} </td>
            </tr>
            <tr>
              <td class="align-middle font-weight-bold"> Created At </td>
              <td class="align-middle"> {!! $data->created_at !!} </td>
            </tr>
            <tr>
              <td class="align-middle font-weight-bold"> Created By </td>
              <td class="align-middle"> {!! $data->created_by !!} </td>
            </tr>
            <tr>
              <td class="align-middle font-weight-bold"> Updated At </td>
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
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
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
@endpush
