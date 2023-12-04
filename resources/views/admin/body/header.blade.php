  <header id="page-topbar" style="background-color:Gray;" >
                <div class="navbar-header" .bg-secondary.bg-gradient>
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-sm" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="logo-light" height="20">
                                </span>
                            </a>
                        </div>

    <button type="button" class="px-3 btn btn-sm font-size-24 header-item waves-effect" id="vertical-menu-btn">
        <i class="align-middle ri-menu-2-line"></i>
    </button>

    <!-- App Search-->
    <form class="app-search d-none d-lg-block">
        <div class="position-relative">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="ri-search-line"></span>
        </div>
    </form>


</div>

<div class="d-flex">



    <div class="dropdown d-none d-lg-inline-block ms-1">
        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
            <i class="ri-fullscreen-line"></i>
        </button>
    </div>

    @php
    $id = Auth::user()->id;
    $adminData = App\Models\User::find($id);
    @endphp

    <div class="dropdown d-inline-block user-dropdown">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle header-profile-user" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}"
                alt="Header Avatar">
            <span class="d-none d-xl-inline-block ms-1">{{ $adminData->name }}</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="align-middle ri-user-line me-1"></i> Profile</a>
            <a class="dropdown-item" href="{{ route('change.password') }}"><i class="align-middle ri-wallet-2-line me-1"></i> Change Password</a>
            <a class="dropdown-item d-block" href="#"><span class="mt-1 badge bg-success float-end">11</span><i class="align-middle ri-settings-2-line me-1"></i> Settings</a>
            <a class="dropdown-item" href="#"><i class="align-middle ri-lock-unlock-line me-1"></i> Lock screen</a>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="align-middle ri-shut-down-line me-1 text-danger"></i> Logout</a>
        </div>
    </div>



                    </div>
                </div>
            </header>
