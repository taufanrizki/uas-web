<!-- views/kejadian/edit.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kejadian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Edit Kejadian</h2>

        <?= form_open('kejadian/edit/' . $kejadian['no']) ?>
        <div class="mb-3">
            <label for="tanggal_kejadian" class="form-label">Tanggal Kejadian:</label>
            <input type="date" class="form-control" name="tanggal_kejadian" required>
        </div>

        <div class="mb-3">
            <label for="pelapor" class="form-label">Pelapor:</label>
            <input type="text" class="form-control" name="pelapor" required>
        </div>

        <div class="mb-3">
            <label for="tempat_kejadian" class="form-label">Tempat Kejadian:</label>
            <input type="text" class="form-control" name="tempat_kejadian" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kejadian" class="form-label">Jenis Kejadian:</label>
            <input type="text" class="form-control" name="jenis_kejadian" required>
        </div>

        <div class="mb-3">
            <label for="petugas" class="form-label">Petugas:</label>
            <input type="text" class="form-control" name="petugas" required>
        </div>

        <div class="mb-3">
            <label for="penyebab" class="form-label">Penyebab:</label>
            <input type="text" class="form-control" name="penyebab" required>
        </div>

        <div class="mb-3">
            <label for="akibat" class="form-label">Akibat:</label>
            <input type="text" class="form-control" name="akibat" required>
        </div>

        <div class="mb-3">
            <label for="kerugian" class="form-label">Kerugian:</label>
            <input type="text" class="form-control" name="kerugian" required>
        </div>

        <div class="mb-3">
            <label for="solusi" class="form-label">Solusi:</label>
            <input type="text" class="form-control" name="solusi" required>
        </div>

        <div class="mb-3">
            <label for="hasil" class="form-label">Hasil:</label>
            <input type="text" class="form-control" name="hasil" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan:</label>
            <input type="text" class="form-control" name="keterangan" required>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit">
        <?= form_close() ?>

        <a class="btn btn-secondary" href="<?= base_url('kejadian') ?>">Back to Kejadian List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>