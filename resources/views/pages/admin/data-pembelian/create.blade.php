@extends('layouts.admin')

@section('title', 'Tulis Pembelian')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Data Pembelian</h1>
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
        <form action="{{route('data-pembelian.store') }}" method="post">
                @csrf   
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{old('tanggal')}}" >
            </div>
            <div class="form-group">
                <label for="id_toko">Nama Toko</label>
                <select name="id_toko" required class="form-control">
                    <option value="">Pilih Toko</option>
                    @foreach($kelola_tokos as $toko)
                    <option  value="{{ $toko->id }}">
                                    {{ $toko->nama_toko }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_barang">Nama Barang</label>
            <select name="id_barang" required class="form-control" onchange="document.getElementById('harga').value = this.options[this.selectedIndex].dataset.harga">
                <option value="">Pilih Barang</option>
                @foreach($kelola_barangs as $barang)
                <option data-harga="{{$barang['harga']}}" value="{{ $barang->id }}">
                                {{ $barang->nama_barang }}
                </option>
            @endforeach
        </select>
    </div>

                <div class="form-group">
                    <label for="banyak">Banyak Barang</label>
                    <input type="number" class="form-control" name="banyak" placeholder="Banyak Barang" value="{{old('banyak')}}">
            </div>
                <div class="form-group">
                    <label for="jual">Harga Jual</label>
                    <input type="number" class="form-control" name="jual" placeholder="Harga Jual" value="{{old('jual')}}">
                    <span>isi angka 0</span>
            </div>
                <div class="form-group">
                    <label for="harga">Harga Satuan</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Rp.</div>
                        </div>
                        <input id="harga" readonly type="text" class="form-control" name="harga" placeholder="Harga" value="{{old('harga')}}">
            </div>
                {{-- <div class="form-group">
                    <label for="jual">Harga Jual</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Rp.</div>
                        </div>
                        <input type="text" class="form-control" name="jual"  placeholder="Harga Jual" value="{{old('jual')}}">
            </div> --}}
        
            <button type="submit" class="btn btn-primary btn-block">
                Simpan</button>
        </form>
        </div>
    </div>
    </div>

</div>

  
  <!-- /.container-fluid -->
@endsection