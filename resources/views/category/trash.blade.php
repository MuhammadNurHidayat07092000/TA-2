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
                    <li class="active">Trash</li>
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
                    <strong>Data Kategori Terhapus</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('categories/delete') }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus semua data?')">
                        <i class="fa fa-trash"></i>Delete All
                    </a>
                
                    <a href="{{ url('categories/restore') }}" class="btn btn-info btn-sm">
                        <i class="fa fa-undo"></i>Restore All
                    </a>            
                    <a href="{{ url('categories/') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-chevron-left"></i>Back
                    </a>
               
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Jenis Kategori</th>
                            <th>Golongan</th>
                            <th>Aksi</th>
                        </tr>  
                    </thead>
                    <tbody>
                        @if ($categories->count() > 0 )
                            @foreach ($categories as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->jenis_kategori }}</td>
                                    <td>{{ $item->golongan }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('categories/restore/' .$item->id) }}" class="btn btn-info btn-sm">
                                            Restore
                                        </a>
                                        <a href="{{ url('categories/delete/' .$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus permanen?')">
                                            Delete Permanen
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">Data Kosong</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection