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
            <span>Individual Performance</span>
        </h1>
        <!-- End Title -->
    
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="active">Individual Performance</li>
        </ol>
        <!--breadcrum end-->

        <section class="row component-section">
            <div class="col-md-12">
                <div class="pmd-card pmd-z-depth">
                    <div class="pmd-card-title">
                        <h2 class="pmd-card-title-text">Title goes here</h2>
                        <span class="pmd-card-subtitle-text">Secondary text</span>
                    </div>
                    <div class="pmd-card-actions">
                        <a class="btn pmd-btn-raised pmd-ripple-effect btn-success" href="{{ route('performance.create') }}">Create New Performance Tracker</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="row component-section">
            <div class="col-md-4">
                <div class="pmd-card pmd-z-depth">
                    @if( count($users) > 0 )
                        @foreach($users as $record)
                            <ul class="list-group pmd-z-depth pmd-list pmd-card-list">
                                <li class="list-group-item">
                                    <div class="media-left">
                                        <a href="javascript:void(0);" class="avatar-list-img">
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="http://propeller.in/components/list/img/40x40.png" data-holder-rendered="true">
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <a href="{{ route('performance.showRecord', ['id' => $record['id']]) }}"> 
                                            <h3 class="list-group-item-heading"><b>{{ $record['firstname'] }}</b></h3>
                                            <span class="list-group-item-text"><b>{{ $record['position'] }}</b></span>
                                        </a>
                                    </div>
                                    <div class="media-body media-right"> 
                                        <span class="badge">1</span>
                                        <div class="pull-right">
                                            <a href="{{ route('performance.showRecord', ['id' => $record['id']]) }}" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-sm btn-success" type="button"><i class="material-icons pmd-sm">open_in_new</i></a>
                                            <a class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-sm btn-danger" type="button"><i class="material-icons pmd-sm">delete</i></a>
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
