@extends('layout')

@section('body')
<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">

                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card-box tilebox-one">
                    <i class="fa fa-desktop float-right"></i>

                    <h6 class="text-muted text-uppercase m-b-20">Total Desks</h6>
                    <h2 class="m-b-20" data-plugin="counterup">{{$count}}</h2>
                    <a href="/admin/manage"><span class="badge badge-primary"> View Detail </span></a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="card-box tilebox-one">
                    <i class="fa fa-desktop float-right"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Total Desk Available</h6>
                    <h2 class="m-b-20"><span data-plugin="counterup">{{$available}}</span></h2>
                    <a href="/admin/manage"><span class="badge badge-success"> View Detail </span></a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="card-box tilebox-one">
                    <i class="fa fa-desktop float-right"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Desk Occupied</h6>
                    <h2 class="m-b-20"><span data-plugin="counterup">{{$isocupied}}</span></h2>
                    <a href="/admin/manage"><span class="badge badge-danger"> View Detail </span></a>
                </div>
            </div>


            <div class="col-md-6 col-xl-4">
                <div class="card-box tilebox-one">
                    <i class="fa fa-users float-right"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Total Registered Students</h6>
                    <h2 class="m-b-20"><span data-plugin="counterup">{{$registered}}</span></h2>
                    <a href="manage-students.php"><span class="badge badge-danger"> View Detail </span></a>
                </div>
            </div>
        </div>
        <!-- end row -->




    </div> <!-- container -->

@endsection