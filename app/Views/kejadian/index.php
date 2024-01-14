<!-- views/kejadian/index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Rupa - Rupa Kejadian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Buku Rupa - Rupa Kejadian</h2>

        <a class="btn btn-primary mb-3" href="<?= base_url('kejadian/create') ?>">Tambah Kejadian</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Kejadian</th>
                    <th>Pelapor</th>
                    <th>Tempat Kejadian</th>
                    <th>Jenis Kejadian</th>
                    <th>Petugas</th>
                    <th>Penyebab</th>
                    <th>Akibat</th>
                    <th>Kerugian</th>
                    <th>Solusi</th>
                    <th>Hasil</th>
                    <th>Keterangan</th>
                    <!-- Add more columns as needed -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kejadian_list as $kejadian): ?>
                    <tr>
                        <td>
                            <?= $kejadian['no'] ?>
                        </td>
                        <td>
                            <?= $kejadian['tanggal_kejadian'] ?>
                        </td>
                        <td>
                            <?= $kejadian['pelapor'] ?>
                        </td>
                        <td>
                            <?= $kejadian['tempat_kejadian'] ?>
                        </td>
                        <td>
                            <?= $kejadian['jenis_kejadian'] ?>
                        </td>
                        <td>
                            <?= $kejadian['petugas'] ?>
                        </td>
                        <td>
                            <?= $kejadian['penyebab'] ?>
                        </td>
                        <td>
                            <?= $kejadian['akibat'] ?>
                        </td>
                        <td>
                            <?= $kejadian['kerugian'] ?>
                        </td>
                        <td>
                            <?= $kejadian['solusi'] ?>
                        </td>
                        <td>
                            <?= $kejadian['hasil'] ?>
                        </td>
                        <td>
                            <?= $kejadian['keterangan'] ?>
                        </td>
                        <!-- Aadad -->
                        <td>
                            <a class="btn btn-warning btn-sm"
                                href="<?= base_url('kejadian/edit/' . $kejadian['no']) ?>">Edit</a>
                            <a class="btn btn-danger btn-sm" href="<?= base_url('kejadian/delete/' . $kejadian['no']) ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapusnya?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>