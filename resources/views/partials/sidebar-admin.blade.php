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
                <a href="/dashboard-plp"><span>Dashboard Admin</span></a>
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
                class="sidebar-item {{ ($title === "interpreter" || $title === 'tambah-interpreter' ? 'active' : '') }} ">
                <a href="/interpreter" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Interpreter</span>
                </a>
            </li>

            <li
                class="sidebar-item {{ ($title === "plp" || $title === 'tambah-plp' ? 'active' : '') }} ">
                <a href="/plp" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>PLP</span>
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