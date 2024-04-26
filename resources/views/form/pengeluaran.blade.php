<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pengeluaran</title>
    <!-- Include CSS libraries for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include JavaScript libraries for functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-image: url('/assets/images/form/pengeluaran.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Times New Roman', Times, serif;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            /* Menambahkan transparansi untuk membuat form lebih mudah dibaca */
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
    </style>

</head>

<body>
    <div class="container col-lg-6">
        <div class="text-center">
            <h1>Form Pengeluaran</h1>
        </div>
        <form id="form-pemasukan">
            <div class="form-group mb-3">
                <label for="jenis-transaksi">Jenis Transaksi:</label>
                <button type="button" class="btn" style="padding: 0.1rem 0.1rem; font-size: 0.7rem;" data-bs-toggle="modal" data-bs-target="#Jenistransaksi">
                    <i class="bi bi-info-circle"></i>
                </button>
                <div class="modal fade" id="Jenistransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Jenis Transaksi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <p>Inputan jenis transaksi pengeluaran kas secara tunai, yang paling mendekati berdasarkan dengan keterangan yang telah disediakan</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <select class="form-control" id="jenis-transaksi" name="jenis-transaksi">
                    <option value="pembelian-barang-dagang">Pembelian Barang Dagang</option>
                    <option value="pelunasan-pembelian-barang-dagang-kredit">Pelunasan Pembelian Barang Dagang Kredit</option>
                    <option value="beban-angkut-pembelian">Beban Angkut Pembelian</option>
                    <option value="retur-penjualan">Retur Penjualan (penjualan tunai)</option>
                    <option value="pembayaran-telepon-listrik">Pembayaran Telepon atau Listrik</option>
                    <option value="pembayaran-air">Pembayaran Air</option>
                    <option value="pembelian-perlengkapan-toko">Pembelian Perlengkapan Toko</option>
                    <option value="pembelian-peralatan-toko">Pembelian Peralatan Toko</option>
                    <option value="pembayaran-gaji-karyawan">Pembayaran Gaji Karyawan</option>
                    <option value="pembayaran-iklan">Pembayaran Iklan</option>
                    <option value="pembayaran-administrasi-bank">Pembayaran Administrasi Bank</option>
                    <option value="pembayaran-operasi-kantor-lainnya">Pembayaran Operasi Kantor Lainnya</option>
                    <option value="pembayaran-beban-lain-lain">Pembayaran Beban Lain-lain</option>
                    <option value="pembayaran-utang-beban">Pembayaran Utang Beban</option>
                    <option value="pengambilan-prive">Pengambilan Prive</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="tanggal">Tanggal:</label>
                <button type="button" class="btn" style="padding: 0.1rem 0.1rem; font-size: 0.7rem;" data-bs-toggle="modal" data-bs-target="#tanggal">
                    <i class="bi bi-info-circle"></i>
                </button>
                <div class="modal fade" id="tanggal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Tanggal</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <p>Inputan tanggal terjadinya transaksi</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="form-group mb-3">
                <label for="nominal">Nominal:</label>
                <button type="button" class="btn" style="padding: 0.1rem 0.1rem; font-size: 0.7rem;" data-bs-toggle="modal" data-bs-target="#nominal">
                    <i class="bi bi-info-circle"></i>
                </button>
                <div class="modal fade" id="nominal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Nominal</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <p>Inputan besar nominal (Rp) dari transaksi yang terjadi</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Masukkan nominal disini! (contoh 150000)">
            </div>
            <div class="form-group mb-3">
                <label for="keterangan">Keterangan:</label>
                <button type="button" class="btn" style="padding: 0.1rem 0.1rem; font-size: 0.7rem;" data-bs-toggle="modal" data-bs-target="#keterangan">
                    <i class="bi bi-info-circle"></i>
                </button>
                <div class="modal fade" id="keterangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Keterangan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <p>Inputan rincian keterangan dari transaksi</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan rincian keterangan dari transaksi tersebut!"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="potongan">Potongan:</label>
                <button type="button" class="btn" style="padding: 0.1rem 0.1rem; font-size: 0.7rem;" data-bs-toggle="modal" data-bs-target="#potonganket">
                    <i class="bi bi-info-circle"></i>
                </button>
                <div class="modal fade" id="potonganket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Potongan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <p>Inputan diisi ketika memperoleh potongan atas pembelian. Centang apabila terdapat potongan dan lakukan pengisian!</p>
                                <div class="text-start">
                                    <h6>Contoh:</h6>
                                    <p>Membeli barang dagang sejumlah Rp100.000 secara tunai dan diberikan potongan Rp20.000. Maka input di nominal adalah 100000 dan input di potongan adalah 20000.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="number" class="form-control" id="potongan" name="potongan" placeholder="Centang potongan apabila terdapat potongan!" disabled>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="tampilkan-potongan">
                    <label class="form-check-label" for="tampilkan-potongan">Potongan</label>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
                <a href="#"><button type="button" class="btn btn-secondary">KEMBALI</button></a>
            </div>
        </form>
    </div>

    <!-- JavaScript untuk mengatur potongan -->
    <script>
        $(document).ready(function() {
            $('#tampilkan-potongan').change(function() {
                if ($(this).is(":checked")) {
                    $('#potongan').prop('disabled', false);
                    $('#potongan').attr('placeholder', 'Masukkan nominal potongan di sini (contoh: 50000)');
                } else {
                    $('#potongan').prop('disabled', true);
                    $('#potongan').attr('placeholder', 'Centang potongan apabila terdapat potongan!');
                }
            });
        });
    </script>
</body>

</html>