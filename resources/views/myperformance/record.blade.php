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
        text-align: center !important;
    }

    .cell-success {
        background: #75ff73;
    }

    .cell-info {
        background: #73d4ff;
    }

    .cell-danger {
        background: #ffb6b6;
    }
</style>
@endsection

@section('content')
<div id="content" class="pmd-content inner-page">
    <!--tab start-->
    <div class="container-fluid full-width-container">
        <!--- Title -->
        <h1 class="section-title" id="services">
            <span>My Record</span>
        </h1>
        <!-- End Title -->
    
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li><a href="{{ route('performance.individual') }}">Individual Performance</a></li>
            <li class="active">My Record</li>
        </ol>
        <!--breadcrum end-->

        <section class="row component-section">
            <div class="pmd-card pmd-z-depth">
                <div class="pmd-card-title">
                    <h2 class="pmd-card-title-text">{{ $record['record_title'] }}</h2>
                    <span class="pmd-card-subtitle-text">{{ $record['description'] }}</span>
                </div>
            </div>
        </section>

        <section class="row component-section">
            <div class="pmd-card pmd-z-depth">
                <div class="pmd-card-actions">
                    <a class="btn pmd-btn-raised pull-right pmd-ripple-effect btn-primary" href="{{ route('performance.create') }}">Update Record</a>
                </div>
                <div class="table-responsive">
                    <div class="table-responsive table-striped table-bordered table-hover">
                        <table id="table-record" class="table">
                            <colgroup>
                                <col width="25%">
                                <col width="25%">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="">
                                <col width="4%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th rowspan="3" class="text-center">MFO</th>
                                    <th rowspan="3">Success Indicator</th>
                                    <th colspan="18"><small>Monthly Target</small></th>
                                    <th colspan="3"><small>Total Accumulated Target</small></th>
                                    <th colspan="3"><small>Overall Target</small></th>
                                    <th rowspan="3"></th>
                                </tr>
                                <tr>
                                    <th colspan="3">Jan</th>
                                    <th colspan="3">Feb</th>
                                    <th colspan="3">Mar</th>
                                    <th colspan="3">Apr</th>
                                    <th colspan="3">May</th>
                                    <th colspan="3">Jun</th>
                                    <th rowspan="2">T</th>
                                    <th rowspan="2">A</th>
                                    <th rowspan="2">%</th>
                                    <th rowspan="2">T</th>
                                    <th rowspan="2">A</th>
                                    <th rowspan="2">%</th>
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
                                @foreach($outputs as $output)
                                    <tr>
                                        <td>{{ $output['major_output'] }}</td>
                                        <td>{{ $output['indicator_measure'] }}</td>

                                        <!-- January -->
                                        <?php
                                           if ( $output['jan_total'] != 0 )
                                           {
                                                $january = $output->totalMonthly($output['id'], $output['jan_total'], $output['jan_accomplished']);
                                                echo '<td class="text-right">'. $output['jan_total'] .'</td>';
                                                echo '<td class="text-right '. $january['class-accomplish'] .'">'. $january['accomplished'] .'</td>';
                                                echo '<td class="text-right '. $january['class-percent'] .'">'. $january['total-percent'] .'</td>';
                                           } else {
                                                //echo '<td></td><td></td><td></td>';
                                           }
                                        ?>

                                        <?php
                                            //$jan_total = $output->totalPercent($jan_a, $output['jan_total']);
                                            //echo '<td class="text-right '.$jan_total['class'].'">'.$jan_total['all_total'].'</td>';

                                        ?>

                                        <!-- February -->
                                        <td class="text-right" data-for="target">
                                            {{ $output['feb_total'] }}
                                        </td>
                                        <td class="text-right" data-for="accomp">
                                            <?php
                                                $feb_a = $output['feb_accomplished'] ? $output['feb_accomplished'] : 0;
                                                echo $feb_a ? $feb_a : '';
                                            ?>
                                        </td>
                                        <td class="text-right" data-for="perc">
                                            <?php
                                                $feb_total = (($feb_a / $output['feb_total']) * 100);
                                                echo $feb_total;
                                            ?>
                                        </td>

                                        <!-- March -->
                                        <td class="text-right" data-for="target">
                                            {{ $output['mar_total'] }}
                                        </td>
                                        <td class="text-right" data-for="accomp">
                                            <?php
                                                $mar_a = $output['mar_accomplished'] ? $output['mar_accomplished'] : 0;
                                                echo $mar_a ? $mar_a : '';
                                            ?>
                                        </td>
                                        <td class="text-right" data-for="perc">
                                            <?php
                                                $mar_total = (($mar_a / $output['mar_total']) * 100);
                                                echo $mar_total;
                                            ?>
                                        </td>

                                        <!-- April -->
                                        <td class="text-right" data-for="target">
                                            {{ $output['apr_total'] }}
                                        </td>
                                        <td class="text-right" data-for="accomp">
                                            <?php
                                                $apr_a = $output['apr_accomplished'] ? $output['apr_accomplished'] : 0;
                                                echo $apr_a ? $apr_a : '';
                                            ?>
                                        </td>
                                        <td class="text-right" data-for="perc">
                                            <?php
                                                $apr_total = (($apr_a / $output['apr_total']) * 100);
                                                echo $apr_total;
                                            ?>
                                        </td>

                                        <!-- May -->
                                        <td class="text-right" data-for="target">
                                            {{ $output['may_total'] }}
                                        </td>
                                        <td class="text-right" data-for="accomp">
                                            <?php
                                                $may_a = $output['may_accomplished'] ? $output['may_accomplished'] : 0;
                                                echo $may_a ? $may_a : '';
                                            ?>
                                        </td>
                                        <td class="text-right" data-for="perc">
                                            <?php
                                                $may_total = (($may_a / $output['may_total']) * 100);
                                                echo $may_total;
                                            ?>
                                        </td>

                                        <!-- June -->
                                        <td class="text-right" data-for="target">
                                            {{ $output['jun_total'] }}
                                        </td>
                                        <td class="text-right" data-for="accomp">
                                            <?php
                                                $jun_a = $output['jun_accomplished'] ? $output['jun_accomplished'] : 0;
                                                echo $jun_a ? $jun_a : '';
                                            ?>
                                        </td>
                                        <td class="text-right" data-for="perc">
                                            <?php
                                                $jun_total = (($jun_a / $output['jun_total']) * 100);
                                                echo $jun_total;
                                            ?>
                                        </td>

                                        <!-- June -->
                                        <td class="text-right" data-for="target">
                                            {{ $output['jun_total'] }}
                                        </td>
                                        <td class="text-right" data-for="accomp">
                                            <?php
                                                $jun_a = $output['jun_accomplished'] ? $output['jun_accomplished'] : 0;
                                                echo $jun_a ? $jun_a : '';
                                            ?>
                                        </td>
                                        <td class="text-right" data-for="perc">
                                            <?php
                                                $jun_total = (($jun_a / $output['jun_total']) * 100);
                                                echo $jun_total;
                                            ?>
                                        </td>

                                        <!-- June -->
                                        <td class="text-right" data-for="target">
                                            {{ $output['targets'] }}
                                        </td>
                                        <td class="text-right" data-for="accomp">
                                            <?php
                                                $overall_accomp = $output->overallTotalAccomplished($output['id']);
                                                echo $overall_accomp;
                                            ?>
                                        </td>
                                        <td class="text-right" data-for="perc">
                                            <?php
                                                $overall_total = $output->overallTotalPercent($output['id'], $output['targets']);
                                                echo $overall_total;
                                            ?>
                                        </td>

                                        <td>
                                            <button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">mode_edit</i></button>
                                        </td>
                                    </tr>
                                @endforeach
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
<script>

    /*$("td[data-for='accomp']").each(function() {

       var cell_null = $.trim($(this).text()).length;
       var cell_num  = parseFloat($(this).text());

       if ( cell_null == '' || cell_num < 1) {
           $(this).addClass('cell-danger');
           $(this).removeClass('cell-success');
       } else {
           $(this).addClass('cell-success');
           $(this).removeClass('cell-danger');
       }

    });

    $("td[data-for='perc']").each(function() {

       var cell_null = $.trim($(this).text()).length;
       var cell_num  = parseFloat($(this).text());

       if ( cell_num < 100) {
           $(this).addClass('cell-danger');
           $(this).removeClass('cell-success');
       } else {
           $(this).addClass('cell-success');
           $(this).removeClass('cell-danger');
       }

    });*/

</script>
@endsection
