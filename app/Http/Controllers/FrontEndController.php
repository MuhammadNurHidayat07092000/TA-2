<?php

namespace App\Http\Controllers;

use App\Article;
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

    public function pencarian()
    {
        return view('front-end.ttgnark');
    }
}
