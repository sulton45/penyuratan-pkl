<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pembuatan Surat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


</head>

<body>

    <div class="container mt-5">


        <form action="buatsurat.php" method="post" class="offset-md-3 col-md-6">

            <h1 class="text-center"> Pembuatan Surat PKL </h1>

            <div class="mb-2">
                <input type="text" name="nama" placeholder="Nama Anggota 1" class="form-control" required>
                <input type="text" name="nim" placeholder="NIM Anggota 1" class="form-control" required>
            </div>
            <div class="mb-2">
                <input type="text" name="nama" placeholder="Nama Anggota 2" class="form-control" required>
                <input type="text" name="nim" placeholder="NIM Anggota 2" class="form-control" required>
            </div>
            <div class="mb-2">
                <input type="text" name="nama" placeholder="Nama Anggota 3" class="form-control" required>
                <input type="text" name="nim" placeholder="NIM Anggota 3" class="form-control" required>
            </div>

            <div class="mb-2">
                <input type="text" name="instansi" placeholder="Instansi" class="form-control" required>
            </div>

            <div class="mb-2">
                <input type="text" name="programstudi" placeholder="Program Studi" class="form-control" required>
            </div>

            <div class="mb-2">
                <label for="example-date-input" class="col-5 col-form-label">Tanggal Pelaksanaan</label>

                <input class="form-control" type="date" value="2021-04-09" id="example-date-input">
                <input class="form-control" type="date" value="2021-04-09" id="example-date-input">
            </div>

            <div class="mb-2">
                <input type="text" name="email" placeholder="Email" class="form-control" required>
            </div>

            <div class="mb-2">
                <input type="tel" name="telp" placeholder="Nomor Handphone" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100">Buat Surat</button>


        </form>

    </div>

</body>

</html>