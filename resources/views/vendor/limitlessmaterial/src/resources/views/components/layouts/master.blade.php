<!DOCTYPE html>
<html lang='{{ str_replace('_', '-', app()->getLocale()) }}'>

<head>
    <x-sg-meta />
    <x-sg-title />
    <x-sg-favicon />
    <x-sg-style />
</head>

<body>

    <!-- Navbar content -->
    <x-sg-navbar />
    <!-- Navbar content -->


    <!-- Page content -->
    <div class="page-content">

        <x-sg-sidebar />

        <!-- Main content -->
        <div class="content-wrapper">

            <x-sg-pageheader />


            <!-- Content area -->
            <div class="content">
                {{ $slot }}
            </div>
            <!-- /content area -->

            <x-sg-footer />
            <!-- Footer -->

            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>


    <x-sg-js />
</body>

</html>