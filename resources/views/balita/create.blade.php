<div class="modal fade" id="modalTambahBalita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
        </div>
        <form action="{{ route('balita.store') }}" method="POST">
            @csrf
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama lengkap">
                    </div>
                    <div class="col">
                        <label for="jk">Jenis Kelamin</label>
                        <select id="jk" class="form-select">
                            <option selected disabled>--Pilih--</option>
                            <option>Perempuan</option>
                            <option>Laki-Laki</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="nama">NIK </label>
                        <input name="nama_anak" type="text" class="form-control" placeholder="Nama lengkap">
                    </div>
                    <div class="col">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input name="" type="date" class="form-control" name="tgl_lahir">
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="jk">Jenis Kelamin</label>
                        <select id="jk" class="form-select">
                            <option selected disabled>--Pilih--</option>
                            <option>Perempuan</option>
                            <option>Laki-Laki</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="berat_bdn">Berat Badan</label>
                        <input name="" type="number" min="1" class="form-control">
                    </div>
                    <div class="col">
                        <label for="panjang_bdn">Panjang Badan</label>
                        <input name="" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="lingkar_lengan">Lingkar Lengan</label>
                        <input name="" type="number" class="form-control">
                    </div>
                    <div class="col">
                        <label for="lingkar_kepala">Lingkar Kepala</label>
                        <input name="" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="kia">KIA</label>
                        <select id="kia" class="form-select">
                            <option selected disabled>--Pilih--</option>
                            <option>Ya</option>
                            <option>Tidak</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="imd">IMD</label>
                        <select id="imd" class="form-select">
                            <option selected disabled>--Pilih--</option>
                            <option>Ya</option>
                            <option>Tidak</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="nm_ortu">Nama Orang Tua</label>
                        <input name="" type="text" class="form-control" placeholder="Nama lengkap">
                    </div>
                    <div class="col">
                        <label for="nik_ortu">NIK Orang Tua</label>
                        <input name="" type="text" class="form-control" placeholder="NIK orang tua">
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" placeholder="Alamat lengkap" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                </div>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn" style="background-color: #395B64; color: white">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>


