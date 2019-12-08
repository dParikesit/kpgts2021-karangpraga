          <aside class="menu">
            <h5 class="menu-label"> Hai, {{ Auth::user()->name }} </h5>
            <ul class="menu-list">
              <li> <a href="/admin/dashboard"> Dashboard </a> </li>
              <li> <a href="/admin/post"> Berita </a> </li>
              <li> <a href="/admin/user"> Peserta </a> </li>
              <li> <a href="/admin/daftar-ulang"> Daftar Ulang </a> </li>
              <li> <a href="/admin/change-password"> Ganti Password </a> </li>
            </ul>
          </aside>
