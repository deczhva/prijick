<div class="modal fade" id="modalTambahBalita" tabindex="-1" aria-labelledby="modalTambahBalita" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Balita</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action={{url('/balita/add')}} method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="modal-body">
                <div class="modal-body">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Anak Keberapa</label>
                        <input type="text" name="" class="form-control" placeholder="">    
                    </div>
                    <div class="col-12">
                        <label for="date" class="form-label">Tgl Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">        
                    </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Nomor KK</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat">
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan alamat">
                                </div>
                            </div>
                        <d  iv class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="berat_bdn" class="form-label">Berat Badan saat Lahir (kg)</label>
                                    <input type="text" name="berat_bdn" class="form-control" placeholder="Masukkan alamat">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="panjang_bdn" class="form-label">Panjang Badan saat Lahir (cm)</label>
                                    <input type="text" name="panjang_bdn" class="form-control" placeholder="Masukkan alamat">
                                </div>
                            </div>
                        </div>
                        <div class="row align-center">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="jk" name="jk" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected disabled>--Pilih--</option>
                                        <option value="lk">Laki-Laki</option>
                                        <option value="pr">Perempuan</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="date" class="form-label">Buku KIA</label>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="jk" name="jk" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected disabled>--Pilih--</option>
                                                <option value="ya">Ya</option>
                                                <option value="tidak">Tidak</option>
                                              </select>
                                        </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="date" class="form-label">IMD</label>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="jk" name="jk" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected disabled>--Pilih--</option>
                                                <option value="y">Ya</option>
                                                <option value="g">Tidak</option>
                                              </select>
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
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="Masukkan alamat">
                        </div>
                    </div>

                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
</div>
</div>
