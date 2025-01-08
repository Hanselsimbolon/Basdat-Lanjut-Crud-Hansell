<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(isset($kategori) ? 'Edit' : 'Tambah'); ?> Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4"><?php echo e(isset($kategori) ? 'Edit' : 'Tambah'); ?> Kategori</h1>
        <!-- Form untuk Create atau Edit -->
        <form action="<?php echo e(isset($kategori) ? route('kategori.update', $kategori->id) : route('kategori.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if(isset($kategori)): ?>
                <?php echo method_field('PUT'); ?>  <!-- Menambahkan metode PUT untuk update -->
            <?php endif; ?>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" id="kategori" value="<?php echo e(isset($kategori) ? $kategori->kategori : ''); ?>" required>
            </div>
            <div class="mb-3">
                <label for="Aktif" class="form-label">Aktif</label>
                <select name="Aktif" class="form-control" id="Aktif" required>
                    <option value="Y" <?php echo e(isset($kategori) && $kategori->Aktif == 'Y' ? 'selected' : ''); ?>>Ya</option>
                    <option value="N" <?php echo e(isset($kategori) && $kategori->Aktif == 'N' ? 'selected' : ''); ?>>Tidak</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo e(isset($kategori) ? 'Update' : 'Simpan'); ?></button>
            <a href="<?php echo e(route('kategori.index')); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\VIVA_OFFICE\mycrudapp\resources\views/kategori/create.blade.php ENDPATH**/ ?>