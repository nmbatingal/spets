@extends('layouts.app')

@section('content')
<div id="content" class="pmd-content inner-page">
    <!--tab start-->
    <div class="container-fluid full-width-container">
        <!-- Title -->
        <!-- <h1 class="section-title" id="services">
            <span>Dashboard</span>
        </h1> -->
        <!-- End Title -->
    
        <!--breadcrum start-->
        <!-- <ol class="breadcrumb text-left">
            <li><a href="{{ Route('home') }}">Dashboard</a></li>
            <li class="active">Blank</li>
        </ol> -->
        <!--breadcrum end-->
    
        <section class="row component-section">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('unauthorize'))
                            <div class="alert alert-danger">
                                {{ session('unauthorize') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </section>
    </div><!-- tab end -->
</div>
@endsection
