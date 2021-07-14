@extends('front-end.template')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    {!! $html->scripts() !!}
@endsection

@section('content')
<div class="table-responsive">
    {!! $html->table() !!}
</div>
@endsection
