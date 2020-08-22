@extends('layouts.admin')

@section('title', 'Edit Data Toko')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Data Toko</h1>
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
        <form action="{{route('kelola-toko.update', $item->id) }}" method="post">
            @method('PUT')    
            @csrf   
                <div class="form-group">
                    <label for="nama_toko">Nama Toko</label>
                    <input type="text" class="form-control" name="nama_toko" placeholder="Nama Toko" value="{{($item->nama_toko)}}" >
            </div>
                <div class="form-group">
                    <label for="alamat_toko">Alamat Toko</label>
                    <input type="text" class="form-control" name="alamat_toko" placeholder="Alamat Toko" value="{{($item->alamat_toko)}}" >
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