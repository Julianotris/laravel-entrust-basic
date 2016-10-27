@extends('layouts.app')
@section('title') User Data @endsection

@section('main-content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">User Management</a> </div>
    <h1>User Management</h1>
  </div>

  <div class="container-fluid">

    <hr>
    <a href="" class="btn btn-success"> Tambah User </a>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>User Table</h5>
          </div>

          {{-- select filter box --}}
          <div id="filter-box">
            <div class="widget-content nopadding">
              <form action="#" class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">Role</label>
                  <div class="controls">
                    <select class="" id="select-role">
                      <option value="superadmin">Superadmin</option>
                      <option value="admin">Admin</option>
                      <option value="guest">Guest</option>
                    </select>
                  </div>
                </div>
              </form>
              <br>
            </div>
          </div>
          {{-- end select filter box --}}

          <div class="widget-content nopadding" id="div-table-dynamic">
            <table class="table table-bordered table-striped" id="table-user">

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js-script')
<script type="text/javascript">
  $(document).ready(function(){

    $(".li-sidebar-dashboard").removeClass('active');
    $(".li-sub-sidebar-dashboard").removeClass('active');
    $("#li-dashboard-usermanagement").addClass('active open');
    $("#li-user").addClass('active');

    var tableDynamic = $("#table-user").DataTable({
       processing: true,
            serverSide: true,
            destroy:true,
            ajax: '{{ url("datatable/userdata") }}',
            columns: [
              { data: 'users_name', name: 'users.name', title: "Name" },
              { data: 'email', name: 'users.email', title: "Email" },
              { data: 'name', name: 'roles.name', title: "Role" },
              { data: 'action', name: 'action', title: "Action", searchable: false, orderable: false }
            ]
    });

    $('#select-role').on('change', function () {
      tableDynamic.columns(2).search( this.value ).draw();
    } );

  });
</script>
@endsection