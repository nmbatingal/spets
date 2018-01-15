@extends('layouts.login')

@section('styles')
<link rel="stylesheet" href="{{ asset('bootstrap-select/css/bootstrap-select.min.css') }}">
@endsection

@section('content')
<!--Start Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"> 
            <a href="{{ route('welcome') }}" class="navbar-brand">
                IPCR
            </a>
        </div>

        @if ($errors->has('username'))
        @else
            <form class="form-login navbar-form navbar-right" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input id="username" type="text" class="form-control" name="username" placeholder="Username" autofocus="">
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control form-control-danger" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary pmd-ripple-effect">Login</button>
            </form>
        @endif
    </div>
</nav><!--End Nav bar -->

<div id="content" class="pmd-content inner-page">
    <div class="container-fluid full-width-container">
        <!-- Title -->
        <h1 class="section-title" id="services">
            <span>&nbsp;</span>
        </h1><!-- End Title -->
            
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
          <li><a href="index.html">&nbsp;</a></li>
        </ol><!--breadcrum end-->

        <div class="row">

            @if ($errors->has('username'))
                <!-- login panel start -->
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-card-section">
                        <div class="pmd-card card-default pmd-z-depth">
                            <div class="login-card">
                                <form class="form-login" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    
                                    <div class="pmd-card-body">
                                        @if ($errors->has('username'))
                                            <div role="alert" class="alert alert-danger alert-dismissible">
                                                <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
                                                <p class="text-center"><a href="javascript:void(0);" class="alert-link">Invalid username or password.</a></p>
                                            </div>
                                        @endif

                                        <div class="form-group pmd-textfield pmd-textfield-floating-label @if ($errors->has('username')) {{ 'has-error' }} @endif ">
                                            <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                                                <input id="username" type="text" class="form-control" name="username" >
                                            </div>
                                        </div>

                                        <div class="form-group pmd-textfield pmd-textfield-floating-label @if ($errors->has('username')) {{ 'has-error' }} @endif ">
                                            <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                                                <input id="password" type="password" class="form-control form-control-danger" name="password" >
                                            </div>
                                        </div>

                                            
                                    </div>

                                    <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
                                        <span class="pull-right forgot-password">
                                            <a href="javascript:void(0);">Forgot password?</a>
                                        </span>
                                        
                                        <br><br>

                                        <button class="btn pmd-ripple-effect btn-primary btn-block" type="submit">Login</button>

                                        <p class="redirection-link">Don't have an account? <a href="{{ route('login') }}" class="login-register">Sign Up</a>. </p>
                    
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- login panel end -->
            @else
                <!-- user register panel start -->
                <div class="col-md-6 col-md-offset-6">
                    <div class="pmd-card card-default pmd-z-depth">
                        <div class="login-card">
                            <div class="pmd-card-title card-header-border text-center">
                                <div class="loginlogo">
                                    <a href="javascript:void(0);"><img src="themes/images/logo-icon.png" alt="Logo"></a>
                                </div>
                                <h3>Sign Up <span>with <strong>PROPELLER</strong></span></h3>
                            </div>

                            @if(session('info'))
                                <div class="pmd-card-title">
                                    <div class="alert alert-success" role="alert">
                                        <p class="text-center">{{ session('info') }}</p>
                                    </div>
                                </div>
                            @endif

                            <form id="form-signup" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="pmd-card-body">

                                    <div class="group-fields clearfix row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield">
                                                <label class="control-label">Name</label>
                                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="First*" value="{{ @old('firstname') }}" required>
                                                <!-- <p class="help-block has-error">You can't leave this empty.</p> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield">
                                                <label class="control-label">&nbsp;</label>
                                                <input id="middlename" type="text" name="middlename" class="form-control" placeholder="Middle" value="{{ @old('middlename') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield">
                                                <label class="control-label">&nbsp;</label>
                                                <input id="lastname" type="text" name="lastname" class="form-control" placeholder="Last*" value="{{ @old('lastname') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="group-fields clearfix row">
                                        <div class="col-md-6">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label class="control-label pmd-input-group-label">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">person</i></div>
                                                    <input id="signup_username" type="text" name="username" class="form-control" value="{{ @old('username') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="group-fields clearfix row">
                                        <div class="col-md-6">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label class="control-label pmd-input-group-label">Email address</label>
                                                <div class="input-group"> 
                                                    <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
                                                    <input id="signup_email" name="email" type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label class="control-label pmd-input-group-label">Contact number</label>
                                                <div class="input-group masked-input"> 
                                                    <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">phone</i></div>
                                                    <input id="contact_number" name="contact_number" type="text" class="form-control mobile-phone-number" value="+639">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="group-fields clearfix row">
                                        <div class="col-md-6">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label class="control-label pmd-input-group-label">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                                                    <input id="signup_password" name="password" type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label class="control-label">Confirm password</label>
                                                <input id="confirm_password" name="confirm_password" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label pmd-input-group-label">Division/Unit/Section</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">business</i></div>
                                            <select class="form-control" name="division_unit" required>
                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label pmd-input-group-label">Position</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">assignment_ind</i></div>
                                            <input id="position" name="position" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
                                    <button class="btn pmd-ripple-effect btn-primary btn-block" type="submit">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- user register panel end -->
            @endif
        </div>
    </div>
</div><!-- content area end -->

@endsection

@section('scripts')
<script src="{{ asset('components/jquery-inputmask/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/pages/jquery-login.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    /*$('#form-signup').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting
        var data = $(this).serializeArray();
        console.log(data); //use the console for debugging, F12 in Chrome, not alerts
    });*/

</script>
@endsection