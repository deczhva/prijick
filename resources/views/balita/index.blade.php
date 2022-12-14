@extends('layouts.main')

@section('container')
@include('balita.create')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                <h2 style="color: #395B64">Data Balita</h2>
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
        <div class="card shadow bg-white">
            <div class="card-body">
                <button type="button" class="btn btn mb-3" data-bs-toggle="modal" data-bs-target="#modalTambahBalita" style="background-color:#395B64; color: white">
                    Tambah Data
                </button>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No KK</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>Tgl Lahir</th>
                            <th>Berat Badan</th>
                            <th>Panjang Badan</th>
                            <th>KIA</th>
                            <th>IMD</th>
                            <th>Nama Ortu</th>
                            <th>NIK Ortu</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                @foreach($balita as $b)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration++ }}</td>
                            <td>{{ $b->kk }}</td>
                            <td>{{ $b->nik }}</td>
                            <td>{{ $b->nama }}</td>
                            <td>{{ $b->jk }}</td>
                            <td>{{ date('d M Y', strtotime($b->tgl_lahir)) }}</td>
                            <td>{{ $b->berat_bdn }}</td>
                            <td>{{ $b->panjang_bdn }}</td>
                            <td>{{ $b->lingkar_lengan }}</td>
                            <td>{{ $b->lingkar_kepala }}</td>
                            <td>{{ $b->kia }}</td>
                            <td>{{ $b->imd }}</td>
                            <td>{{ $b->nm_ortu }}</td>
                            <td>{{ $b->nik_ortu }}</td>
                            <td>{{ $b->alamat }}</td>
                            
                            <td>
                                <form action="" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="" class="btn btn-outline-warning">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <button type="submit" class="btn btn-outline-danger"
                                    onclick="return confirm('Anda akan menghapus data ini')">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                @endforeach

                </table>

                <label for="show">Show</label>
                <select class="form-select-padding-x-sm" aria-label="Default select example">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                entries
                </label>
            </div>
        </div>

    </section>
</div>

@endsection


