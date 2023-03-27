<link rel="stylesheet" href="{{ asset('/assets/css/main/app.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/main/app-dark.css') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('/assets/images/logo/favicon.png') }}" type="image/png">    
<link rel="stylesheet" href="{{ asset('/assets/css/shared/iconly.css') }}">

<aside>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="/dashboard-plp"><span>Dashboard PLP</span></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item {{ ($title === "dashboard-plp" ? 'active' : '') }} ">
                <a href="/dashboard-plp" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard PLP</span>
                </a>
            </li>

            <li
                class="sidebar-item  has-sub {{ ($title === "tambah-jadwal-plp" || $title === "jadwal-berlangsung-plp" || $title === "jadwal-mendatang-plp" || $title === "jadwal-riwayat-plp" ? 'active' : '') }}">
                <a href="#" class='sidebar-link'>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Jadwal Tes</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item {{ ($title === "tambah-jadwal-plp" ? 'active' : '') }}">
                        <a href="/tambah-jadwal-plp">Tambah Jadwal</a>
                    </li>
                    <li class="submenu-item {{ ($title === "jadwal-berlangsung-plp" ? 'active' : '') }}">
                        <a href="/jadwal-berlangsung-plp">Berlangsung</a>
                    </li>
                    <li class="submenu-item {{ ($title === "jadwal-mendatang-plp" ? 'active' : '') }}">
                        <a href="/jadwal-mendatang-plp">Mendatang</a>
                    </li>
                    <li class="submenu-item {{ ($title === "jadwal-riwayat-plp" ? 'active' : '') }}">
                        <a href="jadwal-riwayat-plp">Riwayat</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item {{ ($title === "olah-nilai-plp" ? 'active' : '') }} ">
                <a href="/olah-nilai-plp" class='sidebar-link'>
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span>Olah Nilai</span>
                </a>
            </li>

            <li
                class="sidebar-item {{ ($title === "cetak" ? 'active' : '') }} ">
                <a href="/cetak" class='sidebar-link'>
                    <i class="fa-solid fa-print"></i>
                    <span>Cetak</span>
                </a>
            </li>

            <li
                class="sidebar-item">
                <a href="/" class='sidebar-link'>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </li>
            
        </ul>
    </div>
    
</aside>