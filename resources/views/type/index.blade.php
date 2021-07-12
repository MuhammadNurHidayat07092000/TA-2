@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Jenis Narkoba</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Jenis Narkoba</a></li>
                        <li class="activa">Data</li>
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
                <div class="alert alert-warning">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Data Jenis Narkoba</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('types/trash') }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>Trash
                        </a>
                        <a href="{{ url('types/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i>Add
                        </a>
                    </div>
                </div>       
                <div class="card-body table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>  
                        </thead>
                        <tbody>
                            @foreach ($types as $key => $item)
                                <tr>
                                    <td>{{ $types->firstItem() + $key}}</td>
                                    <td>{{ $item->nama_narkoba }}</td>
                                    <td>{{ $item->category->jenis_kategori }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('types/'.$item->id.'/edit' ) }}" class="btn btn-primary btn-sm mb-1">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('types/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
                    <div class="pull-left">
                        Showing
                        {{ $types->firstItem() }}
                        to
                        {{ $types->lastItem() }}
                        of
                        {{ $types->total() }}
                    </div>
                    <div class="pull-right">
                        {{ $types->links() }}
                    </div>
                </div>
            </div>     
        </div>
    </div>
@endsection