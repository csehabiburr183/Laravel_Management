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

@include('layouts.footer')