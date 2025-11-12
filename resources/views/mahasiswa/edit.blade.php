@extends('layouts.app')

@section('content')


    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Prodi</h1>
        <a href="" class="btn btn-primary mb-4"> Tambah Mahasiswa</a>



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Mahasiswa</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label for="nama_fakultas">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="masukan nama Mahasiswa"
                            value="{{ $mahasiswa->nama_mahasiswa }}">
                    </div>

                    <div class="form-group">
                        <label for="kode_fakultas">NIM Mahasiswa</label>
                        <input type="text" class="form-control" id="kode_prodi" name="nim_mahasiswa"
                            placeholder="masukan nim mahasiswa" value="{{ $mahasiswa->nim_mahasiswa }}">
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