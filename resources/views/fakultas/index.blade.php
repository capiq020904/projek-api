@extends('layouts.app')

 @section('content')

  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Fakultas</h1>
                    <a href="{{ route('fakultas.create') }}" class="btn btn-primary mb-4">Tambah Fakultas</a> 

        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Fakultas</th>
                                            <th>Kode Fakultas</th>
                                            <th>Aksi</th>
            
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>no</th>
                                            <th>nama fakultas</th>
                                            <th>kode fakultas</th>
                                        
                                        </tr>
                                    </tfoot> -->
                                    <tbody>

                                    @foreach ($fakultas as $item )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_fakultas }}</td>
                                            <td>{{ $item->kode_fakultas }}</td>
                                            <td>
                                                
                                                <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-primary">edit</a>
                                                <a href="{{ route('fakultas.hapus', $item->id) }}" class="btn btn-danger">Hapus</a>
                                            </td>
                                        
                                        </tr>
                                    @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>





 @endsection 