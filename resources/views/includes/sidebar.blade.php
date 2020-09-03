
     <!-- ========== Left Sidebar Start ========== -->
     <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="/home">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="badge badge-success badge-pill float-right">4</span>
                            <span> Dashboard </span>
                        </a>
                        {{-- <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li> <a href="dashboard-2.html">Dashboard 2</a></li>
                        </ul> --}}
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-airplay"></i>
                            <span>  Asset Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="/search/assets#!">Assets List</a></li>
                            <li><a href="/assignable#!">Assignable Assets</a></li>
                            <li><a href="/checkOuts#!">Assigned Assets</a></li>
                            {{-- <li><a href="/checkOuts">Issued Items</a></li> --}}
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class=" fas fa-calendar-alt"></i>
                            <span>  Reports</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="/history#!">History</a></li>
                            <li><a href="{{ route('active') }}"> Active</a></li>
                            <li><a href="/scrap#!"> Scrap</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fas fa-user-friends"></i>
                            <span>  Employees</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="/search/employees#!">Employees List</a></li>
                        </ul>
                    </li>
                    @if ( Auth()->user()->role == 1 )
                    <li>
                        <a href="javascript: void(0);">
                            <i class=" fas fa-user-lock"></i>
                            <span>  User Management</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="/users#!">Users List</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="javascript: void(0);">
                            <i class="fas fa-file-import"></i>
                            <span>  Import Data</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="/import#!"> Import Employees</a></li>
                            <li><a href="{{ route('import.index') }}"> Import Assets</a></li>
                            <li><a href="{{ route('checkOut.import') }}"> Import Issued Assets</a></li>
                        </ul>
                    </li> 
                    @endif
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->