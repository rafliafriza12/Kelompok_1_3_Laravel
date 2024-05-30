@extends('layout')

@section('body')
    <div class="wrapper">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-t-0 header-title mb-4 font-bold">Student Details</h4>


                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Reg No</th>
                                    <th>Name</th>
                                    <th>Contact No</th>
                                    <th>Email Id</th>
                                    <th>Qualification</th>
                                    <th>Reg Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($students as $row)
                                    <tr>
                                        <td>{{$row->registrationNumber}}</td>
                                        <td>{{$row->studentName}}</td>
                                        <td>{{$row->studentContactNo}}</td>
                                        <td>{{$row->studentEmailId}}</td>
                                        <td>{{$row->studentQualification}}</td>
                                        <td>{{$row->regDate}}</td>
                                        <td>
                                            <a href="/admin/student-detail/{{$row->id}}"
                                                class="btn btn-primary">Assign/Unassign Desk</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end row -->



        </div> <!-- container -->

    </div> <!-- End wrapper -->


    <!-- jQuery  -->
    {{-- <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
    

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script> --}}

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
