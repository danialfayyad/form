<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="container">
        <div class="card shadow-lg mx-auto" style="max-width: 400px;">
            <div id="form-dokter" class="form-container p-4">
                <h3 class="text-center">Form Input Dokter</h3>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="namaDokter" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="namaDokter" name="namaDokter" required>
                    </div>
                    <div class="mb-3">
                        <label for="spesialisDokter" class="form-label">Spesialis</label>
                        <input type="text" class="form-control" id="spesialisDokter" name="spesialisDokter" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamatDokter" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamatDokter" name="alamatDokter" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Submit Dokter</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
