@extends('main')

@section('title', 'Artikel')

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
                        Ubah Artikel
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('articles') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                </div>       
                <div class="card-body">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('articles/'.$article->id) }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" class="form-control" value="{{ $article->judul }}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi</label>
                                <textarea name="isi" id="isi" cols="50" rows="10">{{ $article->isi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" value="{{ $article->gambar }}" required>
                                {{-- <img src="" alt=""> --}}
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>     
        </div>
    </div>
@endsection