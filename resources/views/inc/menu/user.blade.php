          <aside class="menu">
            <h5 class="menu-label"> Hai, {{ Auth::user()->name }} </h5>
            <ul class="menu-list">
              <li> <a href="/user/dashboard"> Dashboard </a> </li>
              <li> <a href="/user/registration"> Data Peserta </a> </li>
              <li> <a href="/user/change-password"> Ganti Password </a> </li>
              <li> <a href="/user/faq"> FAQ </a> </li>
            </ul>
          </aside>
