@extends('layouts.app')

@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Fakultas</h1>
    <a href="" class="btn btn-primary mb-4">Tambah Fakultas</a>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Fakultas</h6>
        </div>
        <div class="card-body">
           <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">

            @csrf
                <div class="form-group">
                    <label for="nama_fakultas">Nama Fakultas</label>
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="masukan nama dosen" value="{{ $dosen->nama_dosen }}">
                </div>

                <div class="form-group">
                    <label for="kode_fakultas">Kode Fakultas</label>
                    <input type="text" class="form-control" id="nid_dosen" name="nid_dosen" placeholder="masukan nid dosen" value="{{ $dosen->nid_dosen }}">
                </div>

                <div class="form-group">

                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </div>
                




            </form>
        </div>
    </div>

</div>





@endsection