<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
        </li>
      <!-- Petani -->
        <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('kelompoktani', 'anggotatani') ? 'active treeview' : 'treeview' }}">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Petani
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kelompoktani" class="nav-link {{ request()->is('kelompoktani') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelompok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/anggotatani" class="nav-link {{ request()->is('anggotatani') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Anggota</p>
                </a>
              </li>
            </ul>
          </li>
        <!-- Perencanaan -->
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('targetcost', 'actualcost') ? 'active treeview' : 'treeview' }}">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Perencanaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/costtarget" class="nav-link {{ request()->is('targetcost') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Target Cost</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/costactual" class="nav-link {{ request()->is('actualcost') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actual Cost</p>
                </a>
              </li>
            </ul>
          </li>
        <!-- Monitoring Lahan -->
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('tanah', 'iklim', 'masalah') ? 'active treeview' : 'treeview' }}">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Monitoring Lahan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/tanah" class="nav-link {{ request()->is('tanah') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tanah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/iklim" class="nav-link {{ request()->is('iklim') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Iklim</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/masalah" class="nav-link {{ request()->is('masalah') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Masalah</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Produktivitas Lahan -->
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('hasilproduksi', 'pendapatan') ? 'active treeview' : 'treeview' }}">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Produktivitas Lahan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/hasilproduksi" class="nav-link {{ request()->is('hasilproduksi') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hasil Produksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pendapatan" class="nav-link {{ request()->is('pendapatan') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendapatan</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Riwayat Aktivitas -->
          <li class="nav-item {{ request()->is('pemupukan', 'penanganan') ? 'active treeview' : 'treeview' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Riwayat Aktivitas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ request()->is('pemupukan') ? 'active': '' }}">
                <a href="/pemupukan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemupukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penanganan" class="nav-link {{ request()->is('penanganan') ? 'active': '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penanganan</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- GAP Analysis -->
          <li class="nav-item">
            <a href="/gap" class="nav-link {{ request()->is('gap') ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                GAP Analysis
              </p>
            </a>
        </li>
          
    
    </ul>
</nav>