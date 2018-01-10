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

        <!-- table card -->
        <section class="row component-section">
            <div class="pmd-card pmd-card-default pmd-z-depth">
                <div class="pmd-card-title">
                    <h2 class="pmd-card-title-text">Title goes here</h2>
                    <span class="pmd-card-subtitle-text">Secondary text</span>
                </div>
                <div class="pmd-card-actions">
                    <a class="btn pmd-btn-raised pmd-ripple-effect btn-success" href="{{ route('performance.create') }}">Create</a>
                    <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-primary">Primary</button>
                    <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-danger">Danger</button>
                    <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-default">Default</button>
                </div>
                <div class="pmd-card-body">
                    <div class="pmd-card">
                        <div class="table-responsive">
                            <table class="table pmd-table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td data-title="Name">Giacomo Guilizzoni</td>
                                        <td data-title="Code">JONEA140</td>
                                        <td data-title="State/City">Melbourne</td>
                                        <td data-title="End Date of Work">1 June 2014</td>
                                        <td data-title="Active">Active</td>
                                        <td data-title="Timesheet">Timesheet</td>
                                        <td data-title=""></td>
                                    </tr>
                                    <tr>
                                        <td data-title="Name">Giacomo Guilizzoni</td>
                                        <td data-title="Code">JONEA140</td>
                                        <td data-title="State/City">Melbourne</td>
                                        <td data-title="End Date of Work">1 June 2014</td>
                                        <td data-title="Active">Active</td>
                                        <td data-title="Timesheet">Timesheet</td>
                                        <td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- table card end -->

        <!-- table card -->
        <section class="row component-section">
            <div class="pmd-card pmd-card-default pmd-z-depth">
                <div class="pmd-card-title">
                    <h2 class="pmd-card-title-text">Title goes here</h2>
                    <span class="pmd-card-subtitle-text">Secondary text</span>
                </div>
                <div class="pmd-card-actions">
                    <button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
                    <button class="btn pmd-btn-flat pmd-ripple-effect btn-default" type="button">Action</button>
                </div>
                <div class="pmd-card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-group pmd-list pmd-card-list">
                                <a class="list-group-item">Single-line item</a>
                                <a class="list-group-item">Single-line item</a>
                                <li class="list-group-item">
                                    <ul class="">
                                        <a class="list-group-item">Single-line item</a>
                                        <a class="list-group-item">Single-line item</a>
                                        <a class="list-group-item">Single-line item</a>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group pmd-list pmd-card-list">
                                <li class="list-group-item">Single-line item</li>
                                <li class="list-group-item">Single-line item</li>
                                <li class="list-group-item">Single-line item</li>
                                <li class="list-group-item">Single-line item</li>
                                <li class="list-group-item">Single-line item</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pmd-card-actions">
                    <button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
                    <button class="btn pmd-btn-flat pmd-ripple-effect btn-default" type="button">Action</button>
                </div>
            </div>
        </section> 
        <!-- table card end -->

        <!-- table card -->
        <section class="row component-section">
        
            <!-- table card code and example -->
            <div class="col-md-12">
                <div class="component-box">
                    <!-- table card example -->
                    <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                        <div class="table-responsive">
                        <table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Tiger</td>
                                <td>Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Garrett</td>
                                <td>Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Ashton</td>
                                <td>Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Cedric</td>
                                <td>Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Airi</td>
                                <td>Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Brielle</td>
                                <td>Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Herrod</td>
                                <td>Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Airi</td>
                                <td>Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Brielle</td>
                                <td>Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Herrod</td>
                                <td>Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Airi</td>
                                <td>Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Brielle</td>
                                <td>Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Herrod</td>
                                <td>Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Airi</td>
                                <td>Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Brielle</td>
                                <td>Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Herrod</td>
                                <td>Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Airi</td>
                                <td>Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Brielle</td>
                                <td>Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Herrod</td>
                                <td>Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                            </tr>
                        </tbody>
                    </table>
                        </div>
                    </div> <!-- table card example end -->
                
                </div>
            </div> <!-- table card code and example end -->
        </section> 
        <!-- table card end -->
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

<!-- Propeller Data table js-->
<script>
//Propeller Customised Javascript code 
$(document).ready(function() {
    $('#example-checkbox').DataTable({
        responsive: false,
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:0,
        } ],
        select: {
            style: 'multi',
            selector: 'td:first-child'
        },
        order: [ 1, 'asc' ],
        bFilter: true,
        bLengthChange: true,
        pagingType: "simple",
        "paging": true,
        "searching": true,
        "language": {
            "info": " _START_ - _END_ of _TOTAL_ ",
            "sLengthMenu": "<span class='custom-select-title'>Rows per page:</span> <span class='custom-select'> _MENU_ </span>",
            "sSearch": "",
            "sSearchPlaceholder": "Search",
            "paginate": {
                "sNext": " ",
                "sPrevious": " "
            },
        },
        dom:
            "<'pmd-card-title'<'data-table-title'><'search-paper pmd-textfield'f>>" +
            "<'custom-select-info'<'custom-select-item'><'custom-select-action'>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'pmd-card-footer' <'pmd-datatable-pagination' l i p>>",
    });
    
    /// Select value
    $('.custom-select-info').hide();
    
    $('#example-checkbox tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            var rowinfo = $(this).closest('.dataTables_wrapper').find('.select-info').text();
            $(this).closest('.dataTables_wrapper').find('.custom-select-info .custom-select-item').text(rowinfo);
            if ($(this).closest('.dataTables_wrapper').find('.custom-select-info .custom-select-item').text() != null){
                $(this).closest('.dataTables_wrapper').find('.custom-select-info').show();
                //show delet button
            } else{
                $(this).closest('.dataTables_wrapper').find('.custom-select-info').hide();
            }
        }
        else {
            var rowinfo = $(this).closest('.dataTables_wrapper').find('.select-info').text();
            $(this).closest('.dataTables_wrapper').find('.custom-select-info .custom-select-item').text(rowinfo);
        }
        if($('#example-checkbox').find('.selected').length == 0){
            $(this).closest('.dataTables_wrapper').find('.custom-select-info').hide();
        }
    } );
    $("div.data-table-title").html('<h2 class="pmd-card-title-text">Propeller Data table</h2>');
    $(".custom-select-action").html('<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">delete</i></button><button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">more_vert</button>');
    
} );
</script>
@endsection
