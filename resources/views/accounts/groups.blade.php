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
            <span>User Groups</span>
        </h1>
        <!-- End Title -->
    
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="active">User Groups</li>
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
                    @if( count($groups) > 0 )
                        @foreach($groups as $group)
                            <ul class="list-group pmd-z-depth pmd-list pmd-card-list">
                                <li class="list-group-item">
                                    <div class="media-left">
                                        <a href="javascript:void(0);" class="avatar-list-img">
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="{{ asset('themes/images/user-icon.png') }}" data-holder-rendered="true">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{ route('performance.showRecord', ['id' => $group['id']]) }}"> 
                                            <h3 class="list-group-item-heading"><b>{{ $group['firstname'] }}</b></h3>
                                            <span class="list-group-item-text">Position - Office</span>
                                        </a>
                                    </div>
                                    <div class="media-right"> 
                                        <div class="pull-right">
                                            <span class="badge badge-warning">admin</span>
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
        </section>
    </div><!-- tab end -->
</div>
@endsection

@section('scripts')
@endsection
