@include('layouts.topmenu')
        <!-- Sidebar -->
@include('layouts.sidebar')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center"> @yield('content_title') </h1>
                </div>
            </div>

            @yield('content')

        </div>
    </div>

</div>


<footer style="background:black">
    <p class="text-center" style="color: #ffff00; padding: 10px 2px">
        Copyright &copy; 2018 By Authority. All Right Reserved. </p>
</footer>
<!-- jQuery -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('admin/js/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('admin/js/startmin.js')}}"></script>

</body>
</html>
