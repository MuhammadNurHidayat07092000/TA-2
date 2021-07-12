<?php

namespace App\Http\Controllers;

use App\Category;
use App\Type;
use Illuminate\Http\Request;
use Prophecy\Call\Call;

use function PHPSTORM_META\type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::paginate(10);
        // dd($types);
        return view('type/index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('type.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Type::create($request->all());

        $filename = $request->gambar->getClientOriginalName();
        $gambar = $request->gambar->storeAs('img', $filename);

        // $request->gambar = $gambar;
        return redirect('types')->with('status', 'Jenis Narkoba berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        $categories = Category::all();
        return view('type.edit', compact('type', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $type->nama_narkoba = $request->nama_narkoba;
        $type->id_kategori = $request->id_kategori;
        $type->gambar = $request->gambar;
        $type->deskripsi = $request->deskripsi;
        $type->epek_gejala = $request->epek_gejala;

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('style2/assets/img/narkoba'), $filename);
            $type->image = $request->file('gambar')->getClientOriginalName();
        }

        $type->save();

        return redirect('types')->with('status', 'Jenis Narkoba berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect('types')->with('status', 'Jenis narkoba berhasil terhapus sementara!');
    }

    public function trash()
    {
        $types = Type::onlyTrashed()->get();
        return view('type.trash', compact('types'));
    }

    public function restore($id = null)
    {
        if ($id != null) {
            $types = Type::onlyTrashed()
                ->where('id', $id)
                ->restore();
        } else {
            $types = Type::onlyTrashed()->restore();
        }
    }

    public function delete($id = null)
    {
        if ($id != null) {
            $types = Type::onlyTrashed()
                ->where('id', $id)
                ->forceDelete();
        } else {
            $types = Type::onlyTrashed()->forceDelete();
        }

        return redirect('types/trash')->with('status', 'Jenis narkoba berhasil dihapus permanen!');
    }
}
