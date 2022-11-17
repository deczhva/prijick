@extends('layouts.main')

@section('container')
    <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                <h2 style="color: #395B64">Data Vitamin A</h2>
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
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Tanggal Pemberian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                @foreach ($vitaminA as $v)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration++ }}</td>
                            <td>{{ $v->nik }}</td>
                            <td>{{ $v->nama }}</td>
                            <td>{{ $v->jk }}</td>
                            <td>{{ $v->tgl_lahir }}</td>
                            <td>{{ $v->alamat }}</td>
                            <td>{{ $v->tgl_pemberian }}</td>
                            <td>
                                <form action="" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="" class="btn btn-outline-warning">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-secondary">
                                        <i class="bi bi-eye-fill"></i>
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
            </div>
        </div>

    </section>
</div>

@endsection


