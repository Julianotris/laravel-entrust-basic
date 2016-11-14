@extends('layouts.app')
@section('title') Dashboard Egratifikasi @endsection

@section('main-content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Egratifikasi</a> </div>
    <h1>Egratifikasi</h1>
  </div>

  <div class="container-fluid">
  <!--Action boxes-->
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb" id="user-sistem-box"> <a href="javascript:void(0);"> <i class="icon-user"></i> <span class="label label-important">{{ $count_user }}</span> User System</a> </li>
        <li class="bg_ly" id="laporan-box"> <a href="javascript:void(0);"> <i class="icon-inbox"></i><span class="label label-success">{{ $count_laporan }}</span> Laporan Gratifikasi </a> </li>
        <li class="bg_lo" id="total-jenis-box"> <a href="javascript:void(0);"> <i class="icon-th"></i><span class="label label-warning">{{ $count_jenis }}</span> Jenis</a> </li>
        <li class="bg_ls" id="total-status-box"> <a href="javascript:void(0);"> <i class="icon-fullscreen"><span class="label label-info">{{ $count_status }}</span></i> Status </a> </li>
      </ul>
    </div>
  <!--End-Action boxes-->

    <hr>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5><div id="table-title">Tabel Laporan Gratfikasi</div></h5>
          </div>

          <div class="widget-content nopadding" id="div-table-dynamic">
            <table class="table table-bordered table-striped" id="table-egratifikasi">

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
    $("#li-dashboard-egratifikasi").addClass('active');

    function clearTable() {
      $("#table-egratifikasi").DataTable().destroy();
      $("#table-egratifikasi").empty();
      $("#filter-box").empty();
    }

    //initial
    var tableDynamic = $("#table-egratifikasi").DataTable({
      processing: true,
      serverSide: true,
      destroy:true,
      ajax: '{{ url("datatable/laporan-egratifikasi") }}',
            columns: [
                { data: 'nama_lengkap', name: 'nama_lengkap', title: 'Pelapor' },
                { data: 'peristiwa', name: 'peristiwa', title: 'Peristiwa' },
                { data: 'jenis', name: 'jenis', title: 'Jenis' },
                { data: 'harga', name: 'harga', title: 'Besaran' },
                { data: 'tempat', name: 'tempat', title: 'Tempat' },
                { data: 'tanggal', name: 'tanggal', title: "Tanggal Penerimaan"  },
                { data: 'nama_pemberi', name: 'nama_pemberi', title: 'Nama Pemberi' },
                { data: 'alasan', name: 'alasan', title: 'Alasan' },
                { data: 'kronologi', name: 'kronologi', title: 'Kronologi' },
                { data: 'status_name', name: 'default_workflow_state.name', title: 'Status' }
            ]
    });
    //end initial


    // total laporan
    $("#user-sistem-box").click(function() {
      clearTable();
      $("#table-title").html('Tabel User Gratfikasi')
      var tableDynamic = $("#table-egratifikasi").DataTable({
        processing: true,
        serverSide: true,
        destroy:true,
        ajax: '{{ url("datatable/user-egratifikasi") }}',
        columns: [
          { data: 'username', name: 'username', title: 'Username' },
          { data: 'email', name: 'email', title: 'Email' }
        ]
      });
    });

    // total laporan
    $("#laporan-box").click(function() {
      clearTable();
      $("#table-title").html('Tabel Laporan Gratfikasi')
      var tableDynamic = $("#table-egratifikasi").DataTable({
        processing: true,
        serverSide: true,
        destroy:true,
        ajax: '{{ url("datatable/laporan-egratifikasi") }}',
        columns: [
          { data: 'nama_lengkap', name: 'nama_lengkap', title: 'Pelapor' },
          { data: 'peristiwa', name: 'peristiwa', title: 'Peristiwa' },
          { data: 'jenis', name: 'jenis', title: 'Jenis' },
          { data: 'harga', name: 'harga', title: 'Besaran' },
          { data: 'tempat', name: 'tempat', title: 'Tempat' },
          { data: 'tanggal', name: 'tanggal', title: "Tanggal Penerimaan"  },
          { data: 'nama_pemberi', name: 'nama_pemberi', title: 'Nama Pemberi' },
          { data: 'alasan', name: 'alasan', title: 'Alasan' },
          { data: 'kronologi', name: 'kronologi', title: 'Kronologi' },
          { data: 'status_name', name: 'default_workflow_state.name', title: 'Status' }
        ]
      });
    });

    // total laporan by status
    $("#total-status-box").click(function() {
      clearTable();
      $("#table-title").html('Tabel Jumlah Laporan by Status')
      var tableDynamic = $("#table-egratifikasi").DataTable({
        processing: true,
        serverSide: true,
        destroy:true,
        ajax: '{{ url("datatable/count-status-laporan") }}',
        columns: [
          { data: 'name', name: 'default_workflow_state.name', title: 'Status Laporan' },
          { data: 'jumlah', name: 'jumlah', title: 'jumlah' }
        ]
      });
    });

    // total laporan by jenis
    $("#total-jenis-box").click(function() {
      clearTable();
      $("#table-title").html('Tabel Jumlah Laporan by Jenis')
      var tableDynamic = $("#table-egratifikasi").DataTable({
        processing: true,
        serverSide: true,
        destroy:true,
        ajax: '{{ url("datatable/count-jenis-laporan") }}',
        columns: [
          { data: 'jenis', name: 'default_gratifikasi_objek.jenis', title: 'Jenis Laporan' },
          { data: 'jumlah', name: 'jumlah', title: 'jumlah' }
        ]
      });
    });

  });
</script>
@endsection