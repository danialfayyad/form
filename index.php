<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="card shadow-lg mx-auto text-center" style="max-width: 450px;">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Pilih Form</h4>
        </div>
        <div class="card-body">
            <p class="fs-5">Silakan pilih form:</p>
            <div class="d-grid gap-3">
                <button type="button" class="btn btn-primary btn-lg" onclick="location.href='formPasien.php'">
                    <i class="fas fa-user-injured me-2"></i> Pasien
                </button>
                <button type="button" class="btn btn-success btn-lg" onclick="location.href='formDokter.php'">
                    <i class="fas fa-user-md me-2"></i> Dokter
                </button>
                <button type="button" class="btn btn-warning btn-lg" onclick="location.href='formObat.php'">
                    <i class="fas fa-pills me-2"></i> Obat
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
