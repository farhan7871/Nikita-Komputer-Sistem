@extends('layouts.admin')

@section('title', 'Tulis Penjualan')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Penjualan</h1>
    </div>

    {{-- Menampilkan notifkasi error --}}
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
        <form action="{{route('data-penjualan.store')}}" method="post" enctype="multipart/form-data">
                @csrf   
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{old('tanggal')}}">
            </div>
                <div class="form-group">
                    <label for="nama_pembeli">Nama Pembeli</label>
                    <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pembeli" value="{{old('nama_pembeli')}}" >
            </div>

            <div class="form-group">
                <label for="id_barang">Nama Barang</label>
                <select name="id_barang" required class="form-control" onchange="document.getElementById('modal').value = this.options[this.selectedIndex].dataset.harga">
                    <option value="">Pilih Barang</option>
                    @foreach($kelola_barangs as $barang)
                    <option data-harga="{{$barang['harga']}}" value="{{ $barang->id }}">
                                    {{ $barang->nama_barang }}
                    </option>
                @endforeach
            </select>
        </div>

                <div class="form-group">
                    <label for="banyak">Banyak</label>
                    <input type="text" class="form-control" name="banyak" placeholder="Banyak" value="{{old('Banyak')}}" >
            </div>


            <div class="form-group">
                <label for="id_harga">Harga</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input id="harga"  type="text" class="form-control" name="id_harga" placeholder="Harga" value="{{old('id_harga')}}">
        </div>

            <div class="form-group">
                <label for="modal">Modal</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input id="modal" readonly type="text" class="form-control" name="modal" placeholder="Harga" value="{{old('modal')}}">
        </div>
         
            <button type="submit" class="btn btn-primary btn-block">
                Simpan</button>
        </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    
  
  <!-- /.container-fluid -->
@endsection