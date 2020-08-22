<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KelolaBarangRequest as AdminKelolaBarangRequest;
use App\KelolaBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KelolaBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = KelolaBarang::all();

        return view('pages.admin.kelola-barang.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.kelola-barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminKelolaBarangRequest $request)
    {
        //
        $data = $request->all();

        KelolaBarang::create($data);
        return redirect()->route('kelola-barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = KelolaBarang::findOrFail($id);

        return view('pages.admin.kelola-barang.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();

        $item = KelolaBarang::findOrFail($id);

        $item->update($data);

        return redirect()->route('kelola-barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = KelolaBarang::findOrFail($id);
        $item->delete();

        return redirect()->route('kelola-barang.index');
    }
}
