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
                            <h6>NETWORK MENU</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-group"></i><span>MÜŞTERİ YÖNETİMİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('datatable-ext-responsive') }}" class="{{routeActive('datatable-ext-responsive')}}">Müşterilerim</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Adaylarım</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-sitemap"></i><span>AĞAÇ YÖNETİMİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Binary Ağacı</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Unilevel Ağacı</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Yerleşim Bekleyen Bayiler</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-building"></i><span>BAYİ YÖNETİMİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('form-validation')}}" class="{{route('form-validation')}}">Yeni Bayi Kaydı</a></li>
                            <li><a href="{{route('form-wizard')}}" class="{{ route('form-wizard')}}">Bayilerim</a></li>
                            <li><a href="{{ route('form-wizard-three') }}" class="{{ route('form-wizard-three') }}">Bayi Adaylarım</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-exchange"></i><span>KAZANÇ YÖNETİMİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('form-wizard-two') }}" class="{{ route('form-wizard-two') }}">Gelirler</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Puanlar</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Belgelerim</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-sliders"></i><span>KARİYER İŞLEMLERİ</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Kariyer</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Kariyer Göstergesi</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Kariyer Hacmi</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6><a href="#">Özet Ekranı</a> </h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class=" fa fa-shopping-basket"></i><span>SİPARİŞLERİM</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Siparişlerim</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Üyelerin Siparişleri</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Müşteri Siparişleri</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-suitcase"></i><span>CÜZDAN</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Hesap Hareketleri</a></li>
                            <li><a href={{ route('state-color')}}" class="{{ route('state-color')}}">Ödeme Talebi</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Para Yatır</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="{{ route('state-color')}}">
                            <i class="fa fa-archive"></i>
                            <span>PAKET GRUPLARI</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="{{ route('state-color')}}">
                            <i class="fa fa-cube"></i>
                            <span>ÜRÜNLER</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="{{ route('state-color')}}">
                            <i class="fa fa-code-fork"></i>
                            <span>BAYİ HARİTASI</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="{{ route('state-color')}}">
                            <i class="fa fa-eur"></i>
                            <span>KAZANÇ AÇIKLAMALARI</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i class="fa fa-heart"></i><span>YARDIM & DESTEK</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Mesajlarım</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{routeActive('#')}}">Taleplerim</a></li>
                            <li><a href="{{ route('state-color')}}" class="{{ route('state-color')}}">Şikayetlerim</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="{{ route('state-color')}}">
                            <i class="fa fa-random"></i>
                            <span>SİPARİŞ TAKİBİ</span>
                            <div class="according-menu">

                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav " href="{{ route('state-color')}}">
                            <i class="fa fa-share"></i>
                            <span>PAYLAŞ</span>
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
