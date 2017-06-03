<aside class="left-panel">

    <!-- brand -->
    <div class="logo">
        <a href="index.html" class="logo-expanded">
            <i class="ion-social-buffer"></i>
            <span class="nav-label">Velonic</span>
        </a>
    </div>
    <!-- / brand -->

    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="active"><a href="{{url('/user    ')}}"><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">蹦啊蹦</span></a></li>
            <li class="has-submenu">
                <a href="javascript:;"><i class="zmdi zmdi-format-underlined"></i> <span class="nav-label">用户管理</span><span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/users') }}">用户列表</a></li>
                </ul>
            </li>

        </ul>
    </nav>

</aside>