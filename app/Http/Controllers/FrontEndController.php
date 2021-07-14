<?php

namespace App\Http\Controllers;

use App\Article;
use App\Type;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function artikel($id)
    {
        $articles = Article::where('id', $id)->get();
        return view('front-end.artikel', compact('articles'));
    }

    public function dampak()
    {
        return view('front-end.dampak');
    }

    public function penyebab()
    {
        return view('front-end.penyebab');
    }

    public function sejarah()
    {
        return view('front-end.sejarah');
    }

    public function struktur()
    {
        return view('front-end.struktur');
    }

    public function uu()
    {
        return view('front-end.UUnarkotika');
    }

    public function visimisi()
    {
        return view('front-end.visi_misi');
    }

    public function jenisnark()
    {
        return view('front-end.jenisnark');
    }

    public function pencarian(Builder $builder)
    {
        if (request()->ajax()) {
            $data = Type::with('category')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('des', function ($data) {
                    return Str::words($data->deskripsi, 5, '...');
                })
                ->addColumn('efek', function ($data) {
                    return Str::words($data->epek_gejala, 3, '...');
                })
                ->addColumn('action', function ($data) {
                    return '
                        <a href="' . route('cari-detail', $data->id) . '" class="btn btn-info btn-sm"><i class="icofont-eye-alt"></i></a>
                      ';
                })
                ->make(true);
        }
        $html = $builder->columns([
            ['data' => 'DT_RowIndex', 'orderable', 'title' => 'No', 'orderable' => false, 'searchable' => false],
            ['data' => 'nama_narkoba', 'title' => 'Nama Narkoba'],
            ['data' => 'des', 'title' => 'Deskripsi'],
            ['data' => 'efek', 'title' => 'Efek Gejala'],
            ['data' => 'category.jenis_kategori', 'title' => 'Jenis Kategori'],
            ['data' => 'action', 'title' => 'Aksi', 'orderable' => false, 'searchable' => false]
        ])->parameters([
            'language' => [
                'url' => asset('tables_indo.json')
            ]
        ]);
        // return view('category.index', compact('html'));
        return view('front-end.ttgnark', compact('html'));
    }
    public function pencarianDetail($id)
    {
        $data = Type::with('category')->where('id', $id)->first();
        return view('front-end.ttgnark-detail', compact('data'));
    }
}
