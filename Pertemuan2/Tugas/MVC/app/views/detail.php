<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta nama="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card shadow w-50 mx-auto">
        <div class="card-header bg-info text-white">
            <h3 class="mb-0">Detail Pengguna</h3>
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> <?= htmlspecialchars($user['nama']); ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email']); ?></p>
        </div>
        <div class="card-footer text-end">
            <a href="index.php?action=edit&id=<?= $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="index.php" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
</div>
</body>
</html>
