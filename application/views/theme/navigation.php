<div id="sticky-header" class="main-header-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="header_wrap d-flex justify-content-between align-items-center">
                    <div class="header_left">
                        <div class="logo">
                            <a href="<?php echo base_url(''); ?>">

                                <img src="<?php echo base_url(''); ?>assets/images/logo-polije.png" height="50px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="header_right d-flex align-items-center">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                                    <li><a href="#">Profile <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="<?php echo site_url('about'); ?>">Sambutan Kepala</a></li>
                                            <li><a href="<?php echo site_url('visimisi'); ?>">Visi & Misi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Program Studi <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo site_url('tif'); ?>">Teknik Informatika</a></li>                                            
                                        <li><a href="<?php echo site_url('mid'); ?>">Manajemen Agroindustri</a></li>
                                    </ul>
                                </li>
                                    <li><a href="#">Civitas <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo site_url('guru'); ?>">Dosen</a></li>                                            
                                        <li><a href="<?php echo site_url('staff'); ?>">Staff</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('pengumuman'); ?>">Pengumuman</a></li>
                                <li><a href="<?php echo site_url('blog'); ?>">Berita</a></li>
                                
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
</div>