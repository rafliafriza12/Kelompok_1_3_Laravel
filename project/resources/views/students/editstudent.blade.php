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
                                    <form action="/submit-edit-student/{{$studentDetail->id}}" method="post">
                                        {{-- @foreach ($studentDetail as $row) --}}
                                        @csrf
                                            <div class="form-group">
                                                <label for="studentname">Student Registation Number </label>
                                                <input type="text" class="form-control" required="true"
                                                    name="studentregno" value="{{$studentDetail->registrationNumber}}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="studentname">Student Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="{{$studentDetail->studentName}}"
                                                    required="true" name="studentname">
                                            </div>


                                            <div class="form-group">
                                                <label for="studentname">Student Contact Number<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="{{$studentDetail->studentContactNo}}"
                                                    required="true" name="studentcontactno" pattern="[0-9]{10}"
                                                    maxlength="10" title="10 numeric characters only">
                                            </div>


                                            <div class="form-group">
                                                <label for="studentname">Student Email<span
                                                        class="text-danger">*</span></label>
                                                <input type="email" class="form-control" value="{{$studentDetail->studentEmailId}}"
                                                    placeholder="Student Email Id" required="true" name="studentemail">
                                            </div>


                                            <div class="form-group">
                                                <label for="studentname">Qualification<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="{{$studentDetail->studentQualification}}"
                                                    placeholder="Student Qualification" required="true"
                                                    name="qualification">
                                            </div>

                                            <div class="form-group">
                                                <label for="emailAddress">Address<span class="text-danger">*</span></label>
                                                <textarea type="text" class="form-control" required="true" name="address">{{$studentDetail->studentAddress}}</textarea>
                                            </div>
                                        {{-- @endforeach --}}
                                        <div class="form-group text-left m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit"
                                                name="update">
                                                Update</button>

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

    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
@endsection
