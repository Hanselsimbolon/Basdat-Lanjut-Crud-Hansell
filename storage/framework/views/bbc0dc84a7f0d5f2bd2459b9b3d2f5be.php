<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Post</h1>
        <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" id="title" value="<?php echo e($post->title); ?>" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="slug" value="<?php echo e($post->slug); ?>" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea name="content" class="form-control" id="content" rows="5" required><?php echo e($post->content); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select">
                    <option value="publish" <?php echo e($post->status == 'publish' ? 'selected' : ''); ?>>Publish</option>
                    <option value="draft" <?php echo e($post->status == 'draft' ? 'selected' : ''); ?>>Draft</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\VIVA_OFFICE\mycrudapp\resources\views/posts/edit.blade.php ENDPATH**/ ?>