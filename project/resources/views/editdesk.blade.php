@extends('layout')

@section('body')
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Add Desk</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <div class="row">
                            <div class="col-lg-6">

                                <h4 class="header-title m-t-0">Add Desk</h4>

                                <div class="p-20">

                                    <form action="/admin/desk/edit/{{$row->id}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="userName">Desk Number<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{$row->deskNumber}}"
                                                required="true" name="desknumber" id="desknumber" readonly>


                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Laptop / Charger Socket<span
                                                    class="text-danger"></span></label>
                                            @if ($row->laptopChargerScoket == '')
                                            <input type="checkbox" value="" name="laptopchargersocket">
                                            @else
                                            
                                            <input type="checkbox" value="Yes" name="laptopchargersocket" checked>
                                            @endif
                                        </div>

                                        <div class="form-group text-left m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit"
                                                name="update">
                                                Update
                                            </button>

                                        </div>

                                    </form>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->


                    </div>
                </div><!-- end col-->

            </div>
            <!-- end row -->

        </div> <!-- container -->
    @endsection
