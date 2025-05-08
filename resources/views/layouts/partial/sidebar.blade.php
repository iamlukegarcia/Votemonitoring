<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
                <div class="nav-profile-image">
                    <img src="{{ asset('assets_Admin\images\faces\BCLOGO.jpg') }}" alt="profile" />
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                    <span class="font-weight-semibold mb-1 mt-2 text-center">User Profile</span>
                </div>
            </a>
        </li>
        <li class="pt-2 pb-1">
            <span class="nav-item-head">Functions</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-compass-outline menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
         <li class="pt-2 pb-1">
            <span class="nav-item-head">Tables</span>
        </li>
        <li class="nav-item">
            <a class="nav-link"   href= "{{ route('barangays.index') }}">
                <i class="mdi mdi-table"></i>
                <span class="menu-title">BARANGAYS</span>
            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link"   href= "{{ route('Schools.index') }}">
                <i class="mdi mdi-table"></i>
                <span class="menu-title">POLLING AREA</span>
            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link"   href= "{{ route('Precincts.index') }}">
                <i class="mdi mdi-table"></i>
                <span class="menu-title">POLLING PRECINCT</span>
            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link"   href= "{{ route('Watchers.index') }}">
                <i class="mdi mdi-table"></i>
                <span class="menu-title">WATCHERS</span>
            </a>
        </li>

    </ul>
</nav>
