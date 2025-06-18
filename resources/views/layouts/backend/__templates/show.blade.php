@extends('layouts.backend.default')

@section('content')
<div class="card card-action">
  <div class="card-alert"></div>
  <div class="card-header border-bottom">
    <div class="card-action-title align-middle"> Details </div>
    <div class="card-action-element">
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="{{ $url }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back"><i class="tf-icons ti ti-arrow-narrow-left scaleX-n1-rtl ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Show QR"><i class="tf-icons ti ti-qrcode ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Print"><i class="tf-icons ti ti-printer ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" class="card-collapsible" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Minimize/Maximaze"><i class="tf-icons ti ti-chevron-down ti-xs"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="collapse show">
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
        </table>
      </div>
      <div class="divider divider-dashed text-end"><div class="divider-text"><i class="ti ti-cut rotate-n90"></i></div></div>
    </div>
  </div>

</div>
</div>
@endsection
