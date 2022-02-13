<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-section sidebar-user my-1">
            <div class="sidebar-section-body">
                <div class="media">
                    <a href="#" class="mr-3">
                        <img src="http://127.0.0.1:8000/assets/global_assets/images/placeholders/placeholder.jpg"
                            class="rounded-circle" alt="">
                    </a>

                    <div class="media-body">
                        <div class="font-weight-semibold">Victoria Baker</div>
                        <div class="font-size-sm line-height-sm opacity-50">
                            Senior developer
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                        title="Main"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-users"></i> <span>Users</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="#" class="nav-link active">All Users</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Teachers</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Students</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
