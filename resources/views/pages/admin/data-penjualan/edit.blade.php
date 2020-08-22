@extends('layouts.admin')

@section('title', 'Tulis Pembelian')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Data Penjualan</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach  
        </ul>
        </div>
    @endif


    <div class="card shadow">
        <div class="card-body">
        <form action="{{route('data-penjualan.update', $item->id) }}" method="post">
            @method('PUT')    
            @csrf   
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{($item->tanggal)}}" >
            </div>
                <div class="form-group">
                    <label for="nama_pemnbeli">Nama Pembeli</label>
                    <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pembeli" value="{{($item->nama_pembeli)}}">
            </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" readonly class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{($item->barang->nama_barang)}}">
            </div>

                <div class="form-group">
                    <label for="banyak">Banyak Barang</label>
                    <input type="text" class="form-control" name="banyak" placeholder="Banyak Barang" value="{{($item->banyak)}}">
            </div>
                <div class="form-group">
                    <label for="id_harga">Harga Jual</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Rp.</div>
                        </div>
                        <input type="number" class="form-control" name="id_harga" placeholder="Harga" value="{{($item->id_harga)}}">
            </div>
                <div class="form-group">
                    <label for="modal">Modal</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Rp.</div>
                        </div>
                        <input readonly type="number" class="form-control" name="jual" placeholder="Modal" value="{{($item->modal)}}">
            </div>
        
            <button type="submit" class="btn btn-primary btn-block">
                Ubah</button>
        </form>
        </div>
    </div>
    </div>

</div>
</div>
  
  <!-- /.container-fluid -->
@endsection