<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Form Balasan Surat PKL</title>
</head>

<body style="background-color: #eee;">
    <!-- Form Pendaftaran -->
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                <h1>Form Balasan Surat PKL</h1>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group col-sm-5">
                        <label for="nomorSurat" class="mb-2">Nomor Surat</label>
                        <input type="text" class="form-control" id="nomorSurat" placeholder="Masukan Nomor Surat">
                    </div>
                    <div class="form-group col-sm-5 mt-2">
                        <label for="jmlhLampiran" class="mb-2">Jumlah Lampiran</label>
                        <input type="text" class="form-control" id="jmlhLampiran" placeholder="Masukan Jumlah Lampiran">
                    </div>
                    <div class="form-group col-sm-5 mt-2">
                        <label for="halSurat" class="mb-2">Hal Surat</label>
                        <input type="text" class="form-control" id="halSurat" placeholder="Masukan Hal Surat">
                    </div>
                    <div class="form-group col-sm-5 mt-2">
                        <label for="tglSuratDibuat" class="mb-2">Tanggal Surat Dibuat</label>
                        <input type="date" class="form-control" id="tglSuratDibuat" placeholder="Masukan Tanggal Surat Dibuat">
                    </div>
                    <div class="form-group col-sm-5 mt-2">
                        <label for="tujuanPengiriman" class="mb-2">Tujuan Pengiriman Surat</label>
                        <input type="text" class="form-control" id="tujuanPengiriman" placeholder="Masukan Tujuan Pengiriman Surat">
                    </div>
                    <div class="form-group col-sm-5 mt-2">
                        <label for="nomorSuratPemohon" class="mb-2">Nomor Surat Pemohon</label>
                        <input type="text" class="form-control" id="nomorSuratPemohon" placeholder="Masukan Nomor Surat Pemohon">
                    </div>
                    <div class="form-group col-sm-5 mt-2">
                        <label for="tglSuratDiterima" class="mb-2">Tanggal Surat Pemohon Diterima</label>
                        <input type="date" class="form-control" id="tglSuratDiterima" placeholder="Masukan Tanggal Surat Pemohon Diterima">
                    </div>
                    <div class="form-group col-sm-5 mt-2">
                        <label for="masaPelaksanaan" class="mb-2">Tanggal Masuk Magang</label>
                        <input type="date" class="form-control" id="masaPelaksanaan" placeholder="Masukan Masa Pelaksanaan Magang">
                        <label for="masaPelaksanaan" class="mb-2">Tanggal Berakhir Magang</label>
                        <input type="date" class="form-control" id="masaPelaksanaan" placeholder="Masukan Masa Pelaksanaan Magang">
                    </div>

                    <h4 class="mt-3">Anggota Magang</h4>
                    <button type="button" class="btn btn-primary mt-2">Tambah Anggota</button>

                    <div class="row mt-3">
                        <div class="col-sm-3">
                            <label for="nama" class="mb-2">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
                        </div>
                        <div class="col-sm-3">
                            <label for="nim" class="mb-2">NIM/NIS</label>
                            <input type="text" class="form-control" id="nim" placeholder="Masukan NIM/NIS">
                        </div>
                        <div class="col-sm-3">
                            <label for="nim" class="mb-2">Program Studi</label>
                            <input type="text" class="form-control" id="nim" placeholder="Masukan Program Studi">
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted">
                <button type="button" class="btn btn-success">Diterima</button>
                <button type="button" class="btn btn-danger">Ditolak</button>
            </div>
        </div>
    </div>
    <!-- Form Pendaftaran Akhir -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>