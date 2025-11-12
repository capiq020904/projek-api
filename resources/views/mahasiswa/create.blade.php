@extends('layouts.app')

@section('content')


    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Mahasiswa</h1>
        <a href="" class="btn btn-primary mb-4">Tambah Mahasiswa</a>



        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Mahasiswa</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                            placeholder="masukan nama mahasiswa">
                    </div>

                    <div class="form-group">
                        <label for="NIM_mahasiswa">NIM Mahasiswa</label>
                        <input type="text" class="form-control" id="nim_mahasiswa" name="nim_mahasiswa"
                            placeholder="masukan nim maha siswa">
                    </div>
                    
                    <div class="form-group">
                        <label for="Fakultas_id">Fakultas</label>
                        <select class="form-control" name="fakultas_id" id="fakultas_id">
                            @foreach ($fakultas as $item )
                            <option value="{{ $item->id }}">{{ $item->nama_fakultas }}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>
                    

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-save"></i></button>
                    </div>





                </form>
            </div>
        </div>

    </div>





@endsection