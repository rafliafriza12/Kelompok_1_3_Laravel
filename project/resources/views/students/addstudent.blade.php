@extends('layout')

@section('body')
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Add Student Detail</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <div class="row">
                            <div class="col-lg-6">

                                <h4 class="header-title m-t-0">Add Student Detail</h4>

                                <div class="p-20">
                                    <form action="/create-student" method="post">
                                        @csrf    
                                        <div class="form-group">
                                            <label for="studentname">Student Registation Number <small>(Auto
                                                    Generated)</small><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" required="true" name="registrationNumber"
                                                value="<?php echo mt_rand(1000000000, 9999999999); ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="studentname">Student Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Student Name"
                                                required="true" name="studentName">
                                        </div>


                                        <div class="form-group">
                                            <label for="studentname">Student Contact Number<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Student Contact Number"
                                                required="true" name="studentContactNo" pattern="[0-9]{10}" maxlength="10"
                                                title="10 numeric characters only">
                                        </div>


                                        <div class="form-group">
                                            <label for="studentname">Student Email<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="Student Email Id"
                                                required="true" name="studentEmailId">
                                        </div>


                                        <div class="form-group">
                                            <label for="studentname">Qualification<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Student Qualification"
                                                required="true" name="studentQualification">
                                        </div>

                                        <div class="form-group">
                                            <label for="emailAddress">Address<span class="text-danger">*</span></label>
                                            <textarea class="form-control" placeholder="Address" required="true" name="studentAddress"></textarea>
                                        </div>
                                        
                                        <div class="form-group text-left m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit"
                                                name="submit">
                                                Add</button>

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


    </div> <!-- End wrapper -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="../plugins/switchery/switchery.min.js"></script>

    <!-- Validation js (Parsleyjs) -->
    <script src="../plugins/parsleyjs/parsley.min.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
@endsection
