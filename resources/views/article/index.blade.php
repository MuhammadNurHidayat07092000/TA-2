@extends('main')

@section('title', 'Kategori Narkoba')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Artikel</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Artikel</a></li>
                        <li class="active">Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            @if (session('status'))
                <div class="alert alert-info">
                    {{ session('status') }}
                </div>
             @endif
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Data Artikel</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('articles/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i>Add
                        </a>
                    </div>
                </div>       
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>  
                        </thead>
                        <tbody>
                            @foreach ($articles as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>     
                                    <td>{{ $item->judul }}</td>
                                    <div class="text-center">
                                        <td>{{ $item->isi }}</td>
                                    </div>
                                    <td>
                                        <img src="{{ asset('style2/assets/img/artikel/' . $item->gambar) }}" width="100px" alt="image">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('articles/'.$item->id.'/edit'  ) }}" class="btn btn-primary btn-sm mb-1">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('articles/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>     
        </div>
    </div>
@endsection

