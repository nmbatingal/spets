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
                                                $jan = $output->totalMonthly($output['id'], $output['jan_total'], $output['jan_accomplished']);
                                                echo '<td class="text-right">'. $jan['target'] .'</span></td>';
                                                echo '<td class="text-right '. $jan['class-accomplish'] .'">'. $jan['accomplished'] .'</td>';
                                                echo '<td class="text-right '. $jan['class-percent'] .'">'. $jan['total-percent'] .'</td>';
                                           } else {
                                                echo '<td></td><td></td><td></td>';
                                           }
                                        ?>
                                        <!-- February -->
                                        <?php
                                           if ( $output['feb_total'] != 0 )
                                           {
                                                $feb = $output->totalMonthly($output['id'], $output['feb_total'], $output['feb_accomplished']);
                                                echo '<td class="text-right">'. $feb['target'] .'</span></td>';
                                                echo '<td class="text-right '. $feb['class-accomplish'] .'">'. $feb['accomplished'] .'</td>';
                                                echo '<td class="text-right '. $feb['class-percent'] .'">'. $feb['total-percent'] .'</td>';
                                           } else {
                                                echo '<td></td><td></td><td></td>';
                                           }
                                        ?>
                                        <!-- March -->
                                        <?php
                                           if ( $output['mar_total'] != 0 )
                                           {
                                                $mar = $output->totalMonthly($output['id'], $output['mar_total'], $output['mar_accomplished']);
                                                echo '<td class="text-right">'. $mar['target'] .'</span></td>';
                                                echo '<td class="text-right '. $mar['class-accomplish'] .'">'. $mar['accomplished'] .'</td>';
                                                echo '<td class="text-right '. $mar['class-percent'] .'">'. $mar['total-percent'] .'</td>';
                                           } else {
                                                echo '<td></td><td></td><td></td>';
                                           }
                                        ?>
                                        <!-- April -->
                                        <?php
                                           if ( $output['apr_total'] != 0 )
                                           {
                                                $apr = $output->totalMonthly($output['id'], $output['apr_total'], $output['apr_accomplished']);
                                                echo '<td class="text-right">'. $apr['target'] .'</span></td>';
                                                echo '<td class="text-right '. $apr['class-accomplish'] .'">'. $apr['accomplished'] .'</td>';
                                                echo '<td class="text-right '. $apr['class-percent'] .'">'. $apr['total-percent'] .'</td>';
                                           } else {
                                                echo '<td></td><td></td><td></td>';
                                           }
                                        ?>
                                        <!-- May -->
                                        <?php
                                           if ( $output['may_total'] != 0 )
                                           {
                                                $may = $output->totalMonthly($output['id'], $output['may_total'], $output['may_accomplished']);
                                                echo '<td class="text-right">'. $may['target'] .'</span></td>';
                                                echo '<td class="text-right '. $may['class-accomplish'] .'">'. $may['accomplished'] .'</td>';
                                                echo '<td class="text-right '. $may['class-percent'] .'">'. $may['total-percent'] .'</td>';
                                           } else {
                                                echo '<td></td><td></td><td></td>';
                                           }
                                        ?>
                                        <!-- June -->
                                        <?php
                                           if ( $output['jun_total'] != 0 )
                                           {
                                                $jun = $output->totalMonthly($output['id'], $output['jun_total'], $output['jun_accomplished']);
                                                echo '<td class="text-right">'. $jun['target'] .'</span></td>';
                                                echo '<td class="text-right '. $jun['class-accomplish'] .'">'. $jun['accomplished'] .'</td>';
                                                echo '<td class="text-right '. $jun['class-percent'] .'">'. $jun['total-percent'] .'</td>';
                                           } else {
                                                echo '<td></td><td></td><td></td>';
                                           }
                                        ?>

                                        <!-- Accumulated Total -->
                                        <?php
                                            $overall = $output->overallTotalAccomplished($output['id']);
                                            echo '<td class="text-right">'.$overall['targets'].'</td>';
                                            echo '<td class="text-right">'.$overall['accomplished'].'</td>';
                                            echo '<td class="text-right">'.$overall['percentage'].'</td>';
                                        ?>

                                        <!-- Overall Total -->
                                        <?php
                                            $overall = $output->overallTotalAccomplished($output['id']);
                                            echo '<td class="text-right">'.$overall['targets'].'</td>';
                                            echo '<td class="text-right '. $overall['class-accomplish'] .'">'.$overall['accomplished'].'</td>';
                                            echo '<td class="text-right '. $overall['class-percent'] .'">'.$overall['percentage'].'</td>';
                                        ?>

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

    $("td").each(function() {

       var cell_null = $.trim($(this).text()).length;
       var cell_num  = parseFloat($(this).text());

        if ( cell_num == 0 ) {
           $(this).text('');
        }
    });

</script>
@endsection
