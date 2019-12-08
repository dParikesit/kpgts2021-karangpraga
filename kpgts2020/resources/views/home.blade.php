<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/logo.ico">

    <title>KPGTS 2020</title>

    {{-- Fonts --}}
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,600" />

    {{-- Styles --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/layout.css" />
    <link rel="stylesheet" href="/css/home.css" />

  </head>
  <body>
    <main class="main">
    <div class="bg"></div>
      <section class="hero is-fullheight" id="first">
        <div class="hero-head">
          <div class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <div class="navbar-burger burger" data-target="navMenuTransparentExample">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div id="navMenuTransparentExample" class="navbar-menu">
                <div class="navbar-end">
                  <a class="navbar-item" href="/berita">
                    <span> {{ trans('menu.news') }} </span>
                  </a>
                  @if (Auth::check())
                  @if (Auth::user()->type == 'admin')
                  <a class="navbar-item" href="/admin/dashboard">
                    <span> Dashboard </span>
                  </a>
                  <a class="navbar-item" href="/admin/logout">
                    <span> Logout </span>
                  </a>
                  @endif
                  @if (Auth::user()->type == 'user')
                  <a class="navbar-item" href="/user/dashboard">
                    <span> Dashboard </span>
                  </a>
                  <a class="navbar-item" href="/user/logout">
                    <span> Logout </span>
                  </a>
                  @endif
                  @else
                  <a class="navbar-item" href="/user/register">
                    <span> {{ trans('menu.registration') }} </span>
                  </a>
                  <a class="navbar-item" href="/user/login">
                    <span> Login </span>
                  </a>
                  @endif
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="hero-body">
          <div class="container">
            <img src="/img/logo.png" style="width: 100%; max-width: 600px">
          </div>
        </div>
      </section>
      <div class="clouds">
        <img class="cloud-1" src="/img/cloud-1.png"></img>
        <img class="cloud-2" src="/img/cloud-2.png"></img>
        <img class="cloud-3" src="/img/cloud-3.png"></img>
      </div>
      <section class="hero is-medium" id="second" style="background-color:#050742; position: relative;">
        <div class="hero-body">
          <div class="container">
            <div class="columns">
              <div class="column is-7" style="color:#f29301">
                <h1 style="color:#f29301"> KPGTS 2020</h1>
                <p>
                  KPGTS 2020 (Karang Praga Goes To School 2020) adalah acara yang diadakan
                  mahasiswa ITB asal Semarang untuk memfasilitasi adik-adik SMA yang ingin masuk ITB
                  atau PTN lainnya dengan memberikan informasi serta mengadakan Try Out.
                </p>
                <p>
                  Secara garis besar, ada dua acara terbesar KPGTS 2020: Roadshow dan Try Out
                </p>
              </div>
              <div class="column is-5" style="text-align: center">
                <img src="/img/logo-square.png" style="max-width:50%">
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <section class="hero" style="text-align: right" id="third">
        <div class="hero-body">
          <div class="container">
            <h1> Roadshow </h1>
            <p>
              Tiap tahunnya, KPGTS melakukan roadshow ke SMA-SMA di Semarang
              untuk berbagi pengalaman perkuliahan guna mempersiapkan adik-adik SMA
              ke jenjang yang lebih tinggi.
            </p>
            <div class="field is-grouped" style="margin-top: 10px">
              <p class="control is-expanded">
              </p>
              <p class="control">
                <a class="button is-outline-blue" href="/roadshow-sekolah">
                  <i class="fa fa-calendar"> </i> &nbsp;
                  Jadwal Sekolah
                </a>
              </p>
              <p class="control">
                <a class="button is-outline-blue" href="/info-fakultas">
                  <i class="fa fa-question"> </i> &nbsp;
                  Info Jurusan
                </a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="hero" id="fourth" style="background-color:#050742; position: relative;">
        <div class="hero-body">
          <div class="container" style="color:#f29301">
            <h1 style="color:#f29301"> TONAMPTN </h1>
            <p>
              KPGTS juga mengadakan Try Out Nasional Masuk Perguruan Tinggi Negeri
              (TONAMPTN) yang digelar bersamaan di lebih dari 30 kota dari seluruh Nusantara.
            </p>
            <div class="field is-grouped" style="margin-top: 10px">
              <p class="control">
                <a class="button is-outline-orange" href="/user/register">
                  <i class="fa fa-edit"> </i> &nbsp;
                  Registrasi
                </a>
              </p>
              <p class="control">
                <a class="button is-outline-orange" href="/jadwal-to">
                  <i class="fa fa-calendar-o"> </i> &nbsp;
                  Jadwal Acara
                </a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="hero" style="background-color: transparent; text-align: center; color:#050742" id="fifth">
        <div class="hero-head">
        </div>
        <div class="hero-body">
          <div class="container">
            <h1> Kontak </h1>
            <div class="columns is-multiline">
            <div class="column is-offset-4 is-4">
              <a targer="_blank" href="https://line.me/R/ti/p/%40iyn9473m" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/line.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Line Official Account</strong> <br> @ID_LINE_DIGANTI_YAAA </p>
                    </div>
                  </div>
                </article>
              </a>
            </div>
            <div class="column is-offset-4 is-4">
              <a targer="_blank" href="//instagram.com/kpgts2020/" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/instagram.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Instagram Account</strong> <br> @kpgts2020 </p>
                    </div>
                  </div>
                </article>
              </a>
            </div>
            <div class="column is-offset-4 is-4">
              <a targer="_blank" href="mailto:karangraga@gmail.com" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/mail.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Email</strong> <br> kpgts2020@gmail.com </p>
                    </div>
                  </div>
                </article>
              </a>
            </div>
            <div class="column is-offset-4 is-4">
              <a targer="_blank" href="/" style="color: unset!important">
                <article class="media">
                  <figure class="media-left">
                    <p class="image is-64x64"> <img src="/img/icons/web.png"> </p>
                  </figure>
                  <div class="media-content">
                    <div class="content">
                      <p> <strong>Web Page</strong> <br> kpgts2020.com </p>
                    </div>
                  </div>
                </article>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      @include('inc.footer')
    </footer>
  
  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
  <script src="/js/navbar.js"></script>
  <script type="text/javascript">
    function animate1(el) {
      var dx = $(window).width() - parseInt($(el).css('left'));
      $(el).animate({
        left: '+='+dx+'px'
      },Math.floor(Math.random()*10+(dx/10))*1000,'linear', function() {
        $(el).css('left', -1*$(el).width());
        animate1(el);
      });
    }
    $('.cloud-1').css('left', Math.floor(Math.random()*($(window).width()-50)) + 'px');
    $('.cloud-2').css('left', Math.floor(Math.random()*($(window).width()-50)) + 'px');
    $('.cloud-3').css('left', Math.floor(Math.random()*($(window).width()-50)) + 'px');
    animate1('.cloud-1');
    animate1('.cloud-2');
    animate1('.cloud-3');
  </script>

</html>
