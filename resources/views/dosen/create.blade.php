@extends('layouts.app')

@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Dosen</h1>
    <a href="" class="btn btn-primary mb-4">Tambah Dosen</a>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Fakultas</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('dosen.store') }}" method="post">

            @csrf
                <div class="form-group">
                    <label for="nama_fakultas">Nama Dosen</label>
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="masukan nama dosen">
                </div>

                <div class="form-group">
                    <label for="kode_fakultas">NIDN Dosen</label>
                    <input type="text" class="form-control" id="nid_dosen" name="nid_dosen" placeholder="masukan nid dosen">
                </div>

                <div class="form-group">

                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-save"></i></button>
                </div>
                




            </form>
        </div>
    </div>

</div>





@endsection