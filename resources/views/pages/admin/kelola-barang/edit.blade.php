@extends('layouts.admin')

@section('title', 'Edit Barang')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Data Barang</h1>
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
        <form action="{{route('kelola-barang.update', $item->id) }}" method="post">
            @method('PUT')    
            @csrf   
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{($item->nama_barang)}}" >
            </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis Barang</label>
                    <input type="text" class="form-control" name="jenis_barang" placeholder="Jenis Barang" value="{{($item->jenis_barang)}}" >
            </div>
                <div class="form-group">
                    <label for="harga">Harga Satuan</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Rp.</div>
                        </div>
                        <input type="number" class="form-control" name="harga" placeholder="Harga" value="{{($item->harga)}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Ubah</button>
        </form>
        </div>
    </div>
   

</div>
</div>
  
  <!-- /.container-fluid -->
@endsection