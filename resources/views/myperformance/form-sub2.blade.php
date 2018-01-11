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

        <form class="" action="{{ route('performance.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            
            <section class="row component-section">
                <div class="col-md-12"> 
                    <!-- Card header -->
                    <div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
                        <div class="pmd-card-title">
                            <h2 class="pmd-card-title-text">Title goes here</h2>
                            <span class="pmd-card-subtitle-text">Secondary text</span> 
                        </div>
                    </div>
                </div>
            </section>

            <section class="row component-section scorecard">
                <div class="col-md-12"> 
                    <!-- Card header -->
                    <div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
                        <div class="pmd-card-body"> 
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group pmd-textfield">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default pmd-ripple-effect dropdown-toggle pmd-btn-flat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Action&nbsp;&nbsp;&nbsp;<span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="btn-new-title waves-effect waves-block" data-key="1">Insert new title</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" value="1">
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <div class="form-group pmd-textfield">
                                        <input type="text" class="form-control" placeholder="Title" name="maintitle[title][]">
                                        <input type="hidden" value="1" data-type="maintitle" name="maintitle[level][]">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group pmd-textfield">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default pmd-ripple-effect dropdown-toggle pmd-btn-flat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Action&nbsp;&nbsp;&nbsp;<span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);" class="btn-new-subtitle waves-effect waves-block" data-key="1">Add new subtitle</a></li>
                                                <li><a href="javascript:void(0);" class="btn-delete-subtitle waves-effect waves-block">Delete subtitle</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" value="1|1">
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <div class="form-group pmd-textfield">
                                        <input type="text" class="form-control" placeholder="subtitle" name="subtitle[title][]">
                                        <input type="hidden" value="1|1" data-type="subtitle" name="subtitle[level][]">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pmd-card pmd-card-default">
                                        <div class="table-responsive">
                                            <table class="table pmd-table table-bordered table-hover">
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
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Major Output</th>
                                                        <th rowspan="2">Success Indicator</th>
                                                        <th rowspan="2" style="text-align: center">Target</th>
                                                        <th colspan="6" style="text-align: center">Monthly Targets</th>
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
                                                    <tr>
                                                        <td data-type="subsubtitle">
                                                            <div class="form-group pmd-textfield">
                                                                <textarea rows="1" class="form-control" placeholder="info title" name="subsubtitle[title][]"></textarea>
                                                                <input type="hidden" value="1|1|1" name="subsubtitle[level][]">
                                                            </div>
                                                        </td>
                                                        <td data-type="indicator">
                                                            <div class="form-group pmd-textfield">
                                                                <textarea rows="1" class="form-control" placeholder="success indicator" name="indicator[1|1|1][]"></textarea>
                                                            </div>
                                                        </td>
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="target[1|1|1][]">
                                                            </div>
                                                        </td>
                                                        <!-- January -->
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="jantarget[1|1|1][]">
                                                            </div>
                                                        </td>
                                                        <!-- February -->
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="febtarget[1|1|1][]">
                                                            </div>
                                                        </td>
                                                        <!-- March -->
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="martarget[1|1|1][]">
                                                            </div>
                                                        </td>
                                                        <!-- April -->
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="aprtarget[1|1|1][]">
                                                            </div>
                                                        </td>
                                                        <!-- May -->
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="maytarget[1|1|1][]">
                                                            </div>
                                                        </td>
                                                        <!-- June -->
                                                        <td data-type="target">
                                                            <div class="form-group pmd-textfield">
                                                                <input type="number" step="1" min="0" class="form-control" name="juntarget[1|1|1][]">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <span id=""></span>
                        </div>
                    </div>
                </div>
            </section>

            <span id="append-here"></span>

            <section class="row component-section">
                <div class="col-md-12"> 
                    <!-- Card header -->
                    <div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">
                        <div class="pmd-card-actions">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success waves-effect pmd-btn-flat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAVE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                <button type="button" class="btn btn-default dropdown-toggle pmd-btn-flat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Insert <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
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

    $(document).on("click", "a.btn-new-title", function() {
        var maintitle = $('input[data-type="maintitle"]').length;

        var mainlevel = maintitle + 1;
        $( "#append-here" ).before( function() {
            //var maintitle = $('input[data-type="maintitle"]').attr('value');

            var $html = '<section class="row component-section scorecard">' +
                '<div class="col-md-12"> ' +
                    '<div class="pmd-card pmd-card-default pmd-z-depth pmd-card-custom-form">' +
                        '<div class="pmd-card-body"> ' +
                            '<div class="row">' +
                                '<div class="col-md-1">' +
                                    '<div class="form-group pmd-textfield">' +
                                        '<div class="btn-group">' +
                                            '<button type="button" class="btn btn-default pmd-ripple-effect dropdown-toggle pmd-btn-flat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                                                'Action&nbsp;&nbsp;&nbsp;<span class="caret"></span>' +
                                            '</button>' +
                                            '<ul class="dropdown-menu">' +
                                                '<li><a href="javascript:void(0);" class="btn-new-title waves-effect waves-block">Insert new title</a></li>' +
                                                '<li><a href="javascript:void(0);" class="btn-delete-title waves-effect waves-block">Delete card</a></li>' +
                                            '</ul>' +
                                        '</div>' +
                                        '<input type="text" value="'+ mainlevel +'">' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-md-11">' +
                                    '<div class="form-group pmd-textfield">' +
                                        '<input type="text" class="form-control" placeholder="Title" name="maintitle[title][]">' +
                                        '<input type="hidden" value="1" data-type="maintitle" name="maintitle[level][]">' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<div class="row">' +
                                '<div class="col-md-1">' +
                                    '<div class="form-group pmd-textfield">' +
                                        '<div class="btn-group">' +
                                            '<button type="button" class="btn btn-default pmd-ripple-effect dropdown-toggle pmd-btn-flat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                                                'Action&nbsp;&nbsp;&nbsp;<span class="caret"></span>' +
                                            '</button>' +
                                            '<ul class="dropdown-menu">' +
                                                '<li><a href="javascript:void(0);" class="btn-new-title waves-effect waves-block">Insert new title</a></li>' +
                                            '</ul>' +
                                        '</div>' +
                                        '<input type="text" value="'+ mainlevel +'|1">' +
                                    '</div>' +
                                '</div>' +
                                '<div class="col-md-11">' +
                                    '<div class="form-group pmd-textfield">' +
                                        '<input type="text" class="form-control" placeholder="subtitle" name="subtitle[title][]">' +
                                        '<input type="hidden" value="1|1" data-type="subtitle" name="subtitle[level][]">' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</section>';

            return $html;
        } );
    });

    $(document).on("click", "a.btn-delete-title", function() {
        $(this).closest('.scorecard').remove();
    });

    $(document).on("click", "a.btn-new-subtitle", function() {
        alert("THIS");
    });
</script>
@endsection
