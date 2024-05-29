@extends('layout')

@section('body')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="wrapper">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        @foreach ($studentDetail as $row)
                            <h3 class="m-t-0 header-title"> Student Details of #{{ $row->registrationNumber }}</h3>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <tbody>
                                    <tr>
                                        <th>Reg No</th>
                                        <td>{{ $row->registrationNumber }}</td>
                                        <th>Name</th>
                                        <td>{{ $row->studentName }}</td>
                                    </tr>

                                    <tr>
                                        <th>Contact No</th>
                                        <td>{{ $row->studentContactNo }}</td>
                                        <th>Email Id</th>
                                        <td>{{ $row->studentEmailId }}</td>
                                    </tr>
                                    <tr>
                                        <th>Qualification</th>
                                        <td>{{ $row->studentQualification }}</td>
                                        <th>Address</th>
                                        <td>{{ $row->studentAddress }}</td>
                                    </tr>
                                    <tr>
                                        <th>Reg Date</th>
                                        <td colspan="3">{{ $row->regDate }}</td>
                                    </tr>


                                    </tr>

                                </tbody>
                            </table>
                        @endforeach
                        @if ($deskHistories->isEmpty())
                            <p>No history found for the given student ID.</p>
                        @else
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th colspan="5" style="text-align: center; font-size:22px;">Desk History</th>
                                    </tr>
                                    <tr>
                                        <th>Desk No</th>
                                        <th>Assign Date</th>
                                        <th>Remark</th>
                                        <th>Un-Assign Date</th>
                                        <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deskHistories as $history)
                                        <tr>
                                            <td>{{ $history->deskNumber }}</td>
                                            <td>{{ $history->assignDate }}</td>
                                            <td>{{ $history->assignRemark }}</td>
                                            <td>{{ $history->unassignDate }}</td>
                                            <td>{{ $history->unassignedRemark }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif

                        @if ($deskstatus == '1')
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                                data-target="#unAssign">Unassign Desk</button>
                        @else
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                                data-target="#myModal">Assign Desk</button>
                        @endif


                    </div>
                </div>
            </div> <!-- end row -->



        </div> <!-- container -->

    </div> <!-- End wrapper -->


    <!--Assign Modal --->
    <form method="post" action="/create-desk">
        @csrf
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Assign Desk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <h5 class="font-16">Desk No</h5>
                        <p><select class="form-control" name="deskno" required>

                                <option value="">Select</option>
                                @foreach ($availableDesks as $row)
                                    <option value="{{$row->id}}">{{$row->deskNumber}}</option>
                                @endforeach
                            </select>
                        </p>
                        <h5 class="font-16">Remark </h5>
                        <p>
                            <textarea class="form-control" placeholder="Remark" required="true" name="remark" required></textarea>
                        </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Save
                            changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>


    <!---unassign Modal--->
    <form method="post">
        <div id="unAssign" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">


                        <h5 class="modal-title" id="myModalLabel">unAssignssign Desk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <?php
$sql="SELECT * from tbldeskhistory where stduentId='$sid' order by id desc  limit 1";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $row)
{               ?>
                        <input type="hidden" name="unassigndeskid" value="<?php echo $row->deaskId; ?>">
                        <?php } ?>
                        </p>
                        <h5 class="font-16">Remark </h5>
                        <p>
                            <textarea class="form-control" placeholder="Remark" required="true" name="unassignremark" required></textarea>
                        </p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" name="unsubmit" class="btn btn-primary waves-effect waves-light">Save
                            changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>


    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        $(document).ready(function() {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
