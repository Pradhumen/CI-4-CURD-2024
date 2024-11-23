<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2>Categories</h2>
<a href="/categories/create" class="btn btn-primary mb-3">Add New Category</a>

<table class="table datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $category['id'] ?></td>
                <td><?= $category['category_name'] ?></td>
                <td><?= $category['status'] ?></td>
                <td>
                    <a href="/categories/edit/<?= $category['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/categories/delete/<?= $category['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
