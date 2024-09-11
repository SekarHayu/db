<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Hayu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center pb-2">CRUD (Create, Read, Update, & Delete) DATABASE SISWA SMK SMTI YOGYAKARTA</h1>
    <a href="update.php" type="button" class="btn btn-primary mb-3"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"> <i
            class="bi bi-plus"></i>
        Tambah Data
    </a>
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th scope="col" style="padding: 10px; border: 2px; border-color: black;">No</th>
                <th scope="col">NISN</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Foto</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>231001</td>
                <td>Hayu</td>
                <td>Perempuan</td>
                <td><img src="img1.jpg" width="150px"></td>
                <td>Timuran MG 3 no 19, Yogyakarta</td>
                <td>
                    <a href="edit.php" type="button" class="btn btn-success  btn-sm"><i
                            class="bi bi-pencil-fill"></i>Edit</a>
                    <button type="button" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i>hapus</button>
                </td>
            </tr>
            <tr>
                <td>2.</td>
                <td>231002</td>
                <td>Lovida</td>
                <td>Perempuan</td>
                <td><img src="img2.jpg" width="150px"></td>
                <td>Jl. Sosok Yogyakarta</td>
                <td><a href="edit.php" type="button" class="btn btn-success  btn-sm"><i
                            class="bi bi-pencil-fill"></i>Edit</a>
                    <button type="button" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i>hapus</button></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>17980</td>
                <td>Itang</td>
                <td>Laki-Laki</td>
                <td><img src="img5.jpg" width="150px"></td>
                <td>Timuran MG 3 no 27</td>
                <td><a href="edit.php" type="button" name="btn-form" value="edit" class="btn btn-success  btn-sm"><i
                            class="bi bi-pencil-fill"></i>SaveEdit</a>
                    <button type="button" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i>hapus</button></td>
            </tr>
        </tbody>
    </table>
</body>

</html>