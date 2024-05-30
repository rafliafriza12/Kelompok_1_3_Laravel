@extends('layout')

@section('body')
    <div class="wrapper">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h3 class="mb-4 font-bold"> B/w Dates Report Assign Desk</h3>
                        <hr />

                        <div class="card-body card-block">
                            <form method="POST" action="/admin/report/list" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">From Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" id="fromdate" name="fromdate" value=""
                                            class="form-control" required="">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">To Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" id="todate" name="todate" value=""
                                            class="form-control" required="">

                                    </div>
                                </div>



                                <div class="card-footer">
                                    <p style="text-align: center;"><button type="submit" name="submit" id="submit"
                                            class="btn btn-primary btn-sm">Submit
                                        </button></p>

                                </div>
                            </form>
                        </div>
                        @if ($first)
                        <h5 align="center" class="mb-4 font-semibold">Assign Desk Report from <?php echo $fdate; ?> to <?php echo $tdate; ?></h5>
                        <hr />


                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Reg No</th>
                                    <th>Name</th>
                                    <th>Contact No</th>
                                    <th>Email Id</th>
                                    <th>Qualification</th>
                                    <th>Current Desk Status</th>
                                    <th>Reg Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($results as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->registrationNumber}}</td>
                                    <td>{{$row->studentName}}</td>
                                    <td>{{$row->studentContactNo}}</td>
                                    <td>{{$row->studentEmailId}}</td>
                                    <td>{{$row->studentQualification}}</td>
                                    <td>
                                    @if ($row->unassignDate == null)
                                        Assigned
                                    @else
                                        Not Assigned
                                    @endif
                                    </td>
                                    <td>{{$row->regDate}}</td>
                                    <td><a href="/admin/student-detail/{{$row->id}}" class="btn btn-primary">Assign/UnAssign Desk</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif

                    </div>
                </div>
            </div> <!-- end row -->



        </div> <!-- container -->
    @endsection
