@foreach ($newMember as $n)
    <div class="modal fade" id="exampleModal{{ $n->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Informations</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table>
                        {{-- <td>{{ $loop->iteration++ }}</td> --}}
                        <td>{{ $n->nama_anak }}</td>
                        <td>{{ $n->jk }}</td>
                        <td>{{ $n->nik_anak }}</td>
                        <td>{{ $n->nama_ortu }}</td>
                        <td>{{ $n->nik_ortu }}</td>
                        <td>{{ $n->no_kk }}</td>
                        <td>{{ $n->alamat }}</td>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
