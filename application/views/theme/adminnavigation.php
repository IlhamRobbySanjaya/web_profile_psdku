<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">PSDKU POLIJE</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/dashboard'?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsegas" aria-expanded="true" aria-controls="collapseSiji">
        <i class="fas fa-fw fa-address-book"></i>
        <span>Data Pegawai</span>
      </a>
      <div id="collapsegas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">            
          <a class="collapse-item" href="<?php echo base_url().'admin/guru'?>">Data Dosen</a>
          <a class="collapse-item" href="<?php echo base_url().'admin/staff'?>">Data Staff</a>
        </div>
      </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/pengumuman'?>">
          <i class="fas fa-fw fa-volume-up"></i>
          <span>Data Pengumuman</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/mapel'?>">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Data Mata Kuliah</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/pengguna'?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data User</span></a>
      </li>

      <!-- Divider -->
            
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiji" aria-expanded="true" aria-controls="collapseSiji">
          <i class="fas fa-fw fa-cog"></i>
          <span>Berita</span>
        </a>
        <div id="collapseSiji" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">            
            <a class="collapse-item" href="<?php echo base_url().'admin/tulisan'?>">List Berita</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/tulisan/add_tulisan'?>">Pos Berita</a>
              <a class="collapse-item" href="<?php echo base_url().'admin/kategori'?>">Kategori Berita</a>
          </div>
        </div>
      </li>  
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/login/logout'?>">
          <i class="fas fa-fw fa-power-off"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>