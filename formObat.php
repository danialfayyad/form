<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="container">
        <div class="card shadow-lg mx-auto" style="max-width: 400px;">
            <div id="form-obat" class="form-container p-4">
                <h3 class="text-center">Form Input Obat</h3>
                <form action="proses.php" method="POST">
                    <div class="mb-3">
                        <label for="namaObat" class="form-label">Nama Obat</label>
                        <input type="text" class="form-control" id="namaObat" name="namaObat" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenisObat" class="form-label">Jenis Obat</label>
                        <input type="text" class="form-control" id="jenisObat" name="jenisObat" required>
                    </div>
                    <div class="mb-3">
                        <label for="stokObat" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stokObat" name="stokObat" min="0" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Submit Obat</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
