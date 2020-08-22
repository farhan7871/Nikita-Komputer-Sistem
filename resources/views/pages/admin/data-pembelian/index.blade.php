@extends('layouts.admin')

@section('title', 'Data Pembelian')

@section('content')
    

                <!-- Begin Page Content -->
                <div class="container-fluid">


                     {{-- Page Heading --}}
                     <h1 class="h3 mb-2 text-gray-800">Data Pembelian</h1>
                     <p class="mb-4">Kumpulan data pembelian dan pencatatan pada sistem</p>
                     <!-- DataTales Example -->


                    <a href="{{route('data-pembelian.create')}}" class="btn btn-primary btn-icon-split mt-2 mb-4">
                        <span class="icon text">
                            <i class="fas fa-plus-square"></i>
                        </span>
                        <span class="text">Tambah Data</span>
                    </a>

                   
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            {{-- <th>ID/th> --}}
                                            <th>Tanggal</th>
                                            <th>Nama Toko</th>
                                            <th>Nama Barang</th>
                                            <th>Banyak Barang</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            {{-- <th>Jual</th> --}}
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            {{-- <th>ID</th> --}}
                                            <th>Tanggal</th>
                                            <th>Nama Toko</th>
                                            <th>Nama Barang</th>
                                            <th>Banyak Barang</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            {{-- <th>Jual</th> --}}
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($items as $item)
                                        <tr>
                                         <td>{{$item->tanggal}}</td> 
                                            <td>{{$item->toko->nama_toko}}</td>
                                            <td>{{$item->barang->nama_barang}}</td>
                                            <td>{{$item->banyak}}</td>
                                            <td>@rupiah($item->harga)</td>
                                            <td>@rupiah($item->total)</td>
                                            {{-- <td>@rupiah($item->jual)</td> --}}
                                            <td>
                                                <a href="{{route('data-pembelian.edit', $item->id)}}" class="btn btn-info">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{route('data-pembelian.destroy', $item->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data Kosong</td>
                                        </tr>
                                            
                                        @endforelse
                                        
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
@endsection