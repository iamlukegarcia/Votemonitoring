<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button"
            data-toggle="minimize">
            <span class="mdi mdi-chevron-double-left"></span>
        </button>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            
        </div>
        <ul class="navbar-nav">
            <li class="nav-item nav-logout d-none d-md-block mr-3">
            <p class="nav-link">DATA LAST REFRESHED: <span class="nav-link" id="datetime" > </span> </p>
            </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-logout d-none d-md-block mr-3">
                <a class="nav-link" href="#">Status</a>
            </li>
            
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-home-circle"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

<script>
    // Get current date and time
    var now = new Date();
    var datetime = now.toLocaleString();
  
    // Insert date and time into HTML
    document.getElementById("datetime").innerHTML = datetime;
  </script>