@extends('templates.main')
@section('title')
Berita
@endsection
@section('styles')
{{-- Datatable --}}
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

{{-- select2 --}}
<link rel="stylesheet" href="{{ asset('assets/libs/select2/select2.min.css') }}" defer>
<!-- Sweet Alert-->
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
                    <h2 class="text-white">Tabel Berita</h2>
                </div>
                <button type="button" class="btn btn-success waves-effect width-md waves-light rounded float-right" data-toggle="modal" data-target="#modalBerita">Tambah Berita</button>
                <br><br><br>
                <table id="tableBerita" class="table table-bordered dt-responsive nowrap table-striped" width="100%">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th class="align-middle" style="max-width: 5%;">No</th>
                            <th class="align-middle">Tanggal</th>
                            <th class="align-middle">Judul</th>
                            <th class="align-middle">Keterangan</th>
                            <th class="align-middle">Link</th>
                            <th class="align-middle">Gambar</th>
                            <th class="align-middle">Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBerita" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalBeritaTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalBeritaTitle">Form Berita</h4>
                <button type="button" id="cancel" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formBerita" method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <i class="fas fa-question-circle information-icon" info="Tanggal berita muncul."></i>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <i class="fas fa-question-circle information-icon" info="Judul berita"></i>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <i class="fas fa-question-circle information-icon" info="Penjelasan singkat berita."></i>
                        <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan rincian keterangan berita." required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <i class="fas fa-question-circle information-icon" info="Link terkait berita."></i>
                        <input type="url" class="form-control" id="link" name="link" placeholder="Masukkan link terkait berita.">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <i class="fas fa-question-circle information-icon" info="Upload gambar terkait berita."></i>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                        <!-- Tambahkan elemen gambar saat ini -->
                        <img id="currentGambar" src="" class="img-fluid mt-2" style="max-width: 200px; display: none;" alt="Gambar Berita">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" id="saveBerita" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
{{-- Datatable --}}
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

