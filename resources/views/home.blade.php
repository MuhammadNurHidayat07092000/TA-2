@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="fa fa-dashboard"></i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            {{-- @foreach ($jenisnarkoba as $item) --}}
                <div class="col-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <a href={{ url('types') }}>
                                    <i class="fa fa-tag bg-flat-color-3 p-3 font-2xl mr-3 float-left text-light"></i>
                                </a>
                                <div class="h5 text-secondary mb-0 mt-1">40</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Data Jenis</div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
            
            {{-- @foreach ($kategorinarkoba as $item) --}}
                <div class="col-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <a href={{ url('categories') }}>
                                    <i class="fa fa-tags bg-flat-color-4 p-3 font-2xl mr-3 float-left text-light"></i>
                                </a>
                                <div class="h5 text-secondary mb-0 mt-1">45</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Data Kategori</div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}

           {{--  --}}
                <div class="col-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <a href={{ url('articles') }}>
                                    <i class="fa fa-book bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                                </a>
                                <div class="h5 text-secondary mb-0 mt-1">83</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Data Artikel</div>
                            </div>
                        </div>
                    </div>
                </div>
            {{--  --}}
        </div>
    </div>
@endsection