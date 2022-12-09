@foreach ($balita as $n)
    <div class="modal fade" id="exampleModal{{ $n->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Informations</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" value="{{ $n->nama_anak }}"
                                    disabled>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col">
                                <label for="nama">NIK Anak</label>
                                <input name="nama_anak" type="text" class="form-control" value="{{ $n->nik_anak }}" disabled>
                            </div>
                            <div class="col">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="{{ $n->tgl_lahir }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col">
                                <label for="jk">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jk" value="{{ $n->jk }}" disabled>
                            </div>
                            <div class="col">
                                <label for="berat_bdn">Berat Badan</label>
                                <input name="berat_bdn" type="number" min="1" class="form-control" value="{{ $n->berat_bdn }}" disabled>
                            </div>
                            <div class="col">
                                <label for="panjang_bdn">Panjang Badan</label>
                                <input name="panjang_bdn" type="number" class="form-control" value="{{ $n->panjang_bdn }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col">
                                <label for="lingkar_lengan">Lingkar Lengan</label>
                                <input name="lingkar_lengan" type="number" class="form-control" value="{{ $n->lingkar_lengan }}" disabled>
                            </div>
                            <div class="col">
                                <label for="lingkar_kepala">Lingkar Kepala</label>
                                <input name="lingkar_kepala" type="number" class="form-control" value="{{ $n->lingkar_kepala }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col">
                                <label for="kia">KIA</label>
                                <input type="text" class="form-control" name="kia" value="{{ $n->kia }}" disabled>
                            </div>
                            <div class="col">
                                <label for="imd">IMD</label>
                                <input type="text" class="form-control" name="kia" value="{{ $n->IMD }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col">
                                <label for="nm_ortu">Nama Orang Tua</label>
                                <input type="text" class="form-control" name="nama_ortu" value="{{ $n->nama_ortu }}" disabled>
                            </div>
                            <div class="col">
                                <label for="nik_ortu">NIK Orang Tua</label>
                                <input type="text" class="form-control" name="nik_ortu" value="{{ $n->nik_ortu }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" placeholder="{{ $n->alamat }}" id="floatingTextarea2" style="height: 100px" disabled></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endforeach

{{-- <td>{{ $loop->iteration++ }}</td> --}}