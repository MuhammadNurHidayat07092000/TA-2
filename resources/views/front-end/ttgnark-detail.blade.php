@extends('front-end.template')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        {{ strtoupper($data->nama_narkoba) }}
        <a href="{{ route('cari') }}" class="btn btn-sm btn-warning float-right">Kembali</a>
    </div>
    <div class="card-body">
        <p>Kategori : {!! strtoupper($data->category->jenis_kategori) !!}</p>
        <p>Golongan : {!! strtoupper($data->category->golongan) !!}</p>
        <p>{!! $data->deskripsi !!}</p>
        <p>{!! $data->epek_gejala !!}</p>
    </div>
</div>
@endsection
