<!DOCTYPE html>
<html lang="en" dir="ltr">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Quicklab') }}</title>

    <!-- CSS Links -->
    <link rel="stylesheet" href="{{ asset('admin/css/admin-custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">


    <!-- Bootstrap -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

</head>

<body>

    @include('layouts.inc.adminheader')

    <div class="row main-con" id="body-row">

        @include('layouts.inc.adminsidebar')

    <!-- Content Start -->
        <div class="col p-4">
            @yield('content')
        </div>
    <!-- Content End -->

    </div>
    <!--body-row END -->


    <!-- Scripts -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('.nav_btn').click(function() {
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <!-- Footer start  -->
    @include('layouts.inc.adminfooter')
    <!-- Footer End  -->

    @yield('scripts')
</body>

</html>