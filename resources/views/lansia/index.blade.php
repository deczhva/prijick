@extends('layouts.main')

@section('container')
    <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                <h2>Data Lansia</h2>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
    <div class="card-body">
                <button type="button" class="btn btn mb-3" data-bs-toggle="modal" data-bs-target="#" style="background-color:#4f69db">
                    <a href="#" style="color:white" target="_blank">
                    Tambah Data</a>
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

                        
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dera</td>
                            <td>Jakarta Utara</td>
                            <td>012876289</td>
                            <td>20-10-2022</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button type="button" class="btn btn-outline-danger">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>

    </section>
</div>

@endsection


