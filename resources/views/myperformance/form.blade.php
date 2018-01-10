@extends('layouts.app')

@section('styles')
<style type="text/css">
    /*textarea {
        width: 100%;
    }*/

    td.text-center {
        text-align: center !important;
        vertical-align: top !important;
    }
</style>
@endsection

@section('content')
<div id="content" class="pmd-content inner-page">
    <!--tab start-->
    <div class="container-fluid full-width-container">
        <!-- Title -->
        <h1 class="section-title" id="services">
            <span>My Performance</span>
        </h1>
        <!-- End Title -->
    
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('performance.individual') }}">Individual Performance</a></li>
            <li class="active">{{ Request::is('performance/individual/create') ? 'Create' : '' }}</li>
        </ol>
        <!--breadcrum end-->

        <!-- table card -->
        <section class="row component-section">
            <div class="pmd-card pmd-card-default pmd-z-depth">
                <div class="pmd-card-title">
                    <h2 class="pmd-card-title-text">Title goes here</h2>
                    <span class="pmd-card-subtitle-text">Secondary text</span>
                </div>
                <form class="">
                    <div class="pmd-card-body">
                        <div class="pmd-card">
                            <div class="table-responsive">
                                <table class="table pmd-table table-striped table-hover">
                                    <colgroup>
                                        <col width="5%">
                                        <col width="30%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th colspan="2">Output</th>
                                            <th>Success Indicators</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-type="number" class="text-center">
                                                <b>I</b>
                                            </td>
                                            <td data-type="title">
                                                <div class="form-group pmd-textfield">
                                                    <textarea required="" class="form-control"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-type="number" class="text-center">
                                                <b>I</b>
                                            </td>
                                            <td data-type="title">
                                                <div class="form-group pmd-textfield">
                                                    <textarea required="" class="form-control"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="pmd-card-actions">
                    <div class="row">
                        <div class="col-md-1">
                            <span class="dropdown pmd-dropdown clearfix">
                                <button class="btn pmd-ripple-effect btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">Action &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>
                                <ul aria-labelledby="dropdownMenu2" role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Insert new title</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Insert new sub-title</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">Insert new info-title</a></li>
                                </ul>
                            </span>
                        </div>
                        <div class="col-md-1">
                            <span class="dropdown pmd-dropdown clearfix">
                                <button class="btn pmd-ripple-effect btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">Start Date &nbsp;<span class="caret"></span></button>
                                <ul aria-labelledby="dropdownMenu2" role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">January</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">February</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">March</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">April</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">May</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">June</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">July</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">August</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">September</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">October</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">November</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">December</a></li>
                                </ul>
                            </span>
                        </div>
                        <div class="col-md-1">
                            <span class="dropdown pmd-dropdown clearfix">
                                <button class="btn pmd-ripple-effect btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">End Date &nbsp;&nbsp;&nbsp;<span class="caret"></span></button>
                                <ul aria-labelledby="dropdownMenu2" role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">January</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">February</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">March</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">April</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">May</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">June</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">July</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">August</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">September</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">October</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">November</a></li>
                                    <li role="presentation"><a href="javascript:void(0);" tabindex="-1" role="menuitem">December</a></li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- table card end -->
    </div><!-- tab end -->
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/autosize.js') }}"></script>
<script>
    autosize(document.querySelectorAll('textarea'));
</script>
@endsection