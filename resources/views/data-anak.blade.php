@extends('layouts.main')

@section('container')
    <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                <h2>Data Balita</h2>
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


        <!-- modal -->
<div id="modal1" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Anak Keberapa</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="date" class="form-label">Tgl Lahir</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                   
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Nomor KK</label>
                                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                                        </div>
                                    </div>
                                
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">NIK</label>
                                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Berat Badan saat Lahir (kg)</label>
                                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Panjang Badan saat Lahir (cm)</label>
                                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-center">
                                <div class="col">
                                        <div class="mb-3">
                                        <label for="date" class="form-label">Jenis Kelamin</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Laki-Laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                        <label for="date" class="form-label">Buku KIA</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                        <label for="date" class="form-label">IMD</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Nama Orang Tua</label>
                                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">NIK Orang Tua</label>
                                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Telp/Hp Orang Tua</label>
                                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Provinsi</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Kab/Kota</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Kecamatan</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Desa/Kelurahan</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                                        </div>
                                    </div>
                                        <div class="col">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">RT/RW</label>
                                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                                        </div>
                                        </div>
                                    
                                </div>
                            </form>           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                        </div>
                    </div>
                </div>
<!-- penutup modal -->


    <section class="section">
        <div class="card">
    <div class="card-body">
                <button type="button" class="btn btn mb-3" data-bs-toggle="modal" data-bs-target="#modal1" style="background-color:#4f69db">
                    <a href="#" style="color:white" target="_blank">
                    Tambah Data</a>
                </button>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>Tgl Lahir</th>
                            <th>Nama Ortu</th>
                            <th>Prov</th>
                            <th>Kab/Kota</th>
                            <th>Kec</th>
                            <th>Puskesmas</th>
                            <th>Desa/Kel</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                        
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>0219384738</td>
                            <td>Dera</td>
                            <td>P</td>
                            <td>20-Oktober-2022</td>
                            <td>Rahmat</td>
                            <td>Jawa Barat</td>
                            <td>Depok</td>
                            <td>Sukmajaya</td>
                            <td>Abadijaya</td>
                            <td>Abadijaya</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                                <button type="button" class="btn btn-outline-secondary">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                                <button type="button" class="btn btn-outline-danger">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>

                <label for="show">Show</label>
                <select name="" id="">
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


