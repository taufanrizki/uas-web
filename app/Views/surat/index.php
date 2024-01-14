<!-- application/views/surat/index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BUKU EKSPEDISI</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>BUKU EKSPEDISI</h2>
        <a href="<?= base_url('surat/create'); ?>" class="btn btn-primary mb-2">Surat baru</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Kirim Surat</th>
                    <th>Nomor Kirim Surat</th>
                    <th>Perihal</th>
                    <th>Tujuan Surat</th>
                    <th>Tanda Tangan Penerima</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($surat as $item): ?>
                    <tr>
                        <td>
                            <?= $item['No']; ?>
                        </td>
                        <td>
                            <?= $item['Tanggal_Kirim_Surat']; ?>
                        </td>
                        <td>
                            <?= $item['Nomor_Kirim_Surat']; ?>
                        </td>
                        <td>
                            <?= $item['Perihal']; ?>
                        </td>
                        <td>
                            <?= $item['Tujuan_Surat']; ?>
                        </td>
                        <td>
                            <?= $item['Tanda_Tangan_Penerima']; ?>
                        </td>
                        <td>
                            <?= $item['Keterangan']; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('surat/edit/' . $item['No']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('surat/delete/' . $item['No']); ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapusnya?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>