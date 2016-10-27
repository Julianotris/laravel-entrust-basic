@extends('layouts.app')
@section('title') Dashboard Inventori App @endsection

@section('main-content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Inventori Apps</a> </div>
    <h1>Inventori Aplikasi</h1>
  </div>

  <div class="container-fluid">
  <!--Action boxes-->
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb" id="user-sistem-box"> <a href="javascript:void(0);"> <i class="icon-user"></i> <span class="label label-important">20</span> User System</a> </li>
        <li class="bg_ly" id="total-aplikasi-box"> <a href="javascript:void(0);"> <i class="icon-inbox"></i><span class="label label-success">{{ $count_apps->count_application }}</span> Aplikasi </a> </li>
        <li class="bg_lo" id="total-jenis-box"> <a href="javascript:void(0);"> <i class="icon-th"></i><span class="label label-warning">{{ $count_apps->count_jenis }}</span> Jenis</a> </li>
        <li class="bg_ls" id="total-status-box"> <a href="javascript:void(0);"> <i class="icon-fullscreen"><span class="label label-info">{{ $count_apps->count_status }}</span></i> Status</a> </li>
        <li class="bg_lo" id="total-skpd-box"> <a href="javascript:void(0);"> <i class="icon-tint"></i><span class="label label-success">{{ $count_skpd }}</span> SKPD</a> </li>
        <li class="bg_lb" id="total-pengadaan-box"> <a href="javascript:void(0);" class="not-active"> <i class="icon-pencil"></i><span class="label label-warning">{{ $count_apps->total_pengadaan }}</span>Total Nilai Pengadaan</a> </li>

      </ul>
    </div>
  <!--End-Action boxes-->

    <hr>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Inventori aplikasi table</h5>
          </div>

          {{-- select filter box --}}
          <div id="filter-box">
            <div class="widget-content nopadding">
              <form action="#" class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">Jenis</label>
                  <div class="controls">
                    <select class="" id="select-jenis">
                      <option value="web">Web</option>
                      <option value="desktop">Desktop</option>
                      <option value="multiplatform">Multiplatform</option>
                      <option value="mobile">Mobile</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Status</label>
                  <div class="controls">
                    <select class="" id="select-status">
                      <option value="diujicobakan">Diujicobakan</option>
                      <option value="dibangun">Dibangun</option>
                      <option value="dioperasikan">Dioperasikan</option>
                      <option value="direncanakan">Direncanakan</option>
                    </select>
                  </div>
                </div>
              </form>
              <br>
            </div>
          </div>
          {{-- end select filter box --}}

          <div class="widget-content nopadding" id="div-table-dynamic">
            <table class="table table-bordered table-striped" id="table-aplikasi">

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
    $("#li-dashboard-inventori").addClass('active');

    function clearTable() {
      $("#table-aplikasi").DataTable().destroy();
      $("#table-aplikasi").empty();
      $("#filter-box").empty();
    }

    //initial
    var tableDynamic = $("#table-aplikasi").DataTable({
       processing: true,
            serverSide: true,
            destroy:true,
            ajax: '{{ url("datatable/aplikasi-bandung") }}',
            columns: [
                { data: 'name', name: 'name', title: 'Nama Aplikasi' },
                { data: 'jenis', name: 'jenis', title: 'Jenis' },
                { data: 'status', name: 'status', title: "Status"  },
                { data: 'nilai_pengadaan', name: 'nilai_pengadaan', title: 'Nilai Pengadaan' }
            ]
    });

    $('#select-jenis').on('change', function () {
      tableDynamic.columns(1).search( this.value ).draw();
    } );
    $('#select-status').on('change', function () {
      tableDynamic.columns(2).search( this.value ).draw();
    } );

    //end initial

    // total user
    $("#user-sistem-box").click(function() {
      clearTable();
      var tableDynamic = $("#table-aplikasi").DataTable({
         processing: true,
              serverSide: true,
              destroy:true,
              ajax: '{{ url("datatable/inventori-user-aplikasi") }}',
              columns: [
                { data: 'id', name: 'id', title: 'Id' },
                { data: 'username', name: 'username', title: 'Username' },
                { data: 'created_at', name: 'created_at', title: 'Created at' }
              ]
      });
    });

    // total aplikasi table
    $("#total-aplikasi-box").click(function() {
      clearTable();
      var tableDynamic = $("#table-aplikasi").DataTable({
         processing: true,
              serverSide: true,
              destroy:true,
              ajax: '{{ url("datatable/aplikasi-bandung") }}',
              columns: [
                { data: 'name', name: 'name', title: 'Nama Aplikasi' },
                { data: 'jenis', name: 'jenis', title: 'Jenis' },
                { data: 'status', name: 'status', title: "Status"  },
                { data: 'nilai_pengadaan', name: 'nilai_pengadaan', title: 'Nilai Pengadaan' }
              ]
      });
    });

    // jenis aplikasi
    $("#total-jenis-box").click(function() {
      clearTable();
      var tableDynamic = $("#table-aplikasi").DataTable({
         processing: true,
              serverSide: true,
              destroy:true,
              ajax: '{{ url("datatable/inventori-jenis-aplikasi") }}',
              columns: [
                { data: 'jenis', name: 'jenis', title: "Jenis" },
                { data: 'jumlah_aplikasi', name: 'jumlah_aplikasi', title: "Jumlah Aplikasi" },
                { data: 'nilai_pengadaan', name: 'nilai_pengadaan', title: "Nilai Pengadaan" }
              ]
      });
    });

    // status aplikasi
    $("#total-status-box").click(function() {
      clearTable();
      var tableDynamic = $("#table-aplikasi").DataTable({
         processing: true,
              serverSide: true,
              destroy:true,
              ajax: '{{ url("datatable/inventori-status-aplikasi") }}',
              columns: [
                { data: 'status', name: 'status', title: "Status" },
                { data: 'jumlah_aplikasi', name: 'jumlah_aplikasi', title: "Jumlah Aplikasi" },
                { data: 'nilai_pengadaan', name: 'nilai_pengadaan', title: "Nilai Pengadaan" }
              ]
      });
    });

    // list SKPD
    $("#total-skpd-box").click(function() {
      clearTable();
      var tableDynamic = $("#table-aplikasi").DataTable({
         processing: true,
              serverSide: true,
              destroy:true,
              ajax: '{{ url("datatable/skpd-aplikasi") }}',
              columns: [
                { data: 'name', name: 'name', title: "Nama SKPD" },
                { data: 'singkatan', name: 'singkatan', title: "Singkatan" },
                { data: 'jenis_lembaga', name: 'jenis_lembaga', title: "Jenis Lembaga" }
              ]
      });
    });

  });
</script>
@endsection

