@foreach ($newMember as $t)
@foreach ($balita as $n)
{{-- @dd($newMember) --}}
<div class="modal fade" id="edit-balita{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Informations</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('balita.store') }}" method="POST">
                        @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="{{ $t->nama_anak }}" disabled>
                            </div>
                            <div class="col">
                                <label for="jk">Jenis Kelamin</label>
                                <input name="jk" type="text" class="form-control" placeholder="{{ $t->jk }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-3">
                        <div class="row">
                            <div class="col">
                                <label for="nama">NIK </label>
                                <input name="nama_anak" type="text" class="form-control" placeholder="{{ $t->nik_anak }}" disabled>
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
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach
@endforeach

{{-- <table>
    {{-- <td>{{ $loop->iteration++ }}</td> --}}
    {{-- <td>$n->nama_anak }}</td>
    <td>{{ $n->jk }}</td>
    <td>{{ $n->nik_anak }}</td>
        <td>{{ $n->nama_ortu }}</td>
        <td>{{ $n->nik_ortu }}</td>
        <td>{{ $n->no_kk }}</td>
        <td>{{ $n->alamat }}</td>
    </table> --}}