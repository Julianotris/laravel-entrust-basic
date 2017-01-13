<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="li-sidebar-dashboard" id="li-dashboard-utama"><a href="{{ url('/test-dashboard') }}"><i class="icon icon-home"></i> <span>Dashboard Template</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-inventori"><a href="{{ url('/') }}"><i class="icon icon-th-list"></i> <span>MASTER PASAR</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-egratifikasi"><a href=" {{ url('/') }} "><i class="icon icon-th-list"></i> <span>MASTER KOMODITI</span></a> </li>
    <li class="li-sidebar-dashboard" id="li-dashboard-egratifikasi"><a href=" {{ url('/') }} "><i class="icon icon-th-list"></i> <span>HARGA SEMBAKO</span></a> </li>
    @role('superadmin')
    <li class="submenu li-sidebar-dashboard" id="li-dashboard-usermanagement"> <a href="#"><i class="icon icon-user"></i> <span>User Management</span> <span class="label label-important">3</span></a>
      <ul>
        <li class="li-sub-sidebar-dashboard" id="li-user"><a href="{{ url('/user-management') }}">User</a></li>
        <li class="li-sub-sidebar-dashboard" id="li-role"><a href="form-validation.html">Role</a></li>
        <li class="li-sub-sidebar-dashboard" id="li-permission"><a href="form-wizard.html">Permission</a></li>
      </ul>
    </li>
    @endrole
  </ul>
</div>