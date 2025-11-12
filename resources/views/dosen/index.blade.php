@extends('layouts.app')

 @section('content')

  <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Dosen</h1>
                    <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-4">Tambah Dosen</a> 

        

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
                                            <th>Nama Dosen</th>
                                            <th>Nid Dosen</th>
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

                                    @foreach ($dosens as $item )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_dosen }}</td>
                                            <td>{{ $item->nid_dosen }}</td>
                                            <td>
                                                
                                                <a href="{{ route('dosen.edit', $item->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
                                                <a href="{{ route('dosen.hapus', $item->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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