@extends('layouts.backend.default')

@push('head')
<link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
@endpush

@section('content')
<div class="card card-action">
  <div class="card-header border-bottom">
    <div class="card-action-title align-middle"> Main </div>
    <div class="card-action-element">
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="{{ URL::current() }}/create"><i class="tf-icons ti ti-plus ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" id="table-reload" class="card-reload"><i class="tf-icons ti ti-rotate-clockwise-2 scaleX-n1-rtl ti-xs"></i></a></li>
        <li class="list-inline-item"><a href="javascript:void(0);" class="card-expand"><i class="tf-icons ti ti-arrows-maximize ti-xs"></i></a></li>
        <li class="list-inline-item">
          <a href="javascript:void(0);" data-bs-toggle="dropdown"><i class="tf-icons ti ti-download ti-xs"></i></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:void(0);" id="export_copy"> {{ __('default.label.copy') }} </a>
            <a class="dropdown-item" href="javascript:void(0);" id="export_excel"> {{ __('default.label.excel') }} </a>
            <a class="dropdown-item" href="javascript:void(0);" id="export_pdf"> {{ __('default.label.pdf') }} </a>
            <a class="dropdown-item" href="javascript:void(0);" id="export_print"> {{ __('default.label.print') }} </a>
          </div>
        </li>

        <li class="list-inline-item"><a href="javascript:void(0);" class="card-collapsible" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Minimize/Maximaze"><i class="tf-icons ti ti-chevron-down ti-xs"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="collapse show">
    <div class="card-body" id="exilednoname_card">
      <div class="card-datatable">
        <div class="table-responsive">
          <table class="table" id="exilednoname_table" width="100%">
            <thead>
              <tr>
                <th class="no-export"></th>
                <th class="text-center no-export"> # </th>
                @yield('table-header')
                <th class="no-export" style="padding-right: 50px;"> </th>
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
<script src="{{ env('APP_URL') }}/assets/backend/vendor/libs/block-ui/block-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script>
  var indexLastColumn = $("#exilednoname_table").find('tr')[0].cells.length-1;
  var table = $('#exilednoname_table').DataTable({
    serverSide: true,
    searching: true,
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
      { extend: 'print', title: '', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
      { extend: 'excel', title: '', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
      { extend: 'copyHtml5', title: '', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
      { extend: 'pdfHtml5', title: '', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
      { extend: 'print', title: '', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
      { extend: 'copyHtml5', title: '', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
      { extend: 'excel', title: '', exportOptions: {  columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
      { extend: 'pdfHtml5', title: '', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
    ],
    columns: [
      {
        data: 'checkbox', orderable: false, searchable: false, 'className': 'align-top text-center', 'width': '1',
        render: function(data, type, row, meta) { return '<input class="form-check-input" type="checkbox" value="">'; },
      },
      {
        data: 'autonumber', orderable: false, searchable: false, 'className': 'align-top text-center', 'width': '1',
        render: function(data, type, row, meta) { return meta.row + meta.settings._iDisplayStart + 1; }
      },
      @yield('table-body')
      {
        data: 'action', orderable: false, searchable: false, 'className': 'align-top text-center', 'width': '1',
        render: function(data, type, row) {
          return '' +
          '<div class="dropdown">' +
          '<button class="btn p-0" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
          '<i class="ti ti-dots-vertical ti-sm text-muted"></i>' +
          '</button>' +
          '<div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId" style="">' +
          '<a class="dropdown-item" href="{{ URL::current() }}/' + row.id + '"> View </a>' +
          '<a class="dropdown-item" href="{{ URL::current() }}/' + row.id + '/edit"> Edit </a>' +
          '<a class="dropdown-item" href="{{ URL::current() }}/' + row.id + '"> Delete</a>' +
          '</div>'
          '</div>';
        },
      },
    ],
    order: [
      [indexLastColumn, 'asc']
    ]
  });
  $('#export_print').on('click', function(e) { e.preventDefault(); table.button(0).trigger(); });
  $('#export_excel').on('click', function(e) { e.preventDefault(); table.button(1).trigger(); });
  $('#export_copy').on('click', function(e) { e.preventDefault(); table.button(2).trigger(); });
  $('#export_pdf').on('click', function(e) { e.preventDefault(); table.button(3).trigger(); });
</script>

<script>
  $(document).ready(function() {
    $('#exilednoname_card').block({
      message:'<div class="sk-wave mx-auto"><div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div><div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div><div class="sk-rect sk-wave-rect"></div></div>',
      css: { backgroundColor: 'transparent', border: '0' },
      overlayCSS: { opacity: 0.5 },
      timeout: 1000,
    });
  });

  $("#table-reload").on("click", function() {
    $('#exilednoname_card').block({
      message:'<div class="sk-wave mx-auto"><div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div><div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div><div class="sk-rect sk-wave-rect"></div></div>',
      css: { backgroundColor: 'transparent', border: '0' },
      overlayCSS: { opacity: 0.5 },
      timeout: 1000,
    });
    setTimeout(function() { table.ajax.reload(); }, 1250);
  });
</script>
@endpush
