@extends('layouts.backend.default')

@push('head')
<link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
@endpush

@section('content')
<div class="card card-action">
  <div class="card-alert"></div>
  <div class="card-header border-bottom">
    <div class="card-action-title align-middle"> Main </div>
    <div class="card-action-element">
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="javascript:void(0);" class="card-collapsible"><i class="tf-icons ti ti-chevron-right scaleX-n1-rtl ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" class="card-reload"><i class="tf-icons ti ti-rotate-clockwise-2 scaleX-n1-rtl ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" class="card-expand"><i class="tf-icons ti ti-arrows-maximize ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" class="card-close"><i class="tf-icons ti ti-x ti-xs"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="collapse show">
    <div class="card-body">
      <div class="card-datatable">
        <div class="table-responsive">
          <table class="table" id="exilednoname_table" width="100%">
            <thead>
              <tr>
                <th></th>
                <th class="text-center"> # </th>
                @yield('table-header')
                <th style="padding-right: 50px;"> </th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
<script>
$(document).ready( function () {

});
</script>

<script>
  var indexLastColumn = $("#exilednoname_table").find('tr')[0].cells.length-1;
  $('#exilednoname_table').DataTable({
    serverSide: true,
    searching: true,
    processing: true,
    scrollX: true,
    scrollY: true,
    rowId: 'Collocation',
    select: {
      style: 'multi',
      selector: 'td:first-child .checkable',
    },
    ajax: {
      url: "{{ URL::current() }}",
    },
    headerCallback: function(thead, data, start, end, display) {
      thead.getElementsByTagName('th')[0].innerHTML = `<input class="form-check-input" type="checkbox" value="">`;
    },
    "lengthMenu": [[50, 100, 250, 500, -1], [50, 100, 250, 500, "All"]],
    buttons: [
      { extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
      { extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
      { extend: 'excelHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
      { extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
      { extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
      { extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
      { extend: 'excelHtml5', exportOptions: {  columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
      { extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
    ],
    columns: [
      {
        data: 'checkbox', orderable: false, searchable: false, 'width': '1',
        render: function(data, type, row, meta) { return '<input class="form-check-input" type="checkbox" value="">'; },
      },
      {
        data: 'autonumber', orderable: false, searchable: false, 'className': 'align-middle text-center', 'width': '1',
        render: function(data, type, row, meta) { return meta.row + meta.settings._iDisplayStart + 1; }
      },
      @yield('table-body')
      {
        data: 'action', orderable: false, searchable: false, 'className': 'align-middle text-center', 'width': '1',
        render: function(data, type, row) {
          return '' +
          '<div class="dropdown">' +
          '<button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
          '<i class="ti ti-dots-vertical ti-sm text-muted"></i>' +
          '</button>' +
          '<div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId" style="">' +
          '<a class="dropdown-item" href="{{ URL::current() }}/' + row.id + '">View More</a>' +
          '<a class="dropdown-item" href="{{ URL::current() }}/' + row.id + '/edit">Delete</a>' +
          '</div>'
          '</div>';
        },
      },
    ],
    order: [
      [indexLastColumn, 'asc']
    ]
  });
</script>
@endpush
