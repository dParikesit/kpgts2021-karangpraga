      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <img src="/img/logo-square-putih.png" alt="Logo_KPGTS2020" width="70px">
          </a>

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
            @if (Auth::user()->isAdmin())
            <a class="navbar-item" href="/admin/dashboard">
              <span> Dashboard </span>
            </a>
            <a class="navbar-item" href="/admin/logout">
              <span> Logout </span>
            </a>
            @endif
            @if (!Auth::user()->isAdmin())
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
