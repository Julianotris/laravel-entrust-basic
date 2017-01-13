<!DOCTYPE html>
<html lang="en">

<head>
        <title>Sembako Online</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href={{ URL::asset('metrix-template/css/bootstrap.min.css') }} />
        <link rel="stylesheet" href={{ URL::asset('metrix-template/css/bootstrap-responsive.min.css') }} />
        <link rel="stylesheet" href={{ URL::asset('metrix-template/css/matrix-login.css')}} />
        <link href={{ URL::asset('metrix-template/font-awesome/css/font-awesome.css" rel="stylesheet') }} />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">
            <form id="loginform" class="form-vertical" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                 <div class="control-group normal_text"> <h3><img src={{URL::asset('metrix-template/img/logo.png')}}  alt="Sembako Online" width="15%" height="15%" /> &nbsp;Sembako Online</h3></div>
                <div class="control-group" {{ $errors->has('email') ? ' error' : '' }}>
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Email" name="email" value="{{ old('email') }}"/>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <center><strong><span style="color:#c1e699">{{ $errors->first('email') }}</strong></span></center>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="control-group" {{ $errors->has('email') ? ' error' : '' }}>
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" />
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <center><strong><span style="color:#decf80">{{ $errors->first('password') }}</span></strong></center>
                        </span>
                    @endif
                </div>
                <div class="control">
                    <div class="controls">
                        <center><input type="checkbox" name="remember"> Remember Me </center>
                        <br>
                        <center><button type="submit" class="btn btn-success" /> Login</button></center>
                    </div>
                </div>
                <div class="form-actions">
                    <center><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></center>
                    {{-- <span class="pull-right"><button type="submit" class="btn btn-success" /> Login</button></span> --}}
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
                <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Recover</a></span>
                </div>
            </form>
        </div>

        <script src={{ URL::asset('metrix-template/js/jquery.min.js')}}></script>
        <script src={{ URL::asset('metrix-template/js/matrix.login.js')}}></script>
    </body>

</html>
