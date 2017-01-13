<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('metrix-template/img/logo.png')}}" />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/bootstrap.min.css')}} />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/bootstrap-responsive.min.css')}} />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/matrix-style.css')}} />
<link rel="stylesheet" href={{ URL::asset('metrix-template/css/matrix-media.css')}} />
<link href={{ URL::asset('metrix-template/font-awesome/css/font-awesome.css')}} rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Under construction</h5>
        </div>
        <div class="widget-content">
          <div class="error_ex">
            <h1>Wait !!!</h1>
            <img src="{{ URL::asset('metrix-template/img/inprogress.jpeg')}}"/>
            <h3>Fitur ini sedang didevelop</h3>
            <p>Mohon bersabar</p>
            <a class="btn btn-warning btn-big"  href="{{ url('/') }}">Back to Home</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

<script src={{ URL::asset('metrix-template/js/bootstrap.min.js')}}></script>