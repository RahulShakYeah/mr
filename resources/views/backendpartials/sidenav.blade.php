<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('backend/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/img/avatar2.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('home')}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-copy"></i>&nbsp;&nbsp;
                        <p>
                            Product
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('product.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Product List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('productslider.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Product Slider List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('productdetail.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Product Detail List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope"></i>&nbsp;&nbsp;
                        <p>
                            Contact Message
                            <?php
                            use App\Models\Contact;
                            $allMessage = Contact::count();
                            ?>
                        </p>
                        <span class="right badge badge-danger" id="msg_number">{{$allMessage}}</span>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('contact.showall')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Message</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-video"></i>&nbsp;&nbsp;
                        <p>Tutorials</p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('tutorial.show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Tutorial list</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-sitemap"></i>&nbsp;&nbsp;
                        <p>Services</p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('service.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show services list</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-image"></i>&nbsp;&nbsp;
                        <p>Home Slider</p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('slider.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show photo list</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-briefcase"></i>&nbsp;&nbsp;
                        <p>Jobs</p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('jobs.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show jobs list</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-user"></i>&nbsp;&nbsp;
                        <?php
                        use App\Models\Application;
                        $allApplicants = Application::count();
                        ?>
                        <p>Applicants</p>
                        <span class="right badge badge-danger" id="msg_number">{{$allApplicants}}</span>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('applicant.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show applicants list</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-building"></i>&nbsp;&nbsp;
                        <p>Our Team</p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('team.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show team list</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">Settings</li>

                <li class="nav-item">
                    <a href="{{route('register')}}" class="nav-link">
                        <i class="fa fa-user-plus"></i>&nbsp;&nbsp;
                        <p>Add User</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('front.main')}}" target="__blank" class="nav-link">
                        <i class="fa fa-globe"></i>&nbsp;&nbsp;&nbsp;
                        <p>Open site</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('all.users')}}" class="nav-link">
                        <i class="fa fa-eye"></i>&nbsp;&nbsp;
                        <p>View all users</p>
                    </a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('mailconfig.index')}}" class="nav-link">--}}
{{--                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;--}}
{{--                        <p>Mail Configuration</p>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>&nbsp;&nbsp;
                        <p>Logout</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
