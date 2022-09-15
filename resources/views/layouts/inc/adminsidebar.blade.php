            <!-- Sidebar -->
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
                <!-- Bootstrap List Group -->
                <ul class="list-group">
                    <!-- Separator with title -->
                    <!-- <li
                        class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                        <small>MAIN MENU</small>
                    </li> -->
                    <!-- /END Separator -->
                    <!-- <a href="#submenu2" data-toggle="collapse" aria-expanded="false"
                        class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-dashboard fa-fw mr-3"></span>
                            <span class="menu-collapsed">Dashboard</span>
                            <span class="submenu-icon ml-auto"></span>
                        </div>
                    </a> -->
                    <!-- Menu with submenu -->
                    <!-- <a href="#submenu1" data-toggle="collapse" aria-expanded="false"
                        class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-dashboard fa-fw mr-3"></span>
                            <span class="menu-collapsed">Dashboard</span>
                            <span class="submenu-icon ml-auto"></span>
                        </div>
                    </a> -->
                    <!-- Submenu content -->
                    <!-- <div id='submenu1' class="collapse sidebar-submenu">
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Chahgag</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Reports</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Tables</span>
                        </a>
                    </div> -->
                    <a href="{{ url('profile') }}" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-user fa-fw mr-3"></span>
                            <span class="menu-collapsed">Profile</span>
                            <!-- <span class="submenu-icon ml-auto"></span> -->
                        </div>
                    </a>
                    <a href="{{ url('admin/company-settings') }}" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-building fa-fw mr-3"></span>
                            <span class="menu-collapsed">Company</span>
                            <!-- <span class="submenu-icon ml-auto"></span> -->
                        </div>
                    </a>
                    <a href="{{ url('admin/users') }}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-users fa-fw mr-3"></span>
                            <span class="menu-collapsed">User Management</span>
                        </div>
                    </a>
                    <a href="#" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center ">
                            <span class="fa fa-map-marker fa-fw mr-3"></span>
                            <span class="menu-collapsed">Location</span>
                        </div>
                    </a>
                    <a href="{{ url('tax') }}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center ">
                            <span class="fa fa-sticky-note fa-fw mr-3"></span>
                            <span class="menu-collapsed">Tax Management</span>
                        </div>
                    </a>
                    <!-- Submenu content -->
                    <!-- <div id='submenu2' class="collapse sidebar-submenu">
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Settings</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Password</span>
                        </a>
                    </div> -->

                    <a href="{{ url('products') }}" class="bg-dark list-group-item list-group-item-action ">
                        <div class="d-flex w-100 justify-content-start align-items-center  ">
                            <span class="fa fa-shopping-basket fa-fw mr-3"></span>
                            <span class="menu-collapsed">Products</span>
                        </div>
                    </a>
                    <a href="{{ url('categories') }}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-object-group fa-fw mr-3"></span>
                            <span class="menu-collapsed">Categories</span>
                        </div>
                    </a>
                    </a>
                    <a href="{{ url('categories') }}" class="bg-dark list-group-item list-group-item-action ">
                        <div class="d-flex w-100 justify-content-start align-items-center ">
                            <span class="fa fa-book fa-fw mr-3"></span>
                            <span class="menu-collapsed">Catalogue</span>
                        </div>
                    </a>

                    <a href="{{ url('settings') }}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-cog fa-fw mr-3"></span>
                            <span class="menu-collapsed">Settings</span>
                        </div>
                    </a>
                    <!-- <a href="#" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-envelope-o fa-fw mr-3"></span>
                            <span class="menu-collapsed">Messages <span
                                    class="badge badge-pill badge-primary ml-2">5</span></span>
                        </div>
                    </a> -->
                    <!-- Separator without title -->
                    <!-- <li class="list-group-item  menu-collapsed menu-subhead"></li> -->
                    <!-- /END Separator -->
                    <!-- <a href="#" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-question fa-fw mr-3"></span>
                            <span class="menu-collapsed">Help</span>
                        </div>
                    </a> -->
                    <!-- <a href="#top" data-toggle="sidebar-colapse"
                        class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span id="collapse-icon"><i class="fas fa-angle-double-left"></i>&nbsp;&nbsp;&nbsp;</span>
                            <span id="collapse-text" class="menu-collapsed">Collapse</span>
                        </div>
                    </a> -->
                </ul><!-- List Group END-->
            </div><!-- sidebar-container END -->