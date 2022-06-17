<div class="page-main-header close_icon">
  <div class="main-header-right row">
    <div class="main-header-left col-6">
      <div class="logo-wrapper solife"><a href="{{ route('index') }}"> SO LIFE</a></div>
      <div class="toggle-sidebar sidebar-toggle"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>
    </div>
    <div class="left-menu-header col-6">
      <div class="notification-box col-sm-8 col-md-6 col-lg-5 col-xl-2"><a class="btn btnHeader">Paylaş Kazan</a></div>
      <div class="notification-box col-sm-8 col-md-6 col-lg-5 col-xl-2 secondBtn"><a class="btn btnHeader">Paket Al</a></div>
    </div>
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <div class="notification-box col-sm-8 col-md-6 col-lg-5 col-xl-3 d-block d-md-none searchMobile"><a class="btn" type="button"><i class="marketlink md-block d-none" data-feather="shopping-cart"></i>11h 10g 11s</a></div>
        <li class="onhover-dropdown">
          <i class="fa fa-search searchicon"></i>
          <div class="bookmark-dropdown onhover-show-div">
            <div class="form-group mb-0">
              <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                <input class="form-control" type="text" placeholder="Ara...">
              </div>
            </div>
          </div>
        </li>
          <li class="onhover-dropdown">
              <div class="notification-box"><i data-feather="check-square"></i></div>
              <ul class="notification-dropdown onhover-show-div">
                  <li>
                      <p class="f-w-700 mb-0">HEDEFLERİM<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                      <div class="media">
                          <span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                          <div class="media-body">
                              <p>Sipariş İletiliyor</p>
                          </div>
                      </div>
                  </li>
                  <li class="noti-secondary">
                      <div class="media">
                          <span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                          <div class="media-body">
                              <p>Sipariş Tamamlandı</p>
                          </div>
                      </div>
                  </li>
                  <li class="noti-success">
                      <div class="media">
                          <span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                          <div class="media-body">
                              <p>Ticket oluşturuldu</p>
                          </div>
                      </div>
                  </li>
                  <li class="noti-danger">
                      <div class="media">
                          <span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                          <div class="media-body">
                              <p>Sipariş teslim edildi</p>
                          </div>
                      </div>
                  </li>
              </ul>
          </li>
        <li class="onhover-dropdown">
          <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
          <ul class="notification-dropdown onhover-show-div">
            <li>
              <p class="f-w-700 mb-0">3 Bildiriminiz var<span class="pull-right badge badge-primary badge-pill">4</span></p>
            </li>
            <li class="noti-primary">
              <div class="media">
                <span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                <div class="media-body">
                  <p>Sipariş İletiliyor</p>
                  <span>10 dakika önce</span>
                </div>
              </div>
            </li>
            <li class="noti-secondary">
              <div class="media">
                <span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                <div class="media-body">
                  <p>Sipariş Tamamlandı</p>
                  <span>1 saat önce</span>
                </div>
              </div>
            </li>
            <li class="noti-success">
              <div class="media">
                <span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                <div class="media-body">
                  <p>Ticket oluşturuldu</p>
                  <span>3 saat önce</span>
                </div>
              </div>
            </li>
            <li class="noti-danger">
              <div class="media">
                <span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                <div class="media-body">
                  <p>Sipariş teslim edildi</p>
                  <span>6 saat önce</span>
                </div>
              </div>
            </li>
          </ul>
        </li>
        <li class="onhover-dropdown p-0">
          <div class="notification-box"><button class="btn btn-primary-light" type="button"><i data-feather="user"></i>Profil</button></div>
            <ul class="notification-dropdown onhover-show-div">
              <div class="portre">
                <img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="" />
                <div class="badge-bottom"><span class="badge badge-primary">eMc</span></div>
                <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">Emre Çetin</h6></a>
                  <div class="notification-box d-none d-md-block"><a class="btn">11h 10g 11s</a></div>
              </div>

              <ul>
                  <li><i class="bookmark-icon" data-feather="command"></i><a href="#"> Profil</a><span class="pull-right"></i></span></li>
                  <li><i class="bookmark-icon" data-feather="airplay"></i><a href="#"> Sözleşmeler</a><span class="pull-right"></span></li>
              </ul>
            </ul>
        </li>
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
</div>
