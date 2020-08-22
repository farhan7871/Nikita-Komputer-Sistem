<?php

namespace App\Http\Controllers\Admin;

use App\DataPembelian;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DataPenjualanRequest;
use App\DataPenjualan;
use App\KelolaBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DataPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = DataPenjualan::with(['data_penjualan'])->get();
        $items = DataPenjualan::all();

        return view('pages.admin.data-penjualan.index', [
            'items' => $items
        ]);
        // return view('pages.admin.data-penjualan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        $data_pembelians = DataPembelian::all();
        $kelola_barangs = KelolaBarang::all();

        // return view('pages.admin.data-penjualan.create', [
        //     'data_pembelians' => $data_pembelians
        // ]);

        return view('pages.admin.data-penjualan.create', [
            'data_pembelians' => $data_pembelians, 'kelola_barangs' => $kelola_barangs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataPenjualanRequest $request)
    {
        //
        // $data = $request->all();

        // DataPenjualan::create($data);
        // return redirect()->route('data-penjualan.index');
        // dd($data);

        $dataPenjualan = new DataPenjualan();
        $dataPenjualan->tanggal = $request->tanggal;
        $dataPenjualan->nama_pembeli = $request->nama_pembeli;
        $dataPenjualan->id_barang = $request->id_barang;
        $dataPenjualan->banyak = $request->banyak;
        $dataPenjualan->id_harga = $request->id_harga;
        $dataPenjualan->total = $request->banyak * $request->id_harga;
        $dataPenjualan->modal = $request->modal;
        $dataPenjualan->untung = $request->banyak * ($request->id_harga - $request->modal);
        $dataPenjualan->save();

        return redirect()->route('data-penjualan.index');
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

        // return view('pages.admin.data-penjualan.edit');
        $item = DataPenjualan::findOrFail($id);

        return view('pages.admin.data-penjualan.edit', [
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

        $data = request()->all();

        $item = DataPenjualan::findOrFail($id);
        $item->update($data);

        return redirect()->route('data-penjualan.index');
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
        $item = DataPenjualan::findOrFail($id);
        $item->delete();

        return redirect()->route('data-penjualan.index');
    }
}
