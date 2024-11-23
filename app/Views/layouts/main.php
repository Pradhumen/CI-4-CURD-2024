<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Dashboard' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">
    <style>
        .cropper-container {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <?= $this->include('layouts/header') ?>
    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>
    
    <?= $this->include('layouts/footer') ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   

    <!-- Add this in the <head> section of your layout file -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const imageInput = document.getElementById('image-input');
        const imagePreview = document.getElementById('image-preview');
        const croppedImageInput = document.getElementById('cropped-image');
        let cropper;

        imageInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';

                    // Initialize Cropper.js
                    if (cropper) {
                        cropper.destroy();
                    }
                    cropper = new Cropper(imagePreview, {
                        aspectRatio: 1, // Adjust as needed
                        viewMode: 2,
                        autoCropArea: 0.8,
                        crop(event) {
                            // Update cropped image data
                            const canvas = cropper.getCroppedCanvas();
                            croppedImageInput.value = canvas.toDataURL('image/jpeg');
                        },
                    });
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>
</body>
</html>
