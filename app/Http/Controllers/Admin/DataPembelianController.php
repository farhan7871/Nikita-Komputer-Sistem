<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DataPembelianRequest;
use App\DataPembelian;
use App\KelolaToko;
use App\KelolaBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DataPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = DataPembelian::all();

        return view('pages.admin.data-pembelian.index', [
            'items' => $items
        ]);
        // return view('pages.admin.data-pembelian.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kelola_tokos = KelolaToko::all();
        $kelola_barangs = KelolaBarang::all();
        return view('pages.admin.data-pembelian.create', [
            'kelola_tokos' => $kelola_tokos, 'kelola_barangs' => $kelola_barangs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(DataPembelianRequest $request)
    {
        $dataPembelian = new DataPembelian();
        $dataPembelian->tanggal = $request->tanggal;
        $dataPembelian->id_toko = $request->id_toko;
        $dataPembelian->id_barang = $request->id_barang;
        $dataPembelian->banyak = $request->banyak;
        $dataPembelian->harga = $request->harga;
        $dataPembelian->total = $request->harga * $request->banyak;
        $dataPembelian->jual = $request->jual;
        $dataPembelian->save();

        return redirect()->route('data-pembelian.index');
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
        $item = DataPembelian::findOrFail($id);

        return view('pages.admin.data-pembelian.edit', [
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

        // $data['slug']= Str::slug($reques)
        $item = DataPembelian::findOrFail($id);

        $item->update($data);
        return redirect()->route('data-pembelian.index');
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
        $item = DataPembelian::findOrFail($id);
        $item->delete();

        return redirect()->route('data-pembelian.index');
    }
}
