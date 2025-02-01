<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="<?php echo e(asset('admin/img/avatar-6.jpg')); ?>" alt="..."
                class="img-fluid rounded-circle">
        </div>
        <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"><a href="/home"> <i class="icon-home"></i>Home </a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                    class="icon-windows"></i>Kamar Hotel</a></li>
        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li><a href="<?php echo e(url('data_kamar')); ?>">Data Kamar</a></li>
            <li><a href=" <?php echo e(url('create_kamar')); ?>">Tambah Kamar</a></li>
        </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\si_hotell\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>