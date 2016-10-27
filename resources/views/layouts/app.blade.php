<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('metrix-template/img/logo.png')}}" />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/bootstrap.min.css')}} />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/bootstrap-responsive.min.css')}} />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/fullcalendar.css')}} />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/matrix-style.css')}} />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/matrix-media.css')}} />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/select2.css')}} />
<link href={{ URL::asset('metrix-template/font-awesome/css/font-awesome.css')}} rel="stylesheet" />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/jquery.gritter.css')}} />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/my-custom.css')}} />

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1>  <a href="dashboard.html">All Dashboard Apps</a></h1>
  {{-- <h4>ALL DASHBOARD</h4> --}}
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
@include('layouts.header-menu')
<!--close-top-serch-->

<!--sidebar-menu-->
@include('layouts.sidebar-menu')
<!--sidebar-menu-->

<!--main-container-part-->
@yield('main-content')
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> All Dashboard Bandung Aplication</div>
</div>

<!--end-Footer-part-->

<script src={{ URL::asset('metrix-template/js/excanvas.min.js')}}></script>
<script src={{ URL::asset('metrix-template/js/jquery.min.js')}}></script>
<script src={{ URL::asset('metrix-template/js/jquery.ui.custom.js')}}></script>
<script src={{ URL::asset('metrix-template/js/bootstrap.min.js')}}></script>

<script src={{ URL::asset('metrix-template/js/jquery.flot.min.js')}}></script>
<script src={{ URL::asset('metrix-template/js/jquery.flot.resize.min.js')}}></script>
<script src={{ URL::asset('metrix-template/js/jquery.peity.min.js')}}></script>
<script src={{ URL::asset('metrix-template/js/fullcalendar.min.js')}}></script>
<script src={{ URL::asset('metrix-template/js/matrix.js')}}></script>
{{-- <script src={{ URL::asset('metrix-template/js/matrix.dashboard.js')}}></script> --}}
<script src={{ URL::asset('metrix-template/js/jquery.gritter.min.js')}}></script>
{{-- <script src={{ URL::asset('metrix-template/js/matrix.interface.js')}}></script> --}}
<script src={{ URL::asset('metrix-template/js/matrix.chat.js')}}></script>
<script src={{ URL::asset('metrix-template/js/jquery.validate.js')}}></script>
<script src={{ URL::asset('metrix-template/js/matrix.form_validation.js')}}></script>
<script src={{ URL::asset('metrix-template/js/jquery.wizard.js')}}></script>
<script src={{ URL::asset('metrix-template/js/jquery.uniform.js')}}></script>
<script src={{ URL::asset('metrix-template/js/select2.min.js')}}></script>
<script src={{ URL::asset('metrix-template/js/matrix.popover.js')}}></script>
{{-- <script src={{ URL::asset('metrix-template/js/jquery.dataTables.min.js')}}></script>
<script src={{ URL::asset('metrix-template/js/matrix.tables.js')}}></script> --}}

<!-- DataTables custom-->
<script src={{ URL::asset('metrix-template/js/choose-datatable.min.js')}}></script>


<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
<!-- App scripts -->
@yield('js-script')

</body>
</html>
