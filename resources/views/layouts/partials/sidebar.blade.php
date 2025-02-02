    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="" target="_blank">
                {{-- <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> --}}
                <span class="ms-1 font-weight-bold text-white">Hallomoms.</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white {{ Route::is('dashboard') ? 'active bg-gradient-primary' : '' }}"
                        href="/dashboard ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Route::is('admin.article') ? 'active bg-gradient-primary' : '' }}"
                        href="/article-admin">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Article</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Route::is('admin.team') ? 'active bg-gradient-primary' : '' }} "
                        href="/team-admin">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Team</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  {{ Route::is('admin.feedback') ? 'active bg-gradient-primary' : '' }} "
                        href="/feedback-admin">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div>
                        <span class="nav-link-text ms-1">Feedback</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Route::is('admin.pregnant') ? 'active bg-gradient-primary' : '' }} "
                        href="/pregnant-admin">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>
                        <span class="nav-link-text ms-1">Pregnant</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  {{ Route::is('admin.breastfeeding') ? 'active bg-gradient-primary' : '' }}"
                        href="/breastfeeding-admin">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>
                        <span class="nav-link-text ms-1">Breastfeeding</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Action
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="/logout">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">logout</i>
                        </div>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
