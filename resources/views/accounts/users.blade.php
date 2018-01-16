@extends('layouts.app')

@section('styles')
<!-- DataTables css-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
<!-- Propeller dataTables css-->

<!-- build:[href] components/data-table/css/ -->
<link rel="stylesheet" type="text/css" href="{{ asset('components/data-table/css/pmd-datatable.css') }}">
<!-- /build -->

<style type="text/css">
    thead > tr > th {
        text-align: center;
        vertical-align: middle !important;
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .text-center {
        text-align: right !important;
    }
</style>
@endsection

@section('content')
<div id="content" class="pmd-content inner-page">
    <!--tab start-->
    <div class="container-fluid full-width-container">
        <!--- Title -->
        <h1 class="section-title" id="services">
            <span>User Accounts</span>
        </h1>
        <!-- End Title -->
    
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="active">User Accounts</li>
        </ol>
        <!--breadcrum end-->

        <section class="row component-section">
            <div class="col-md-4">
                <div class="form-group pmd-textfield">
                    <div class="input-group masked-input"> 
                        <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">search</i></div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </div>
            </div>
        </section>

        <section class="row component-section">
            <div class="col-md-4">
                <div class="pmd-card pmd-z-depth">
                    @if( count($users) > 0 )
                        @foreach($users as $user)
                            <ul class="list-group pmd-z-depth pmd-list pmd-card-list">
                                <li class="list-group-item">
                                    <div class="media-left">
                                        <a href="javascript:void(0);" class="avatar-list-img">
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="{{ asset($user['__img']) }}" data-holder-rendered="true">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{ route('accounts.get.user', ['id'=> $user['id']]) }}" class="list-user"> 
                                            <h3 class="list-group-item-heading"><b>{{ $user['firstname'] }} {{ !empty($user['middlename']) ? $user['middlename'][0].'. ' : '' }}{{ $user['lastname'] }}</b></h3>
                                            <span class="list-group-item-text">Position - Office</span>
                                        </a>
                                    </div>
                                    <div class="media-right"> 
                                        <div class="pull-right">
                                            @if ( $user['__is'] > 0 )
                                                <span class="badge badge-warning">admin</span>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    @else
                        <ul class="list-group pmd-z-depth pmd-list pmd-card-list">
                            <li class="list-group-item">
                                <div class="media-body media-left">
                                    <i class="material-icons media-left pmd-sm">error_outline</i>
                                    <span class="media-body">no record found</span>
                                </div>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>

            <div class="col-md-8">
                <div class="pmd-card pmd-z-depth">
                    <div class="pmd-card-body">
                        <div class="row">
                            <div data-provides="fileinput" class="fileinput fileinput-new col-lg-3">
                                <div data-trigger="fileinput" class="fileinput-preview thumbnail img-circle img-responsive">
                                    <img src="{{ asset($user['__img']) }}">
                                </div>
                                <div class="action-button"> 
                                    <span class="btn btn-default btn-raised btn-file ripple-effect">
                                        <span class="fileinput-new"><i class="material-icons md-light pmd-xs">add</i></span>
                                        <span class="fileinput-exists"><i class="material-icons md-light pmd-xs">mode_edit</i></span>
                                        <input type="file" name="...">
                                    </span> 
                                    <a data-dismiss="fileinput" class="btn btn-default btn-raised btn-file ripple-effect fileinput-exists" href="javascript:void(0);"><i class="material-icons md-light pmd-xs">close</i></a>
                                </div>
                            </div>
                            
                            <div class="col-lg-9 custom-col-9">
                                <form id="form-user" class="form-horizontal">
                                    <h3 class="heading">Personal Information</h3>
                                    <div class="row">
                                        <fieldset>
                                            <div class="form-group prousername pmd-textfield">
                                                <label class="control-label col-sm-3">Username</label>
                                                <div class="col-sm-9">
                                                    <p class="form-control-static"><strong class="u_username"></strong></p>
                                                </div>
                                            </div>
                                            <div class="form-group pmd-textfield">
                                              <label class="col-sm-3 control-label" for="u_fname">First Name</label>
                                              <div class="col-sm-9">
                                                  <input type="text" class="form-control u_fname" name="u_fname">
                                              </div>
                                            </div>
                                            <div class="form-group pmd-textfield">
                                              <label class="col-sm-3 control-label" for="u_fname">Middle Name</label>
                                              <div class="col-sm-9">
                                                  <input type="text" class="form-control u_mname" name="u_mname">
                                              </div>
                                            </div>
                                            <div class="form-group pmd-textfield">
                                              <label class="col-sm-3 control-label" for="u_fname">Last Name</label>
                                              <div class="col-sm-9">
                                                  <input type="text" class="form-control u_lname" name="u_lname">
                                              </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <h3 class="heading">Contact Information</h3>
                                    <div class="row">
                                        <fieldset>
                                            <div class="form-group pmd-textfield">
                                              <label class="col-sm-3 control-label" for="u_fname">Email</label>
                                              <div class="col-sm-9">
                                                  <input type="email" class="form-control u_email" name="u_email">
                                              </div>
                                            </div>
                                            <div class="form-group btns margin-bot-30">
                                              <div class="col-sm-9 col-sm-offset-3">
                                                <button type="submit" class="btn btn-primary pmd-ripple-effect">Update</button>
                                                <button class="btn btn-default btn-link pmd-ripple-effect">Cancel</button>
                                              </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- tab end -->
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/pages/jquery-users.js') }}" type="text/javascript"></script>
@endsection
