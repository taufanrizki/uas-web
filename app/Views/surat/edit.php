<!-- views/surat/edit.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">Edit Data</h2>
            </div>
            <div class="card-body">

                <form method="post" action="<?= base_url('surat/update/' . $surat['No']) ?>">
                    <?= csrf_field(); ?>

                    <div class="form-group">
                        <label for="Tanggal_Kirim_Surat">Tanggal Kirim Surat:</label>
                        <input type="date" name="Tanggal_Kirim_Surat" class="form-control"
                            value="<?= $surat['Tanggal_Kirim_Surat']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Nomor_Kirim_Surat">Nomor Kirim Surat:</label>
                        <input type="text" name="Nomor_Kirim_Surat" class="form-control"
                            value="<?= $surat['Nomor_Kirim_Surat']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Perihal">Perihal:</label>
                        <input type="text" name="Perihal" class="form-control" value="<?= $surat['Perihal']; ?>"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="Tujuan_Surat">Tujuan Surat:</label>
                        <input type="text" name="Tujuan_Surat" class="form-control"
                            value="<?= $surat['Tujuan_Surat']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Tanda_Tangan_Penerima">Tanda Tangan Penerima:</label>
                        <input type="text" name="Tanda_Tangan_Penerima" class="form-control"
                            value="<?= $surat['Tanda_Tangan_Penerima']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="Keterangan">Keterangan:</label>
                        <input type="text" name="Keterangan" class="form-control" value="<?= $surat['Keterangan']; ?>"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <br>
                <a href="<?= base_url('surat'); ?>" class="btn btn-secondary">Kembali</a>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>