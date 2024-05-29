<!doctype html>
<html lang="en">

<!-- App title -->
<title>Student Study Center Mananagement System || Dashboard</title>

<!--Morris Chart CSS -->
{{-- <link rel="stylesheet" href="../plugins/morris/morris.css"> --}}

<!-- Switchery css -->
{{-- <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" /> --}}

<!-- Bootstrap CSS -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

<!-- App CSS -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

<!-- Modernizr js -->
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
@vite('resources/css/app.css')

</head>



<body>
    @include('includes.header')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('body')

    @include('includes.footer');



    </div> <!-- End wrapper -->


    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
    {{-- <script src="../plugins/switchery/switchery.min.js"></script> --}}

    <!--Morris Chart-->
    {{-- <script src="../plugins/morris/morris.min.js"></script> --}}
    {{-- <script src="../plugins/raphael/raphael.min.js"></script> --}}

    <!-- Counter Up  -->
    {{-- <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script> --}}
    {{-- <script src="../plugins/counterup/jquery.counterup.js"></script> --}}

    <!-- Page specific js -->
    <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

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

    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

</body>

</html>
