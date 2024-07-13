@extends('templates.main')
@section('title')
Data Lain
@endsection
@section('styles')
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/libs/select2/select2.min.css') }}" defer>
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

<style>
    .information-icon {
        position: relative;
        top: -5px;
    }

    .swal-loading {
        width: 300px !important;
    }

    .select2-container .select2-selection--single,
    .select2-selection--single .select2-selection__arrow {
        display: flex;
        align-items: center;
        height: 38px !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="card-header mb-3 bg-dark">
                    <h2 class="text-white">Tabel Lainnya</h2>
                </div>
                <br><br>
                <table id="tableAdmin" class="table table-bordered dt-responsive nowrap table-striped" width="100%">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th class="align-middle" style="max-width: 5%;">No</th>
                            <th class="align-middle">Judul</th>
                            <th class="align-middle">SubJudul</th>
                            <th class="align-middle">Keterangan</th>
                            <th class="align-middle">File</th>
                            <th class="align-middle">Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalLain" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalLainTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLainTitle">Form Lain</h4>
                <button type="button" id="cancel" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formLain" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="subjudul">Sub Judul</label>
                        <input type="text" class="form-control" id="subjudul" name="subjudul" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <div id="currentFile">
                            <!-- Akan diisi dengan file yang ada, jika ada -->
                        </div>
                        <input type="checkbox" id="deleteFile" name="deleteFile" value="1">
                        <label for="deleteFile">Hapus file yang ada</label>
                    </div>
                    <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" id="saveLain" class="btn btn-success">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/select2.min.js') }}" defer></script>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/jquery.truncate.min.js') }}"></script>

<script>
    $(document).ready(function() {
        tableAdmin();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
    });

    var table = $('#tableAdmin').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('adminlain.table') }}",
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'judul',
                name: 'judul'
            },
            {
                data: 'subjudul',
                name: 'subjudul'
            },
            {
                data: 'keterangan',
                name: 'keterangan',
                render: function(data) {
                    var maxLength = 100; // Ganti panjang maksimum jika diperlukan
                    if (data.length > maxLength) {
                        return data.substring(0, maxLength) + '...'; // Tampilkan titik-titik jika teks panjang
                    } else {
                        return data;
                    }
                }
            },
            {
                data: 'file',
                name: 'file',
                render: function(data) {
                    return data ? '<a href="/storage/' + data + '" target="_blank">View File</a>' : 'No File';
                }
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ],
        order: [
            [0, 'asc']
        ],
        error: function(xhr, error, thrown) {
            console.error(xhr.responseText);
        }
    });

    // Event Handler untuk tombol Edit
    $(document).on('click', '.btnEdit', function() {
        var id = $(this).attr('id');
        $.ajax({
            url: "/adminlain/edit/" + id,
            type: "GET",
            success: function(response) {
                $('#modalLain').modal('show');
                $('#id').val(response.data.id);
                $('#judul').val(response.data.judul);
                $('#subjudul').val(response.data.subjudul);
                $('#keterangan').val(response.data.keterangan);
                $('#file').val(''); // Hapus file yang ada di input file
                $('#deleteFile').prop('checked', false); // Uncheck delete file checkbox

                if (response.data.file) {
                    $('#currentFile').html('<a href="/storage/' + response.data.file + '" target="_blank">View File</a>');
                } else {
                    $('#currentFile').html('No File');
                }

                // Set form action untuk update
                $('#formLain').attr('action', '{{ route("adminlain.update", ":id") }}'.replace(':id', response.data.id));
            },
            error: function(response) {
                Swal.fire('Error', 'Terjadi kesalahan saat mengambil data!', 'error');
            }
        });
    });

    // Event Handler untuk submit form
    $('#formLain').submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(response) {
                $('#modalLain').modal('hide');
                table.ajax.reload();
                Swal.fire('Berhasil!', response.message, 'success');
            },
            error: function(response) {
                Swal.fire('Gagal!', response.responseJSON.message, 'error');
            }
        });
    });
</script>
@endsection