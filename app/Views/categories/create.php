<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2>Create Category</h2>
<form action="/categories/store" method="post">
    <div class="mb-3">
        <label for="category_name" class="form-label">Category Name</label>
        <input type="text" name="category_name" id="category_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>

<?= $this->endSection() ?>
