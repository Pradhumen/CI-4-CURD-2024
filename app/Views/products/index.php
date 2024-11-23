<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2>Products</h2>
<a href="/products/create" class="btn btn-primary mb-3">Add New Product</a>

<table class="table datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Image</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['product_name'] ?></td>
                <td><?= $product['category_name'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><img src="/uploads/<?= $product['image'] ?>" alt="Product Image" width="50"></td>
                <td><?= $product['status'] ?></td>
                <td>
                    <a href="/products/edit/<?= $product['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/products/delete/<?= $product['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
