<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>EDIT DATA</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <hr />

        <form method="post" action="proses.php ">
            <div class="row g-3 pb-3 align-items-center">
                <div class="col-2">
                    <label for="nisn" class="col-form-label">NISN</label>
                </div>
                <div class="col-10">
                    <input type="text" id="nisn" name="nisn" placeholder="Ex: 23100" class="form-control">
                </div>
            </div>
            <div class="row g-3 pb-3 align-items-center">
                <div class="col-2">
                    <label for="nama" class="col-form-label">Nama</label>
                </div>
                <div class="col-10">
                    <input type="text" id="nama" name="nama" placeholder="Ex: Hayu" class="form-control">
                </div>
            </div>
            <div class="row g-3 pb-3">
                <div class="col-2">
                    <label for="jenis" class="col-form-label">Jenis Kelamin</label>
                </div>
                <div class="col-10">
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option selected disabled>Select</option>
                        <option value="Laki-Laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>

                    </select>
                </div>
            </div>
            <div class="row g-3 pb-3 align-items-center">
                <div class="col-2"><label for="file" class="col-form-label">Foto</label></div>
                <div class="col-10">
                    <input type="file" id="file" name="image" class="form-control">

                </div>
            </div>
            <div class="row g-3 pb-3 align-items-center">
                <div class="col-2">
                    <label for="alamat" class="col-form-label">Alamat</label>
                </div>
                <div class="col-10">
                    <textarea class="form-control" id="alamat" name="asal" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" name="btn_form" value="add" class="btn btn-success">Save Edit</button>
            <a href="index.php" type="button" class="btn btn-danger">Back</a>



        </form>
    </div>
</body>

</html>