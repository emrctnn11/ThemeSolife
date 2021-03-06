@extends('layouts.admin.master')

@section('title', 'Default Page')

@push('breadcrumb')
<li class="breadcrumb-item">Pages</li>
<li class="breadcrumb-item active">Sample Page</li>

@endpush

@push('css')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vector-map.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/swiper-bundle.min.css')}}">

  <style>

  </style>
@endpush
    @section('content')
      @yield('breadcrumb-list')
      <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 box-col-12 order-sm-1 des-xl-100">
              <div class="row">
                <div class="col-12 col-xl-6">
                  <div class="card default-card latest-update-sec">
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordernone">
                            <tbody>

                              <tr>
                                  <div class="media-body media-header"><span class="media-header-span">Unilevel Ağacı</span></div>
                                  <td class="col-6">
                                      <div class="media media-border">
                                          <div class="media-body"><span>Yıllık Ciro</span>
                                              <p>200.000<span>₺</span></p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="media col-6">
                                          <div class="media-body"><span>Aylık Ciro</span>
                                              <p>200.000<span>₺</span></p>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div class="media media-border">
                                          <div class="media-body"><span>Sol Kol</span>
                                              <p>200</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td class="col-6">
                                      <div class="media col-6">
                                          <div class="media-body"><span style="white-space: nowrap;">Sağ Kol</span>
                                              <p>200</p>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <div class="media media-border">
                                          <div class="media-body"><span>Ağacımdakiler</span>
                                              <p>200</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td class="col-6">
                                      <div class="media col-6">
                                          <div class="media-body"><span style="white-space: nowrap;">Üye Siparişi</span>
                                              <p>200</p>
                                          </div>
                                      </div>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-12 col-xl-6">
                  <div class="card default-card latest-update-sec">
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordernone">
                            <tbody>
                                <tr>
                                    <div class="media-body media-header"><span class="media-header-span">Verilerim</span></div>
                                    <td class="col-6">
                                        <div class="media media-border">
                                            <div class="media-body"><span>Aktif Bayiler</span>
                                                <p>203</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media col-6">
                                            <div class="media-body"><span>Pasif Bayiler</span>
                                                <p>213</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-6">
                                        <div class="media media-border">
                                            <div class="media-body"><span>Sipariş Tutarı</span>
                                                <p>200.000<span>₺</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media col-6">
                                            <div class="media-body"><span>Sipariş Adeti</span>
                                                <p>200</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-6">
                                        <div class="media media-border">
                                            <div class="media-body"><span>Güncel Kazanç</span>
                                                <p>200.000<span>₺</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media col-6">
                                            <div class="media-body"><span>Toplam Kazanç</span>
                                                <p>432.392<span>₺</span</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-xl-12 box-col-12 des-xl-100 top-dealer-sec">
                      <div class="card default-card">
                          <div class="card-header pb-0">
                          </div>
                          <div class="card-body">
                              <div class="swiper mySwiper">
                                  <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                      <div class="row">
                                          <div class="col-12">
                                                <div class="header-top d-sm-flex justify-content-between slider-header align-items-center">
                                                    <h5>Ayın Bayileri</h5>
                                                </div>
                                              <div class="row">
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard-2/1.png')}}" alt="...">
                                                              <h6>Eda Gires</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard-2/8.png')}}" alt="...">
                                                              <h6>Ayşe Gül</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard-2/3.png')}}" alt="...">
                                                              <h6>Fatma Derin</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard-2/4.png')}}" alt="...">
                                                              <h6> Derin Irgaz</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard-2/5.png')}}" alt="...">
                                                              <h6>Sevil Akar</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard-2/6.png')}}" alt="...">
                                                              <h6>Ela Evren</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                      <div class="swiper-slide">
                                      <div class="row">
                                          <div class="col-12">
                                            <div class="header-top d-sm-flex slider-header justify-content-between align-items-center">
                                                <h5 style="margin-right: 40px">Ayın Ürünleri</h5>
                                            </div>
                                              <div class="row">
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard/product-1.png')}}" alt="...">
                                                              <h6>Ayakkabı</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard/product-2.png')}}" alt="...">
                                                              <h6>Bitki dekorasyon</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard/product-3.png')}}" alt="...">
                                                              <h6>Bitki dekorasyon</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard/product-3.png')}}" alt="...">
                                                              <h6>Çanta</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard/product-4.png')}}" alt="...">
                                                              <h6>Tişört</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-6 col-md-4">
                                                      <div class="card">
                                                          <div class="top-dealerbox text-center">
                                                              <img class="card-img-top" src="{{asset('assets/images/dashboard/product-5.png')}}" alt="...">
                                                              <h6>Ayakkabı</h6>
                                                              <a class="btn btn-rounded" href="#">Detaylar</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  </div>
                                  <div class="swiper-button-next swiper-button-both"></div>
                                  <div class="swiper-button-prev swiper-button-both"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-4 box-col-12 order-sm-2 order-first des-xl-100">
              <div class="row">
                <div class="col-12 col-xl-12">
                  <div class="row">
                      <div class="col-12">
                          <div class="card default-card custom-card">
                              <div class="card-header pb-0">
                                <div class="txn-history">
                                  <p><b>CÜZDANIM</b></p>
                                  <p class="txn-list" style="padding-right: 17px">Kullanılabilir Bakiyem<span class="debit-amount">100₺</span></p>
                                  <h6 class="txn-puan" style="padding-right: 17px">PUANIM<span class="debit-amount">2450</span></h6>
                                  <i class="icon-wallet wallettrans"></i>
                                </div>
                              </div>
                              <div class="setting-list">
                                <ul class="list-unstyled setting-option">
                                  <li>
                                    <div class="setting-primary"><i class="fa fa-plus"></i></div>
                                  </li>
                                </ul>
                              </div>
                              {{-- <div class="card-profile"></div> --}}
                              <div class="card-footer row">
                                  <div class="col-6 col-sm-6">
                                      <button class="btn btn-primary-light" type="button">Detaylar</button>
                                  </div>
                                  <div class="col-6 col-sm-6">
                                      <button class="btn btn-primary-light" type="button">Para Çek</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card profile-greeting">
                      <div class="card-header">
                        <div class="header-top">
                        </div>
                      </div>
                      <div class="confetti">
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="code-box-copy"></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>




      <!-- Container-fluid Ends-->
@push('scripts')
            <script src="{{asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
            <script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
            <script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
            <script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
            <script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
            <script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
            <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
            <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
            <script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
            <script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
            <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
            <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
            <script src="{{asset('assets/js/owlcarousel/owl-custom.js')}}"></script>
            <script src="{{asset('assets/js/dashboard/dashboard_2.js')}}"></script>
            <script src="{{asset('assets/js/swiperjs/swiper-bundle.min.js')}}"></script>

            <script>
                var swiper = new Swiper(".mySwiper", {
                    spaceBetween: 30,
                    centeredSlides: true,
                    autoplay: {
                        delay: 4500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
@endpush
@endsection
