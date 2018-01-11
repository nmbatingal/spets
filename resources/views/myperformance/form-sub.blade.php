@extends('layouts.app')

@section('styles')
<style type="text/css">
    tbody > tr > td {
        padding: 2 !important;
    }
    td[data-type="target"] {
        width: 5%;
    }
    td.text-center {
        text-align: right !important;
        vertical-align: top !important;
    }
    textarea, input {
        border: 0 !important;
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
            <form class="" action="{{ route('performance.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                <div class="pmd-card pmd-card-default pmd-z-depth">
                    <div class="pmd-card-title">
                        <h2 class="pmd-card-title-text">Title goes here</h2>
                        <span class="pmd-card-subtitle-text">Secondary text</span>
                    </div>

                    <div class="pmd-card-actions">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success waves-effect pmd-btn-raised">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAVE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            <button type="button" class="btn btn-default dropdown-toggle pmd-btn-raised" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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

                    <div class="pmd-card-body">
                        <div class="pmd-card">
                            <div class="table-responsive">
                                <table class="table pmd-table table-bordered table-hover">
                                    <colgroup>
                                        <col width="4%">
                                        <col width="4%">
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th rowspan="2" colspan="3">Major Output</th>
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
                                            <td data-type="number" class="text-center">
                                                <input type="text" value="1" name="maintitle[level][]">
                                            </td>
                                            <td data-type="title" colspan="10">
                                                <div class="form-group pmd-textfield">
                                                    <input type="text" class="form-control" placeholder="title" name="maintitle[title][]">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-type="number" class="text-center" colspan="2">
                                                <input type="text" value="1|1" name="subtitle[level][]">
                                            </td>
                                            <td data-type="subtitle" colspan="9">
                                                <div class="form-group pmd-textfield">
                                                    <input type="text" class="form-control" placeholder="subtitle" name="subtitle[title][]">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="text" value="1|1|1" name="subsubtitle[level][]">
                                            </td>
                                            <td data-type="subsubtitle">
                                                <div class="form-group pmd-textfield">
                                                    <textarea rows="1" class="form-control" placeholder="info title" name="subsubtitle[title][]"></textarea>
                                                </div>
                                            </td>
                                            <td data-type="indicator">
                                                <div class="form-group pmd-textfield">
                                                    <textarea rows="1" class="form-control" placeholder="success indicator" name="indicator[title][]"></textarea>
                                                </div>
                                            </td>
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="target">
                                                </div>
                                            </td>
                                            <!-- January -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="jantarget">
                                                </div>
                                            </td>
                                            <!-- February -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="febtarget">
                                                </div>
                                            </td>
                                            <!-- March -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="martarget">
                                                </div>
                                            </td>
                                            <!-- April -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="aprtarget">
                                                </div>
                                            </td>
                                            <!-- May -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="maytarget">
                                                </div>
                                            </td>
                                            <!-- June -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="juntarget">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="3"></td>
                                            <td data-type="indicator">
                                                <div class="form-group pmd-textfield">
                                                    <textarea rows="1" class="form-control" placeholder="success indicator" name="infotitle"></textarea>
                                                </div>
                                            </td>
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="target">
                                                </div>
                                            </td>
                                            <!-- January -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="jantarget">
                                                </div>
                                            </td>
                                            <!-- February -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="febtarget">
                                                </div>
                                            </td>
                                            <!-- March -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="martarget">
                                                </div>
                                            </td>
                                            <!-- April -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="aprtarget">
                                                </div>
                                            </td>
                                            <!-- May -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="maytarget">
                                                </div>
                                            </td>
                                            <!-- June -->
                                            <td data-type="target">
                                                <div class="form-group pmd-textfield">
                                                    <input type="number" step="1" min="0" class="form-control" name="juntarget">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pmd-card-actions">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success waves-effect pmd-btn-raised">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SAVE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            <button type="button" class="btn btn-default dropdown-toggle pmd-btn-raised" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
            </form>
        </section> 
        <!-- table card end -->
    </div><!-- tab end -->
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/autosize.js') }}"></script>
<script>
    autosize($('textarea'));
</script>
@endsection
