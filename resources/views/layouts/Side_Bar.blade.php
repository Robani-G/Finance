<!-- Page Body Start-->
<div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <div class="sidebar-wrapper" data-layout="stroke-svg">
      <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" width="50px" height="50" src="../assets/images/logo.png" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
              <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li class="pin-title sidebar-main-title">
              <div>
                <h6>Pinned</h6>
              </div>
            </li>
            <li class="sidebar-main-title">
              <div>
                <h6 class="lan-1">አጠቃላይ</h6>
              </div>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="  #stroke-home"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="  #fill-home"></use>
                </svg><span >ዳሽቦርድ</span></a>
              <ul class="sidebar-submenu">
                <li><a href="index.html">Default</a></li>
                <li><a href="dashboard-02.html">Ecommerce</a></li>
                <li><a href="dashboard-03.html">Project</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="  #stroke-home"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="  #fill-home"></use>
                </svg><span >ካምፓኒዎች</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{route("Admin.Company.Create")}}">መመዝገቢያ </a></li>
                <li><a href="{{route("Admin.Company.Index")}}">ሁሉም የካምፓኒ ዝርዝር</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                  <use href="  #stroke-home"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="  #fill-home"></use>
                </svg><span >የፋይናንስ ጥያቄዎች</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{route("Admin.Requests.Create")}}">መመዝገቢያ </a></li>
                <li><a href="{{route("Admin.Requests.Index")}}">ሁሉም የፋይናንስ ጥያቄዎች ዝርዝር</a></li>
                <li><a href="{{route("Admin.Requests.ApproveIndex")}}">ማፅደቂያ</a></li>

              </ul>
            </li>

          </ul>
          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
      </nav>
    </div>
    <!-- Page Sidebar Ends-->
