@extends('layouts.main')

@section('container')
@include('new-member.create')
    <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                <h2 style="color: #395B64">Data Member Baru</h2>
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
                <button type="button" class="btn btn mb-3" data-bs-toggle="modal" data-bs-target="#modalTambahMember" style="background-color:#395B64; color:white">
                    Tambah Data
                </button>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>NIK Anak</th>
                            <th>Nama Orang Tua</th>
                            <th>NIK Orang Tua</th>
                            <th>Nomer KK</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                @foreach ($newMember as $n)        
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration++ }}</td>
                            <td>{{ $n->nama_anak }}</td>
                            <td>{{ $n->jk }}</td>
                            <td>{{ $n->nik_anak }}</td>
                            <td>{{ $n->nama_ortu }}</td>
                            <td>{{ $n->nik_ortu }}</td>
                            <td>{{ $n->no_kk }}</td>
                            <td>{{ $n->alamat }}</td>

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
            </div>
        </div>

    </section>
</div>

@endsection


