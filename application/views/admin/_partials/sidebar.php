<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-text mx-3">Mantiko</div>
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
        <span>Home Page</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Master Data:</h6> -->
            <a class="collapse-item" href="<?php echo site_url('admin/hero') ?>">Banner</a>
            <a class="collapse-item" href="<?php echo site_url('admin/content') ?>">Home Page</a>
            <a class="collapse-item" href="<?php echo site_url('admin/gallery') ?>">Gallery</a>
            <!-- <a class="collapse-item" href="<?php echo site_url('admin/client') ?>">Client</a> -->
            <a class="collapse-item" href="<?php echo site_url('admin/contact') ?>">Contact</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-folder"></i>
        <span>Company Page</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Master Data:</h6> -->
            <a class="collapse-item" href="<?php echo site_url('admin/pages/mantiko') ?>">Mantiko Group</a>
            <a class="collapse-item" href="<?php echo site_url('admin/pages/vidtron') ?>">Vidtron</a>
            <a class="collapse-item" href="<?php echo site_url('admin/pages/mgi') ?>">MGI</a>
            <a class="collapse-item" href="<?php echo site_url('admin/pages/uf') ?>">UF Enterprise</a>
            <a class="collapse-item" href="<?php echo site_url('admin/pages/kakoto') ?>">Kakoto</a>
            <a class="collapse-item" href="<?php echo site_url('admin/pages/kapau') ?>">D'Kapau</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

</ul>