{{-- select2 --}}
<script src="{{ asset('assets/libs/select2/select2.min.js') }}" defer></script>
<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<script>
    const resetForm = () => {
        $('#formBerita')[0].reset();
        $('#modalBeritaTitle').text('Form Berita');
        // $('#jenis_transaksi').val('').trigger('change');
        $('#keterangan').text('');
        // // init currency format
        // let inpNominal = document.getElementById('nominalTransaksi');
        // formatCurrency(inpNominal);
        // $('.sl-potongan').empty();
    }

    // const tableBerita = (query = '') => {
    //     $('#tableBerita').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         responsive: true,
    //         ajax: {
    //             url: "{{ route('berita.table') }}",
    //             method: 'GET',
    //         },
    //         columns: [{
    //                 data: null, // Kolom kosong yang akan diisi nomor urut
    //                 name: 'DT_RowIndex', // Ganti nama kolom menjadi DT_RowIndex jika ada
    //                 orderable: false,
    //                 searchable: false,
    //                 render: function(data, type, row, meta) {
    //                     return meta.row + 1; // Mengembalikan nomor urut mulai dari 1
    //                 }
    //             },
    //             {
    //                 data: 'tanggal',
    //                 name: 'tanggal'
    //             },
    //             {
    //                 data: 'judul',
    //                 name: 'judul'
    //             },
    //             {
    //                 data: 'keterangan',
    //                 name: 'keterangan'
    //             },
    //             {
    //                 data: 'link',
    //                 name: 'link'
    //             },
    //             {
    //                 data: 'gambar',
    //                 name: 'gambar',
    //                 render: function(data, type, full, meta) {
    //                     return `<img src="{{ url('/') }}/${data}" class="img-fluid" style="max-width: 100px; max-height: 100px;" alt="Gambar Berita">`;
    //                 },
    //                 orderable: false,
    //                 searchable: false
    //             },
    //             {
    //                 data: 'action',
    //                 name: 'action',
    //                 orderable: false,
    //                 searchable: false
    //             }
    //         ],
    //         columnDefs: [{
    //                 render: function(data, type, full, meta) {
    //                     return `<div class='text-wrap'>` + data + `</div>`;
    //                 },
    //                 targets: [2, 3, 4] // Sesuaikan target kolom untuk menambahkan class 'text-wrap'
    //             },
    //             {
    //                 className: 'text-center',
    //                 targets: [0, 1, 2, 3, 4, 5, 6] // Sesuaikan target kolom untuk menambahkan class 'text-center'
    //             },
    //             {
    //                 className: 'align-middle',
    //                 targets: [0, 6] // Sesuaikan target kolom untuk menambahkan class 'align-middle'
    //             }
    //         ]
    //     });
    // }

    const tableBerita = (query = '') => {
        $('#tableBerita').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: "{{ route('berita.table') }}",
                method: 'GET',
                data: function(d) {
                    d.query = query; // Mengirimkan query pencarian jika ada
                }
            },
            columns: [{
                    data: null, // Kolom kosong yang akan diisi nomor urut
                    name: 'DT_RowIndex', // Ganti nama kolom menjadi DT_RowIndex jika ada
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        return meta.row + 1; // Mengembalikan nomor urut mulai dari 1
                    }
                },
                {
                    data: 'tanggal',
                    name: 'tanggal'
                },
                {
                    data: 'judul',
                    name: 'judul'
                },
                {
                    data: 'keterangan',
                    name: 'keterangan'
                },
                {
                    data: 'link',
                    name: 'link'
                },
                {
                    data: 'gambar',
                    name: 'gambar',
                    render: function(data, type, full, meta) {
                        return `<img src="{{ url('/') }}/${data}" class="img-fluid" style="max-width: 100px; max-height: 100px;" alt="Gambar Berita">`;
                    },
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ],
            columnDefs: [{
                    render: function(data, type, full, meta) {
                        return `<div class='text-wrap'>` + data + `</div>`;
                    },
                    targets: [2, 3, 4] // Sesuaikan target kolom untuk menambahkan class 'text-wrap'
                },
                {
                    className: 'text-center',
                    targets: [0, 1, 2, 3, 4, 5, 6] // Sesuaikan target kolom untuk menambahkan class 'text-center'
                },
                {
                    className: 'align-middle',
                    targets: [0, 6] // Sesuaikan target kolom untuk menambahkan class 'align-middle'
                }
            ],
        });
    }

    $(document).ready(function() {
        tableBerita();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
    });

    // $('#formBerita').submit(function(event) {
    //     event.preventDefault();
    //     $.ajax({
    //         url: $(this).attr('action'),
    //         method: $(this).attr('method'),
    //         data: new FormData(this),
    //         contentType: false,
    //         processData: false,
    //         success: function(response) {
    //             $('#modalBerita').modal('hide');
    //             $('#tableBerita').DataTable().ajax.reload();
    //             Swal.fire({
    //                 title: 'Berhasil!',
    //                 text: response.message,
    //                 type: 'success',
    //                 confirmButtonText: 'Oke'
    //             });
    //         },
    //         error: function(response) {
    //             Swal.fire({
    //                 title: 'Gagal!',
    //                 text: response.responseJSON.message,
    //                 type: 'error',
    //                 confirmButtonText: 'Oke'
    //             });
    //         }
    //     });
    // });

    $('#formBerita').submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(response) {
                $('#modalBerita').modal('hide');
                $('#tableBerita').DataTable().ajax.reload();
                Swal.fire({
                    title: 'Berhasil!',
                    text: response.message,
                    type: 'success',
                    confirmButtonText: 'Oke'
                });
            },
            error: function(response) {
                Swal.fire({
                    title: 'Gagal!',
                    text: response.responseJSON.message,
                    type: 'error',
                    confirmButtonText: 'Oke'
                });
            }
        });
    });


    $(document).on('click', '.btnEdit', function() {
        const id = $(this).attr('id');
        $.ajax({
            url: `/berita/edit/${id}`,
            method: 'GET',
            beforeSend: function() {
                Swal.fire({
                    title: `<div style="width: 80px; height: 80px;" class="spinner-border text-info m-2" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>`,
                    text: 'Loading...',
                    customClass: 'swal-loading',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                });
            },
            success: function(response) {
                console.log(response); // Debugging response

                if (response.code === 200) {
                    Swal.close();
                    $('#modalBeritaTitle').text('Form Edit Berita');
                    $('#formBerita').attr('action', "{{ route('berita.store', ['berita' => '__ID__']) }}".replace('__ID__', response.data.id));
                    $('#id').val(response.data.id);
                    $('#tanggal').val(response.data.tanggal);
                    $('#judul').val(response.data.judul);
                    $('#keterangan').val(response.data.keterangan);
                    $('#link').val(response.data.link);

                    // Load image
                    if (response.data.gambar) {
                        $('#currentGambar').attr('src', `{{ url('/') }}/${response.data.gambar}`);
                        $('#currentGambar').show(); // Tampilkan gambar lama
                    } else {
                        $('#currentGambar').hide(); // Sembunyikan gambar jika tidak ada
                    }

                    $('#modalBerita').modal('show');
                } else {
                    Swal.fire({
                        title: 'Gagal!',
                        text: response.message || 'Data tidak ditemukan',
                        type: 'error',
                        confirmButtonText: 'Oke',
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error(textStatus, errorThrown); // Debugging error
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat memproses permintaan',
                    type: 'error',
                    confirmButtonText: 'Oke',
                });
            }
        });
    });


    $(document).on('click', '.btnDel', function() {
        const id = $(this).attr('id');
        Swal.fire({
            title: 'Konfirmasi!',
            text: 'Yakin ingin menghapus data pemasukan?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Batal',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "{{ route('berita.destroy') }}",
                    method: "POST",
                    data: {
                        id: id,
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: `<div style="width: 80px; height: 80px;" class="spinner-border text-info m-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>`,
                            text: 'Loading...',
                            customClass: 'swal-loading',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                        });
                    },
                    success: function(response) {
                        Swal.fire({
                            title: (response.code == 200) ? 'Berhasil!' : 'Gagal!',
                            text: response.message,
                            type: response.status,
                            confirmButtonText: 'Oke',
                        });
                        $('#tableBerita').DataTable().ajax.reload(null, false);
                    }
                });
            }
        });
    });
</script>
@endsection