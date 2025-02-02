<!DOCTYPE html>
<html>

<head>
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<style>
    th {
        color: rgb(255, 255, 255);
    }

    .description-container {
        position: relative;
    }

    .description-summary {
        display: block;
    }

    .description-text {
        display: none;
        /* Sembunyikan teks lengkap secara default */
    }

    .read-more {
        display: block;
        color: rgb(205, 205, 216);
        cursor: pointer;
        text-decoration: underline;
    }

    .read-more.active {
        color: red;
    }
</style>

<body>
    <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <table class="table">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col">Nama Kamar</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Wifi</th>
                                <th scope="col">Type Kamar</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->nama_kamar); ?></td>
                                    <td>
                                        <div class="description-container">
                                            <p class="dexcription-text"><?php echo e($data->deskripsi); ?></p>
                                            <p class="description_summary"><?php echo e(Str::limit($data->deskripsi, 100)); ?></p>
                                            <a href="#" class="read-more">Read More</a>
                                        </div>
                                    </td>
                                    <td><?php echo e($data->harga); ?></td>
                                    <td><?php echo e($data->wifi); ?></td>
                                    <td><?php echo e($data->type_kamar); ?></td>
                                    <td>
                                        <img width="75" src="room/<?php echo e($data->gambar); ?>" alt="">
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-warning"
                                            href="<?php echo e(url('kamar_update', $data->id)); ?>">Update</a>
                                    </td>
                                    <td><a onclick="return confirm('Apakah Anda Ingin Menghapus Kamar')"
                                            class="btn btn-outline-danger"
                                            href="<?php echo e(url('kamar_delete', $data->id)); ?>">Delete
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- JavaScript files-->
    <?php echo $__env->make('admin.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var readMoreLinks = document.querySelectorAll('.read-more');

            readMoreLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    var container = this.parentElement;
                    var text = container.querySelector('.description-text');
                    var summary = container.querySelector('.description-summary');

                    if (text.style.display === 'none') {
                        text.style.display = 'block';
                        summary.style.display = 'none';
                        this.textContent = 'Read Less';
                    } else {
                        text.style.display = 'none';
                        summary.style.display = 'block';
                        this.textContent = 'Read More';
                    }
                });
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\si_hotell\resources\views/admin/data_kamar.blade.php ENDPATH**/ ?>