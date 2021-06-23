<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Prophecy\Call\Call;

// use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        Category::create($request->all());

        return redirect('categories')->with('status', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->jenis_kategori = $request->jenis_kategori;
        $category->golongan = $request->golongan;
        $category->save();

        return redirect('categories')->with('status', 'Kategori berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('categories')->with('status', 'Kategori berhasil terhapus sementara!');
    }

    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
        return view('category.trash', compact('categories'));
    }

    public function restore($id = null)
    {
        if ($id != null) {
            $categories = Category::onlyTrashed()
                ->where('id', $id)
                ->restore();
        } else {
            $categories = Category::onlyTrashed()->restore();
        }

        return redirect('categories/trash')->with('status', 'Kategori berhasil direstore!');
    }

    public function delete($id = null)
    {
        if ($id != null) {
            $categories = Category::onlyTrashed()
                ->where('id', $id)
                ->forceDelete();
        } else {
            $categories = Category::onlyTrashed()->forceDelete();
        }

        return redirect('categories/trash')->with('status', 'Kategori berhasil dihapus permanen!');
    }
}
