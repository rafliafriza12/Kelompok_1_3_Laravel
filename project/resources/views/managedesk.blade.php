@extends('layout')

@section('body')
    <div class="wrapper">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title">Manage Desks</h4>


                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Desk Number</th>
                                    <th>Laptop / Charger Socket</th>
                                    <th>Satus</th>
                                    <th>Creation Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($desks as $desk)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$desk->deskNumber}}</td>
                                    <td>
                                        @if ($desk->laptopChargerScoket == '')
                                            Not Available
                                        @else
                                        Available
                                        @endif
                                    </td>
                                    <td>
                                        @if ($desk->isOccupied == '')
                                        Available
                                        @else
                                        Occupied
                                        @endif
                                    </td>
                                    <td>{{$desk->postingDate}}</td>
                                    <td><a href="" class="btn btn-primary">Edit </a> |
                                        <a href=""
                                            onclick=""
                                            class="btn btn-danger btn-xs">Delete</a>
                                    </td>
    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end row -->



        </div> <!-- container -->
    @endsection
