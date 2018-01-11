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
            <span>My Performance</span>
        </h1>
        <!-- End Title -->
    
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="active">Individual Performance</li>
        </ol>
        <!--breadcrum end-->

        <section class="row component-section">
            <div class="pmd-card pmd-z-depth">
                <div class="pmd-card-title">
                    <h2 class="pmd-card-title-text">Title goes here</h2>
                    <span class="pmd-card-subtitle-text">Secondary text</span>
                </div>
                <div class="pmd-card-actions">
                    <a class="btn pmd-btn-raised pmd-ripple-effect btn-success" href="{{ route('performance.create') }}">Create Performance Tracker</a>
                </div>
            </div>
        </section>

        <section class="row component-section">
            <div class="pmd-card pmd-z-depth">
                <div class="pmd-card-actions">
                    <a class="btn pmd-btn-raised pull-right pmd-ripple-effect btn-primary" href="{{ route('performance.create') }}">Update Record</a>
                </div>
                <div class="table-responsive">
                    <div class="table-responsive table-striped table-bordered">
                        <table class="table">
                            <colgroup>
                                <col>
                                <col>
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="2%">
                                <col width="5%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th rowspan="3" class="text-center">MFO</th>
                                    <th rowspan="3">Success Indicator</th>
                                    <th colspan="18"><small>Monthly Target</small></th>
                                    <th rowspan="3"></th>
                                </tr>
                                <tr>
                                    <th colspan="3">Jan</th>
                                    <th colspan="3">Feb</th>
                                    <th colspan="3">Mar</th>
                                    <th colspan="3">Apr</th>
                                    <th colspan="3">May</th>
                                    <th colspan="3">Jun</th>
                                </tr>
                                <tr>
                                    <th>T</th>
                                    <th>A</th>
                                    <th>%</th>
                                    <th>T</th>
                                    <th>A</th>
                                    <th>%</th>
                                    <th>T</th>
                                    <th>A</th>
                                    <th>%</th>
                                    <th>T</th>
                                    <th>A</th>
                                    <th>%</th>
                                    <th>T</th>
                                    <th>A</th>
                                    <th>%</th>
                                    <th>T</th>
                                    <th>A</th>
                                    <th>%</th>
                                </tr>
                             </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td data-for="target"></td>
                                    <td data-for="accomp"></td>
                                    <td data-for="perc"></td>
                                    <td data-for="target"></td>
                                    <td data-for="accomp"></td>
                                    <td data-for="perc"></td>
                                    <td data-for="target"></td>
                                    <td data-for="accomp"></td>
                                    <td data-for="perc"></td>
                                    <td data-for="target"></td>
                                    <td data-for="accomp"></td>
                                    <td data-for="perc"></td>
                                    <td data-for="target"></td>
                                    <td data-for="accomp"></td>
                                    <td data-for="perc"></td>
                                    <td data-for="target"></td>
                                    <td data-for="accomp"></td>
                                    <td data-for="perc"></td>
                                    <td>
                                        <button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">mode_edit</i></button>
                                    </td>
                                </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- tab end -->
</div>
@endsection

@section('scripts')
<!-- Datatable js -->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<!-- Datatable Bootstrap -->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<!-- Datatable responsive js-->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>

<!-- Datatable select js-->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
@endsection
