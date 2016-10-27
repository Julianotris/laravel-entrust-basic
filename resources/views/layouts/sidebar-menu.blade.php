<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="li-sidebar-dashboard active" id="li-dashboard-utama"><a href="{{ url('/test-dashboard') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-inventori"><a href="{{ url('/dashboard/aplikasi-bandung') }}"><i class="icon icon-th-list"></i> <span>Dashboard Inventori Apps</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-egratifikasi"><a href=""><i class="icon icon-th-list"></i> <span>Dashboard Egratifikasi</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-aktaonline"><a href=""><i class="icon icon-th-list"></i> <span>Dashboard Akta Online</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-tjsl"><a href=""><i class="icon icon-th-list"></i> <span>Dashboard TJSL</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-erk"><a href=""><i class="icon icon-th-list"></i> <span>Dashboard ERK</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-hibah"><a href=""><i class="icon icon-th-list"></i> <span>Dashboard Hibah</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-pdkebersihan"><a href=""><i class="icon icon-th-list"></i> <span>Dashboard PDKebersihan</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-wbs"><a href=""><i class="icon icon-th-list"></i> <span>Dashboard WBS</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-asb"><a href=""><i class="icon icon-th-list"></i> <span>Dashboard ASB</span></a> </li>

    {{-- <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li> --}}
    {{-- <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li> --}}
    @role('superadmin')
    <li class="submenu li-sidebar-dashboard" id="li-dashboard-usermanagement"> <a href="#"><i class="icon icon-user"></i> <span>User Management</span> <span class="label label-important">3</span></a>
      <ul>
        <li class="li-sub-sidebar-dashboard" id="li-user"><a href="{{ url('/user-management') }}">User</a></li>
        <li class="li-sub-sidebar-dashboard" id="li-role"><a href="form-validation.html">Role</a></li>
        <li class="li-sub-sidebar-dashboard" id="li-permission"><a href="form-wizard.html">Permission</a></li>
      </ul>
    </li>
    @endrole
    {{-- <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li> --}}
    {{-- <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li> --}}
  </ul>
</div>