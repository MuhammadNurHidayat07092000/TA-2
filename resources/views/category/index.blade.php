@extends('main')

@section('title', 'Kategori Narkoba')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Kategori Narkoba</h1>
                </div>
               
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Kategori Narkoba</a></li>
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
            {{-- <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Success</span>
                You successfully read this important alert.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div> --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Data Kategori Narkoba</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('categories/trash') }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>Trash
                        </a>
                        <a href="{{ url('categories/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i>Add
                        </a>
                    </div>
                </div>       
                <div class="card-body table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Kategori</th>
                                <th>Golongan</th>
                                <th>Aksi</th>
                            </tr>  
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $item)
                                <tr>
                                    <td>{{ $categories->firstItem() + $key }}</td>     
                                    <td>{{ $item->jenis_kategori }}</td>
                                    <td>{{ $item->golongan }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('categories/'.$item->id .'/edit' ) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('categories/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
                        {{ $categories->firstItem() }}
                        to
                        {{ $categories->lastItem() }}
                        of
                        {{ $categories->total() }}
                    </div>
                    <div class="pull-right">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>     
        </div>
    </div>
@endsection