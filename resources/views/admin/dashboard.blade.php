    
    <!-- Header -->
    @include('admin.partials.header')
    <!-- END Header -->
    
    <div class="wrapper">
       
   <!-- Sidebar -->
    @include('admin.partials.sidebar')
    <!-- END Sidebar -->

    <div class="main-panel">

       <!-- Navbar -->
        @include('admin.partials.navbar')
        <!-- END Navbar -->

        <div class="content">
            <div class="container-fluid">

                @yield('content')    

            </div>
        </div>


        <!-- Footer -->
        @include('admin.partials.footer')