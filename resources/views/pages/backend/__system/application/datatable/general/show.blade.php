@extends('layouts.backend.__templates.show')
@section('title', 'Datatable Generals')

@push('content')
<tr>
  <td class="align-middle font-weight-bold"> Name </td>
  <td class="align-middle text-nowrap"> {!! $data->name !!} </td>
</tr>
<tr>
  <td class="align-top font-weight-bold"> Description </td>
  <td class="align-middle"> {!! nl2br(e($data->description)) !!} </td>
</tr>
@endpush
