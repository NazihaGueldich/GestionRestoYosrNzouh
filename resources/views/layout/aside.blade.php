<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('categorie.index') }}">
                <i class="ti-tag menu-icon"></i>
                <span class="menu-title">Catégories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('parameter.index') }}">
                <i class="ti-settings  menu-icon"></i>
                <span class="menu-title">Parameter</span>
            </a>
        </li>
    </ul>
</nav>