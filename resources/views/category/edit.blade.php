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
                        <li class="active">Ubah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        Ubah Kategori Narkoba
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('categories') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                </div>       
                <div class="card-body">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('categories/' . $category->id) }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="jenis_kategori">Jenis Kategori</label>
                                <input type="text" name="jenis_kategori" class="form-control" value="{{ $category->jenis_kategori }}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="golongan">Golongan</label>
                                <input type="text" name="golongan" class="form-control" value="{{ $category->golongan }}" required>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>     
        </div>
    </div>
@endsection