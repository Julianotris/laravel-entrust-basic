@extends('layouts.app')
@section('title') Dashboard WBS @endsection

@section('main-content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">WBS</a> </div>
    <h1>WBS</h1>
  </div>

  <div class="container-fluid">
  <!--Action boxes-->
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb" id="user-sistem-box"> <a href="javascript:void(0);"> <i class="icon-user"></i> <span class="label label-important">{{ $count_user }}</span> User System</a> </li>
        <li class="bg_ly" id="laporan-box"> <a href="javascript:void(0);"> <i class="icon-inbox"></i><span class="label label-success">{{ $count_laporan }}</span> Laporan </a> </li>
      </ul>
    </div>
  <!--End-Action boxes-->

    <hr>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5><div id="table-title">Tabel Laporan WBS</div></h5>
          </div>

          <div class="widget-content nopadding" id="div-table-dynamic">
            <table class="table table-bordered table-striped" id="table-wbs">

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
    $("#li-dashboard-wbs").addClass('active');

    function clearTable() {
      $("#table-wbs").DataTable().destroy();
      $("#table-wbs").empty();
      $("#filter-box").empty();
    }

    //initial
    // var tableDynamic = $("#table-wbs").DataTable({
    //   processing: true,
    //   serverSide: true,
    //   destroy:true,
    //   ajax: '{{ url("datatable/laporan-egratifikasi") }}',
    //         columns: [
    //             { data: 'nama_lengkap', name: 'nama_lengkap', title: 'Pelapor' },
    //             { data: 'peristiwa', name: 'peristiwa', title: 'Peristiwa' },
    //             { data: 'jenis', name: 'jenis', title: 'Jenis' },
    //             { data: 'harga', name: 'harga', title: 'Besaran' }
    //         ]
    // });
    //end initial


    // total laporan
    $("#user-sistem-box").click(function() {
      clearTable();
      $("#table-title").html('Tabel User Gratfikasi')
      var tableDynamic = $("#table-wbs").DataTable({
        processing: true,
        serverSide: true,
        destroy:true,
        ajax: '{{ url("datatable/user-wbs") }}',
        columns: [
          { data: 'username', name: 'username', title: 'Username' },
          { data: 'email', name: 'email', title: 'Email' }
        ]
      });
    });

    // total laporan by jenis
    // $("#total-jenis-box").click(function() {
    //   clearTable();
    //   $("#table-title").html('Tabel Jumlah Laporan by Jenis')
    //   var tableDynamic = $("#table-wbs").DataTable({
    //     processing: true,
    //     serverSide: true,
    //     destroy:true,
    //     ajax: '{{ url("datatable/count-jenis-laporan") }}',
    //     columns: [
    //       { data: 'jenis', name: 'default_gratifikasi_objek.jenis', title: 'Jenis Laporan' },
    //       { data: 'jumlah', name: 'jumlah', title: 'jumlah' }
    //     ]
    //   });
    // });

  });
</script>
@endsection