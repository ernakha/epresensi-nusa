@extends('admin.admin_master') 
   @section('admin')

   <!-- Begin Page Content -->
   <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
            <a href="{{route('guru.add')}}" class="d-none d-sm-inline-block btn btn-success shadow"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah guru</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Tabel Data guru</h6>
            </div>
            <div class="card-body">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Nama</center></th>
                                <th><center>Jabatan</center></th>
                                <th><center>NIP/NIK</center></th>
                                <th><center>Alamat</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataguru as $item)
                            <tr>
                                <td><center>{{$loop->iteration}}</center></td>
                                <td><center>{{$item->nama}}</center></td>
                                <td><center>{{$item->jabatan}}</center></td>
                                <td><center>{{$item->nip}}</center></td>
                                <td><center>{{$item->alamat}}</center></td>
                                <td colspan="2">
                                    <a href="{{route('guru.edit', $item->id)}}" class="d-none d-sm-inline-block btn btn-warning shadow"><i
                                        class="fas fa-solid fa-pen fa-sm text-white-50"></i> Ubah
                                    </a>
                                    <a href="{{route('guru.delete', $item->id)}}" onclick="return confirm('Apakah anda yakin?')" class="d-none d-sm-inline-block btn btn-danger shadow"><i
                                        class="fas fa-solid fa-eraser fa-sm text-white-50"></i> Hapus
                                    </a>
                                </td>
                            </tr>  
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{$databuku->links('pagination::bootstrap-5')}} --}}
                </div>
            </div>
        </div>
   </div>
   @endsection