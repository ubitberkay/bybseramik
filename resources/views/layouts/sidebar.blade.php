<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <a href="{{route('dashboard')}}" class="menu-title"
                   style="pointer-events: fill;cursor: pointer">Dashboard</a>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bxs-home'></i>
                        <span>Anasayfa</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>Boyutlar</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('boyut.index')}}">Listele</a></li>
                                <li><a href="{{route('boyut.create')}}">Ekle</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>Ürün Tipleri</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('type.index')}}">Listele</a></li>
                                <li><a href="{{route('type.create')}}">Ekle</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>Ürünler</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('urun.index')}}">Listele</a></li>
                                <li><a href="{{route('urun.create')}}">Ekle</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>Protiles Ürünler</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('protiles.index')}}">Listele</a></li>
                                <li><a href="{{route('protiles.create')}}">Ekle</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>Sliders</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('sliders.index')}}">Listele</a></li>
                                <li><a href="{{route('sliders.create')}}">Ekle</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                        <i class='bx bxs-info-circle'></i>
                        <span>Hakkımızda</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('genelbilgiler.edit',\App\Models\GenelBilgiler::first()->id) }}">
                                <span>Genel Bilgiler</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('iletisim_info.edit', \App\Models\IletisimInfo::first()->id)}}">
                        <i class='bx bxs-contact'></i>
                        <span>İletişim</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('messages.index')}}">
                        <i class='bx bxs-message'></i>
                        <span>Mesajlar</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
