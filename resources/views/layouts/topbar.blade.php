<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('/assets/images/byb.png') }}" style="width: 25%">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('/assets/images/byb.png') }}" style="width: 25%">
                    </span>
                </a>

                <a href="{{ route('index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('/assets/images/byb.png') }}" style="width: 25%">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('/assets/images/byb.png') }}" style="width: 25%">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>


        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span
                        class="d-none d-xl-inline-block ms-1">{{ isset(Auth::user()->name) ? ucfirst(Auth::user()->name) :"" }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    {{--<a class="dropdown-item" href="{{ isset($profil) ? route('users.profile') :"" }}"><i
                            class="bx bx-user font-size-16 align-middle me-1"></i> <span>Profil</span></a>
                    <div class="dropdown-divider"></div>--}}
                    <a class="dropdown-item text-danger" href="javascript:void();"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                        <span>Oturumu Kapat</span></a>
                    <form id="logout-form" action="{{  route('logout')  }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            {{--<div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class='bx bx-sun'></i>
                </button>
            </div>--}}
        </div>
    </div>
</header>
