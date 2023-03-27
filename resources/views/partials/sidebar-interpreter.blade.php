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
                <a href="index.html"><span>Dashboard Inter</span></a>
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
                class="sidebar-item {{ ($title === "dashboard-interpreter" ? 'active' : '') }} ">
                <a href="/dashboard-interpreter" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard Interpreter</span>
                </a>
            </li>

            <li
                class="sidebar-item  has-sub {{ ($title === "jadwal-berlangsung-interpreter" || $title === "jadwal-mendatang-interpreter" || $title === "jadwal-riwayat-interpreter" ? 'active' : '') }}">
                <a href="#" class='sidebar-link'>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Jadwal Tes</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item {{ ($title === "jadwal-berlangsung-interpreter" ? 'active' : '') }}">
                        <a href="/jadwal-berlangsung-interpreter">Berlangsung</a>
                    </li>
                    <li class="submenu-item {{ ($title === "jadwal-mendatang-interpreter" ? 'active' : '') }}">
                        <a href="/jadwal-mendatang-interpreter">Mendatang</a>
                    </li>
                    <li class="submenu-item {{ ($title === "jadwal-riwayat-interpreter" ? 'active' : '') }}">
                        <a href="jadwal-riwayat-interpreter">Riwayat</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item {{ ($title === "olah-nilai" || $title === "tambah-nilai" ? 'active' : '') }} ">
                <a href="/olah-nilai" class='sidebar-link'>
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span>Olah Nilai</span>
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