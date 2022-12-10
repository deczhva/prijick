@foreach ($lansia as $l)
<div class="modal" tabindex="-1" id="edit-lansia{{ $l->id }}" aria-labelledby="modalEditLansia" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="color: #395B64">Tambah Data Lansia</h5>
        </div>
        <form action="{{ url('lansia/update/' . $l->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" placeholder="Masukkan NIK" name="nik" value="{{ $l->nik }}">
                    </div>
                    <div class="col">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama lengkap" name="nama" value="{{ $l->nama }}">
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="tinggi_bdn">Tinggi Badan</label>
                        <input type="number" class="form-control" name="tinggi_bdn" value="{{ $l->tinggi_bdn }}">
                    </div>
                    <div class="col">
                        <label for="berat_bdn">Berat Badan</label>
                        <input type="number" class="form-control" name="berat_bdn" value="{{ $l->berat_bdn }}">
                    </div>
                    <div class="col">
                        <label for="tensi">Tensi</label>
                        <input type="text" class="form-control" name="tensi" value="{{ $l->tensi }}">
                  </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="berat_bdn">Gula Darah</label>
                        <input type="text" class="form-control" name="gula_darah" value="{{ $l->gula_darah }}">
                    </div>
                    <div class="col">
                        <label for="panjang_bdn">Asam Urat</label>
                        <input type="text" class="form-control" name="asam_urat" value="{{ $l->asam_urat }}">
                    </div>
                    <div class="col">
                      <label for="berat_bdn">Kolesterol</label>
                      <input type="text" class="form-control" name="kolesterol" value="{{ $l->kolesterol }}">
                  </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" placeholder="{{ $l->alamat }}" id="floatingTextarea2" style="height: 100px"></textarea>
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
@endforeach