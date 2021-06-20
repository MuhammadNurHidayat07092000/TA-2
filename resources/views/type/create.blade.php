@extends('main')

@section('title', 'Jenis Narkoba')

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
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Tambah Jenis Narkoba</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('types') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                </div>       
                <div class="card-body">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('types') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama_narkoba">Nama Narkoba</label>
                                <input type="text" name="nama_narkoba" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="id_kategori">Kategori</label>
                                <select name="id_kategori" id="id_kategori" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($category as $item)
                                      <option value="{{ $item->id }}">{{ $item->jenis_kategori }} golongan {{ $item->golongan }}</option>      
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" alt="submit" width="" height="" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" cols="50" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="epek_gejala">Efek dan Gejala</label>
                                <textarea name="epek_gejala" id="epek_gejala" cols="50" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>     
        </div>
    </div>
@endsection