@extends('layouts.admin')

@section('title', 'Kelola Barang')

@section('content')
    

                <!-- Begin Page Content -->
                <div class="container-fluid">


                     {{-- Page Heading --}}
                     <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
                     <p class="mb-4">Kumpulan data barang dan pencatatan pada sistem</p>
                     <!-- DataTales Example -->


                    <a href="{{route('kelola-barang.create')}}" class="btn btn-primary btn-icon-split mt-2 mb-4">
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
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            {{-- <th>ID</th> --}}
                                            <th>No.</th>     
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $number = 1; ?>
                                        @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <?php $number++; ?>
                                            <td>{{$item->nama_barang}}</td>
                                            <td>{{$item->jenis_barang}}</td>
                                            <td>{{$item->harga}}</td>
                                            <td>
                                                <a href="{{route('kelola-barang.edit', $item->id)}}" class="btn btn-info">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{route('kelola-barang.destroy', $item->id)}}" method="POST" class="d-inline">
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