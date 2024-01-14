<!-- views/surat/create.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUKU EKPEDISI</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">BUKU EKSPEDISI</h2>
            </div>
            <div class="card-body">
                <?= form_open('surat/store'); ?>

                <div class="form-group">
                    <label for="Tanggal_Kirim_Surat">Tanggal Kirim Surat:</label>
                    <input type="date" name="Tanggal_Kirim_Surat" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Nomor_Kirim_Surat">Nomor Kirim Surat:</label>
                    <input type="text" name="Nomor_Kirim_Surat" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Perihal">Perihal:</label>
                    <input type="text" name="Perihal" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Tujuan_Surat">Tujuan Surat:</label>
                    <input type="text" name="Tujuan_Surat" class="form-control" maxlength="100" required>
                </div>

                <div class="form-group">
                    <label for="Tanda_Tangan_Penerima">Tanda Tangan Penerima:</label>
                    <input type="text" name="Tanda_Tangan_Penerima" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Keterangan">Keterangan:</label>
                    <textarea name="Keterangan" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

                <?= form_close(); ?>
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