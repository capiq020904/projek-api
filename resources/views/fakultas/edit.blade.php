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
            <form action="{{ route('fakultas.update', $fakultas->id) }}" method="post">

            @csrf
                <div class="form-group">
                    <label for="nama_fakultas">Nama Fakultas</label>
                    <input type="text" class="form-control" id="namafakultas" name="nama_fakultas" placeholder="masukan nama fakultas" value="{{ $fakultas->nama_fakultas }}">
                </div>

                <div class="form-group">
                    <label for="kode_fakultas">Kode Fakultas</label>
                    <input type="text" class="form-control" id="kode_fakultas" name="kode_fakultas" placeholder="masukan kode fakultas" value="{{ $fakultas->kode_fakultas }}">
                </div>

                <div class="form-group">

                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </div>
                




            </form>
        </div>
    </div>

</div>





@endsection