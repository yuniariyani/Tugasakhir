<li class="nav-item">
    <a href="{{ route('monitorings.index') }}"
       class="nav-link {{ Request::is('monitorings*') ? 'active' : '' }}">
        <p>Monitorings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('iklims.index') }}"
       class="nav-link {{ Request::is('iklims*') ? 'active' : '' }}">
        <p>Iklims</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masalahs.index') }}"
       class="nav-link {{ Request::is('masalahs*') ? 'active' : '' }}">
        <p>Masalahs</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('hasilPanens.index') }}"
       class="nav-link {{ Request::is('hasilPanens*') ? 'active' : '' }}">
        <p>Hasil Panens</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('riwayatPupuks.index') }}"
       class="nav-link {{ Request::is('riwayatPupuks*') ? 'active' : '' }}">
        <p>Riwayat Pupuks</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pendapatans.index') }}"
       class="nav-link {{ Request::is('pendapatans*') ? 'active' : '' }}">
        <p>Pendapatans</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('riwayatPenanganans.index') }}"
       class="nav-link {{ Request::is('riwayatPenanganans*') ? 'active' : '' }}">
        <p>Riwayat Penanganans</p>
    </a>
</li>


