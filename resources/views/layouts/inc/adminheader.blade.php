<div class="container-fluid wrapper sticky">
    <div class="row"></div>
    <!-- Bootstrap NavBar -->
    <nav class="navbar navbar-expand-md">
        <button class="navbar-toggler navbar-toggler-right nav_btn" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('admin/images/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
            <span class="menu-collapsed"></span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item text-warning mt-2 mr-4">
                   <span style="color:white!important;">Logged in as : </span> {{ auth()->user()->userfirstname.' '.auth()->user()->userlastname }}
                </li>
                <li class="nav-item active">
                    <a class="nav-link nav-color" href="{{ url('/home') }}">Home </a>
                </li>
               <li class="nav-item">
                     <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> -->
                                    <a class="btn button-logout"  href="javascript:void(0);"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                <!-- </div> -->
                    <!-- <a class="nav-link nav-color" href="{{ route('logout') }}">Logout</a> -->
                </li>
               <!--   <li class="nav-item">
                    <a class="nav-link" href="#top">Pricing</a>
                </li> -->
                <!-- This menu is hidden in bigger devices with d-sm-none. 
           The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
                <li class="nav-item dropdown d-sm-block d-md-none">
                    <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </a>
                    <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                        <a class="dropdown-item" href="#top">hjsahgjsa</a>
                        <a class="dropdown-item" href="#top">Profile</a>
                        <a class="dropdown-item" href="#top">Tasks</a>
                        <a class="dropdown-item" href="#top">Etc ...</a>
                    </div>
                </li><!-- Smaller devices menu END -->
            </ul>
        </div>
    </nav><!-- NavBar END -->
</div>