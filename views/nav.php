<header class="site-navbar" role="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-11 col-xl-4">
                <h1 class="mb-0 site-logo"><a href="Home" class="text-white mb-0">Tasqi Skincare <span class="text-primary">Dumai</span> </a></h1>
            </div>
            <div class="col-12 col-md-8 d-none d-xl-block">
                <nav style="zoom:90%" class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="<?php if ($data['link'] == 'Home'): ?> active <?php endif;?>"><a href="Home"><span>Home</span></a></li>
                         <?php if (isset($Session['admin'])): ?>

                        <li class="<?php if ($data['link'] == 'Profil'): ?> active <?php endif;?>"><a href="Profil"><span>Profil</span></a></li>
                        <?php endif;?>
                        <li class="<?php if ($data['link'] == 'Perawatan'): ?> active <?php endif;?>"><a href="Perawatan"><span>Perawatan</span></a></li>


                        <?php if (isset($Session['admin'])): ?>
                        <?php if ($Session['admin']->jenis == 'Admin'): ?>
                        <li class="has-children">
                            <a href="javascript:;"><span>Master</span></a>
                            <ul class="dropdown arrow-top">
                                <li class="<?php if ($data['link'] == 'Data-Perawatan'): ?> active <?php endif;?>"><a href="Data-Perawatan">Data Perawatan</a></li>
                                <li class="has-children">
                                    <a href="javascript:;">Data Pengguna</a>
                                    <ul class="dropdown">
                                        <li class="<?php if ($data['link'] == 'Data-Pelanggan'): ?> active <?php endif;?>"><a href="Data-Pengguna?jenis=Pelanggan">Pelanggan</a></li>
                                        <li class="<?php if ($data['link'] == 'Data-Admin'): ?> active <?php endif;?>"><a href="Data-Pengguna?jenis=Admin">Admin</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <?php endif;?>
                        <li class="<?php if ($data['link'] == 'Booking'): ?> active <?php endif;?>"><a href="Booking"><span>Data Booking</span></a></li>
                        <?php if ($Session['admin']->jenis == 'Admin'): ?>
                        <li class="has-children">
                            <a href="javascript:;"><span>Laporan</span></a>
                            <ul class="dropdown arrow-top">
                                <li class="<?php if ($data['link'] == 'Laporan-Perawatan'): ?> active <?php endif;?>"><a href="Laporan-Perawatan">Perawatan</a></li>
                                <li class="<?php if ($data['link'] == 'Laporan-Booking'): ?> active <?php endif;?>"><a href="Laporan-Booking">Pembayaran Booking</a></li>
                            </ul>
                        </li>
                        <?php endif;?>
                        <?php endif;?>
                        <?php if (isset($Session['admin'])): ?>
                        <li><a href="Logout"><span>Logout</span></a></li>
                        <?php else: ?>
                        <li class="<?php if ($data['link'] == 'Login'): ?> active <?php endif;?>"><a href="Login"><span>Login</span></a></li>
                        <?php endif;?>
                    </ul>
                </nav>
            </div>
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
        </div>
    </div>
</header>
<div class="site-blocks-cover overlay" style="background-image: url(images/bg.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <?php if (in_array($hal, $atas)): ?>
        <?php include 'Pages/' . $data['path'] . ".php";?>
        <?php else: ?>
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-10 text-center">
                        <h1 data-aos="fade-up" class="mb-5">Solusi Untuk Kulit Anda <span class="typed-words"></span></h1>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
</div>