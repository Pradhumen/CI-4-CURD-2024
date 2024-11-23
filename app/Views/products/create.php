<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2>Create Product</h2>
<div class="container mb-5">
<form action="/products/store" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="product_name" class="form-label">Product Name</label>
        <input type="text" name="product_name" id="product_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select name="category_id" id="category_id" class="form-select">
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" id="price" class="form-control" required>
    </div>


    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" name="image" id="image-input" class="form-control-file" accept="image/*" required>
        <div id="preview-container" style="margin-top: 20px;">
            <img id="image-preview" style="max-width: 100%; display: none;">
        </div>
        <input type="hidden" id="cropped-image" name="cropped_image">
    </div>

    </div>


    <div id="crop-container" style="display: none;">
        <button type="button" id="crop-btn" class="btn btn-primary mt-2">Crop Image</button>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success mt-3 mb-5">Save</button>
</form>
</div>


<?= $this->endSection() ?>
