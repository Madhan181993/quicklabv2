            <!-- Sidebar -->
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
                <!-- Bootstrap List Group -->
                <ul class="list-group">

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
                    <a href="{{ url('admin/tax') }}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center ">
                            <span class="fa fa-sticky-note fa-fw mr-3"></span>
                            <span class="menu-collapsed">Tax Management</span>
                        </div>
                    </a>

                    <a href="{{ url('admin/products') }}" class="bg-dark list-group-item list-group-item-action ">
                        <div class="d-flex w-100 justify-content-start align-items-center  ">
                            <span class="fa fa-shopping-basket fa-fw mr-3"></span>
                            <span class="menu-collapsed">Products</span>
                        </div>
                    </a>
                    <a href="{{ url('admin/categories') }}" class="bg-dark list-group-item list-group-item-action">
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

                    <a href="{{ url('admin/settings') }}" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-cog fa-fw mr-3"></span>
                            <span class="menu-collapsed">Settings</span>
                        </div>
                    </a>
                </ul><!-- List Group END-->
            </div><!-- sidebar-container END -->