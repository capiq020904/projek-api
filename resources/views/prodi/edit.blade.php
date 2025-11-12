@extends('layouts.app')

@section('content')


    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Prodi</h1>
        <a href="" class="btn btn-primary mb-4"> Tambah Prodi</a>



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Prodi</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('prodi.update', $prodi->id) }}" method="post">

                    @csrf
                    <div class="form-group">
                        <label for="nama_fakultas">Nama Prodi</label>
                        <input type="text" class="form-control" id="name" name="no" placeholder="masukan nama Prodi"
                            value="{{ $prodi->nama_prodi }}">
                    </div>

                    <div class="form-group">
                        <label for="kode_fakultas">Kode Prodi</label>
                        <input type="text" class="form-control" id="kode_prodi" name="kode_prodi"
                            placeholder="masukan kode prodi" value="{{ $prodi->no_prodi }}">
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary mt-2">
                            <i class="fa fa-save"></i></button>
                    </div>





                </form>
            </div>
        </div>

    </div>





@endsection