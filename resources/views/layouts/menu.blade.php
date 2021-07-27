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


