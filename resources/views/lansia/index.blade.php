@extends('layouts.main')

@section('container')
@include('lansia.create')
@include('lansia.edit')
@include('lansia.delete')
@include('lansia.show')
    <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                <h2 style="color: #395B64">Data Lansia</h2>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color: #2C3333">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn mb-3" data-bs-toggle="modal" data-bs-target="#modalTambahLansia" style="background-color:#395B64; color:white">
                    Tambah Data
                </button>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                            <th>Tensi</th>
                            <th>Gula Darah</th>
                            <th>Asam Urat</th>
                            <th>Kolesterol</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                @foreach ($lansia as $l)        
                {{-- @dd($lansia) --}}
                <tbody>
                        <tr>
                            <td>{{ $loop->iteration++ }}</td>
                            <td>{{ $l->nik }}</td>
                            <td>{{ $l->nama }}</td>
                            <td>{{ $l->tinggi_bdn }}</td>
                            <td>{{ $l->berat_bdn }}</td>
                            <td>{{ $l->tensi }}</td>
                            <td>{{ $l->gula_darah }}</td>
                            <td>{{ $l->asam_urat }}</td>
                            <td>{{ $l->kolesterol }}</td>
                            <td>{{ $l->alamat }}</td>

                            <td>
                                <button class="btn btn-outline-warning" type="button" data-bs-toggle="modal" data-bs-target="#edit-lansia{{ $l->id }}"><i class="bi bi-pencil-fill"></i></button>
                                <a class="btn shadow btn-outline-danger " data-bs-toggle="modal" data-bs-target="#delete-lansia{{ $l->id }}"><i class="bi bi-trash3-fill"></i></i></a>
                            </td>
                        </tr>

                    </tbody>
                @endforeach
                </table>
            </div>
        </div>

    </section>
</div>

@endsection


