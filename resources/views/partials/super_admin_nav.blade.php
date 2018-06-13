<aside class="sidebar">
    <div class="scrollbar-inner">
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                <div>
                    <div class="user__name">Malinda Hollaway</div>
                    <div class="user__email">malinda-h@gmail.com</div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">View Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </div>

        <ul class="navigation">
            <li class="navigation__active"><a href="{{ url('/dashboard') }}"><i class="zmdi zmdi-home"></i> Home</a></li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-view-week"></i> Crime Types</a>

                <ul>
                    <li><a href="hidden-sidebar.html">Add Crime Types</a></li>
                    <li><a href="boxed-layout.html">View Crimes Types</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-widgets"></i> Crimes</a>

                <ul>
                    <li><a href="hidden-sidebar.html">Report Crimes</a></li>
                    <li><a href="boxed-layout.html">Vehicles Involved</a></li>
                    <li><a href="boxed-layout.html">Persons Involved</a></li>
                    <li><a href="boxed-layout.html">View Crimes</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-view-list"></i> Police Posts</a>

                <ul>
                  <li><a href="html-table.html">Add Police Post</a></li>
                  <li><a href="data-table.html">View Police Posts</a></li>
                    <li><a href="html-table.html">Add Location</a></li>
                    <li><a href="data-table.html">View Locations</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-collection-text"></i> Staff</a>

                <ul>
                    <li><a href="{{ url('/add_staff') }}">Add Staff</a></li>
                    <li><a href="{{ url('/staff') }}">View staff</a></li>
                    <li><a href="form-validation.html"></a>Verify Staff</li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-swap-alt"></i> Notices</a>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-group-work"></i> Settings</a>
            </li>

        </ul>
    </div>
</aside>
