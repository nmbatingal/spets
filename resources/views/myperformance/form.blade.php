@extends('layouts.app')

@section('styles')
<style type="text/css">
    thead > tr > th {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    /*tbody > tr > td {
        padding: 2px !important;
    }*/
    td[data-type="target"] {
        width: 5%;
        vertical-align: bottom !important;
    }
    td.text-center {
        text-align: right !important;
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
            <span>Create New Performance Record</span>
        </h1>
        <!-- End Title -->
    
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('performance.individual') }}">Individual Performance</a></li>
            <li class="active">{{ Request::is('performance/individual/create') ? 'Create' : '' }}</li>
        </ol>
        <!--breadcrum end-->

        <form class="" action="{{ route('performance.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            
            <section class="row component-section">
                <div class="col-md-12"> 
                    <!-- Card header -->
                    <div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
                        <div class="pmd-card-title">
                            <h2 class="pmd-card-title-text">
                                <div class="form-group pmd-textfield form-group-lg">
                                    <input type="Large" class="form-control input-group-lg" placeholder="Title goes here" name="record_name" required>
                                </div>
                            </h2>
                            <span class="pmd-card-subtitle-text">
                                <div class="form-group pmd-textfield form-group-sm">
                                    <textarea rows="1" class="form-control" placeholder="Secondary text" name="description"></textarea>
                                </div>
                            </span> 
                        </div>
                    </div>
                </div>
            </section>

            <section class="row component-section scorecard">
                <div class="col-md-12"> 
                    <div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
                        <div class="pmd-card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pmd-card pmd-card-default">
                                        <div class="table-responsive">
                                            <table id="tableOutputs" class="table pmd-table table-bordered table-hover">
                                                <colgroup>
                                                    <col>
                                                    <col>
                                                    <col width="5%">
                                                    <col width="5%">
                                                    <col width="5%">
                                                    <col width="5%">
                                                    <col width="5%">
                                                    <col width="5%">
                                                    <col width="5%">
                                                    <col width="5%">
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Major Output</th>
                                                        <th rowspan="2">Success Indicator Measure</th>
                                                        <th rowspan="2" style="text-align: center">Target</th>
                                                        <th colspan="6" style="text-align: center">Monthly Targets</th>
                                                        <th rowspan="2"></th>
                                                    </tr>
                                                    <tr>
                                                        <th style="text-align: center">Jan</th>
                                                        <th style="text-align: center">Feb</th>
                                                        <th style="text-align: center">Mar</th>
                                                        <th style="text-align: center">Apr</th>
                                                        <th style="text-align: center">May</th>
                                                        <th style="text-align: center">Jun</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="output-row">
                                                        <td>
                                                            <div class="form-group pmd-textfield">
                                                                <textarea rows="1" class="form-control" placeholder="Major output" name="majorOutput[]" required></textarea>
                                                            </div>
                                                        </td>
                                                        <td data-type="indicator">
                                                            <div class="form-group pmd-textfield">
                                                                <textarea rows="1" class="form-control" placeholder="Success indicator measure" name="indicatorMeasure[]" required></textarea>
                                                            </div>
                                                        </td>
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="overallTgt[]" required>
                                                            </div>
                                                        </td>
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="janTgt[]" required>
                                                            </div>
                                                        </td>
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="febTgt[]" required>
                                                            </div>
                                                        </td>
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="marTgt[]" required>
                                                            </div>
                                                        </td>
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="aprTgt[]" required>
                                                            </div>
                                                        </td>
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="mayTgt[]" required>
                                                            </div>
                                                        </td>
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="junTgt[]" required>
                                                            </div>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            <button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-danger btn-row-delete" type="button"><i class="material-icons pmd-sm">delete</i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <span id="append-here"></span>

            <section class="row component-section">
                <div class="col-md-12"> 
                    <!-- Card header -->
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success pmd-ripple-effect pmd-btn-raised">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAVE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                <button type="button" class="btn btn-default pmd-ripple-effect dropdown-toggle pmd-btn-raised" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);" class="btn-add-row waves-effect waves-block">Insert row</a></li>
                                </ul>
                            </div>
                </div>
            </section>
        </form>

    </div><!-- tab end -->
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/autosize.js') }}"></script>
<script>
    autosize($('textarea'));

    $(document).on("click", "a.btn-add-row", function() {

        $("table#tableOutputs tbody").append( function() {
            var $html = '<tr class="output-row">' +
                '<td>' +
                    '<div class="form-group pmd-textfield">' +
                        '<textarea rows="1" class="form-control" placeholder="Major output" name="majorOutput[]" required></textarea>' +
                    '</div>' +
                '</td>' +
                '<td data-type="indicator">' +
                    '<div class="form-group pmd-textfield">' +
                        '<textarea rows="1" class="form-control" placeholder="Success indicator measure" name="indicatorMeasure[]" required></textarea>' +
                    '</div>' +
                '</td>' +
                '<td data-type="target">' +
                    '<div class="form-group pmd-textfield">' +
                        '<input type="number" step="1" min="0" class="form-control" name="overallTgt[]" required>' +
                    '</div>' +
                '</td>' +
                '<td data-type="target">' +
                    '<div class="form-group pmd-textfield">' +
                        '<input type="number" step="1" min="0" class="form-control" name="janTgt[]" required>' +
                    '</div>' +
                '</td>' +
                '<td data-type="target">' +
                    '<div class="form-group pmd-textfield">' +
                        '<input type="number" step="1" min="0" class="form-control" name="febTgt[]" required>' +
                    '</div>' +
                '</td>' +
                '<td data-type="target">' +
                    '<div class="form-group pmd-textfield">' +
                        '<input type="number" step="1" min="0" class="form-control" name="marTgt[]" required>' +
                    '</div>' +
                '</td>' +
                '<td data-type="target">' +
                    '<div class="form-group pmd-textfield">' +
                        '<input type="number" step="1" min="0" class="form-control" name="aprTgt[]" required>' +
                    '</div>' +
                '</td>' +
                '<td data-type="target">' +
                    '<div class="form-group pmd-textfield">' +
                        '<input type="number" step="1" min="0" class="form-control" name="mayTgt[]" required>' +
                    '</div>' +
                '</td>' +
                '<td data-type="target">' +
                    '<div class="form-group pmd-textfield">' +
                        '<input type="number" step="1" min="0" class="form-control" name="junTgt[]" required>' +
                    '</div>' +
                '</td>' +
                '<td style="text-align: center;">' +
                    '<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-danger btn-row-delete" type="button"><i class="material-icons pmd-sm">delete</i></button>' +
                '</td>' +
            '</tr>';
            
            autosize($('textarea'));

            return $html;
        } );
    });

    $(document).on("click", ".btn-row-delete", function() {
        $(this).closest('tr').remove();
    });
</script>
@endsection
