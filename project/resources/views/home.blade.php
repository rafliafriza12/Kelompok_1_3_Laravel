<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Student Study Center Mananagement System </title>
    <!-- Favicon-->
    <!-- Core theme CSS (includes Bootstrap)-->
    @vite('resources/css/app.css')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light" style="font-size:30px;">SSCMS</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Home</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="/admin/login">Admin</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active" style="font-size:30px;">Student Study Center Mananagement System
                            </li>


                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid" style="padding-top:2%;">
                <p>SSCMS is a web-based application developed using PHP and MySQL. In this project administrator can add
                    the students and assign the desk for study.</p>
                <p>
                <h5> Desks Status</h5>
                <hr />
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Desk Number</th>
                            <th>Laptop / Charger Socket</th>
                            <th>Currant Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($desks as $desk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $desk->deskNumber }}</td>
                                <td>
                                    @if ($desk->laptopChargerScoket == '')
                                        <span style='color:red'>Not Available</span>
                                    @else
                                        <span style='color:green'>Available</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($desk->isOccupied == '')
                                        <span style='color:green'>Available</span>
                                    @else
                                        <span style='color:red'>Occupied</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                </table>

            </div>
        </div>
        {{-- @if (auth()->user())
            <a href="/logout">
                <button>Sign Out</button>
            </a>
        @endif --}}
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
