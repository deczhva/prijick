<div class="modal" tabindex="-1" id="modalTambahMember" aria-labelledby="modalTambahMember" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="color: #395B64">Tambah Data Member</h5>
        </div>
        <form action="{{ route('member.store') }}" method="GET">
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <label for="nama_anak">Nama Anak</label>
                        <input type="text" class="form-control" placeholder="Nama lengkap" name="nama_anak">
                    </div>
                    <div class="col">
                        <label for="jk">Jenis Kelamin</label>
                        <select id="jk" class="form-select">
                            <option selected disabled>--Pilih--</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki-Laki</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="nik_anak">NIK Anak</label>
                        <input type="text" class="form-control"  name="nik_anak">
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="nama_ortu">Nama Orang Tua</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="nama_ortu">
                    </div>
                    <div class="col">
                        <label for="nik_ortu">NIK Orang Tua</label>
                        <input type="text" class="form-control" name="nik_ortu">
                    </div>
                    <div class="col">
                        <label for="no_kk">Nomor KK</label>
                        <input type="text" class="form-control" name="no_kk">
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" placeholder="Alamat lengkap" id="floatingTextarea2" style="height: 100px" name="alamat"></textarea>
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
  