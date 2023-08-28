<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('admin/images//icon/booklogo-4.png')}}" alt="Papier" style="width: 80px;" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route ('books.index')}}">
                                <i class="fas fa-chart-bar"></i>Data Book</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ route ('books.create')}}">
                                <i class="fas fa-copy"></i>Create Book</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>User</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Account</a>
                                </li>
                                <li>
                                    <a href="button.html">Forget Password</a>
                                </li>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>