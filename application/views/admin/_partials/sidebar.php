<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-text mx-3">Kakoto</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('admin/overview') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Management Content
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Master Data:</h6> -->
            <a class="collapse-item" href="<?php echo site_url('admin/hero') ?>">Banner</a>
            <a class="collapse-item" href="<?php echo site_url('admin/pages') ?>">Pages</a>
            <a class="collapse-item" href="<?php echo site_url('admin/service') ?>">Service</a>
            <a class="collapse-item" href="<?php echo site_url('admin/gallery') ?>">Gallery</a>
            <a class="collapse-item" href="<?php echo site_url('admin/testimoni') ?>">Testimoni</a>
            <a class="collapse-item" href="<?php echo site_url('admin/promo') ?>">Promo</a>
            <a class="collapse-item" href="<?php echo site_url('admin/contact') ?>">Contact</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Riwayat Pesanan
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pesanan</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Master Data:</h6> -->
            <a class="collapse-item" href="<?php echo site_url('admin/reserve') ?>">Daftar Pesanan</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

</ul>