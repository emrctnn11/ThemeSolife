<header class="main-nav sidebar-navbar close_icon">
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6><a href="#">Özet Ekranı</a> </h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-group"></i><span class="sidebar-span">MÜŞTERİ YÖNETİMİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(route('datatable-ext-responsive')); ?>" class="<?php echo e(routeActive('datatable-ext-responsive')); ?>">Müşterilerim</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Adaylarım</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-sitemap"></i><span class="sidebar-span">AĞAÇ YÖNETİMİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Binary Ağacı</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Unilevel Ağacı</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Yerleşim Bekleyen Bayiler</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-building"></i><span class="sidebar-span">BAYİ YÖNETİMİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(route('form-validation')); ?>" class="<?php echo e(route('form-validation')); ?>">Yeni Bayi Kaydı</a></li>
                            <li><a href="<?php echo e(route('form-wizard')); ?>" class="<?php echo e(route('form-wizard')); ?>">Bayilerim</a></li>
                            <li><a href="<?php echo e(route('form-wizard-three')); ?>" class="<?php echo e(route('form-wizard-three')); ?>">Bayi Adaylarım</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-exchange"></i><span class="sidebar-span">KAZANÇ YÖNETİMİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(route('form-wizard-two')); ?>" class="<?php echo e(route('form-wizard-two')); ?>">Gelirler</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Puanlar</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Belgelerim</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-sliders"></i><span class="sidebar-span">KARİYER İŞLEMLERİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Kariyer</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Kariyer Göstergesi</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Kariyer Hacmi</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class=" fa fa-shopping-basket"></i><span class="sidebar-span">SİPARİŞLERİM</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Siparişlerim</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Üyelerin Siparişleri</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Müşteri Siparişleri</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-suitcase"></i><span class="sidebar-span">CÜZDAN</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Hesap Hareketleri</a></li>
                            <li><a href=<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Ödeme Talebi</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Para Yatır</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="<?php echo e(route('state-color')); ?>">
                            <i class="fa fa-archive"></i>
                            <span class="sidebar-span">PAKET GRUPLARI</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="<?php echo e(route('state-color')); ?>">
                            <i class="fa fa-cube"></i>
                            <span class="sidebar-span">ÜRÜNLER</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="<?php echo e(route('state-color')); ?>">
                            <i class="fa fa-code-fork"></i>
                            <span class="sidebar-span">BAYİ HARİTASI</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="<?php echo e(route('state-color')); ?>">
                            <i class="fa fa-eur"></i>
                            <span class="sidebar-span">KAZANÇ AÇIKLAMALARI</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-heart"></i><span>YARDIM & DESTEK</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Mesajlarım</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(routeActive('#')); ?>">Taleplerim</a></li>
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(route('state-color')); ?>">Şikayetlerim</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="<?php echo e(route('state-color')); ?>">
                            <i class="fa fa-random"></i>
                            <span class="sidebar-span">SİPARİŞ TAKİBİ</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="<?php echo e(route('state-color')); ?>">
                            <i class="fa fa-share"></i>
                            <span class="sidebar-span">PAYLAŞ</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH /home/vagrant/code/theme/v8/theme/resources/views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>