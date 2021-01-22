

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div class="h-100">

                <div class="user-wid text-center py-4">
                    <div class="user-img">
                        <img src="{{asset('dashboard_assets/avater.svg')}}" alt="" class="avatar-md mx-auto rounded-circle">
                    </div>

                    <div class="mt-3">

                        <a href="#" class="text-dark font-weight-medium font-size-16">{{auth()->user()->name}}</a>
                        <p class="text-body mt-1 mb-0 font-size-13">{{auth()->user()->userable_type}}</p>

                    </div>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="{{route('admin.home')}}" class="waves-effect">
                                <i class="mdi mdi-airplay"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>





                        @if(auth()->user()->user_level === 'Super Admin')

                            <li class="accordion">
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-library-books"></i>
                                    <span>Category</span>
                                </a>

                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('add.Product.categories')}}">Add Category</a></li>
                                    <li><a href="{{route('view.Product.categories')}}">View Category</a></li>
                                </ul>
                            </li>


                            <li class="accordion">
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-tag"></i>
                                    <span>Tags</span>
                                </a>

                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('add.tags')}}">Add Tag</a></li>
                                    <li><a href="{{route('view.tags')}}">View Tag</a></li>
                                </ul>
                            </li>





                            <li class="accordion">
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    <span>Agents</span>
                                </a>

                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.add.agents')}}">Create Agent</a></li>
                                    <li><a href="{{route('view.all.agents')}}">View Agent</a></li>
                                    <li><a href="{{route('admin.assign.agents')}}">Assign Agent</a></li>
                                </ul>
                            </li>
                        @endif

                        @if(auth()->user()->user_level === 'Super Admin' || auth()->user()->user_level === 'Admin')

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-package"></i>
                                    <span>Products</span>
                                </a>

                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('add.Product')}}">Add Product</a></li>
                                    <li><a href="{{route('view.Product')}}">View Products</a></li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-label-outline"></i>
                                    <span>Orders</span>
                                </a>

                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('view.orders')}}">All Orders</a></li>
                                </ul>
                            </li>

                        @endif

                        @if(auth()->user()->user_level === 'Super Admin')

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    <span>User Account</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.view.user')}}">Profile</a></li>
                                    <li><a href="{{route('admin.view.change.password')}}">Change Password</a></li>
                                    <li><a href="{{route('admin.view.all.user')}}">All User</a></li>
                                    <li><a href="{{route('admin.add.users')}}">Add User</a></li>
                                </ul>
                            </li>
                        @endif


                        <li><a href="{{route('logout.admin')}}"><i class="mdi mdi-logout"></i> <span>Logout</span></a></li>








                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->





