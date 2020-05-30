<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.css') }}">
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">--}}
        <link rel="stylesheet" href="/lib/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/lib/select2-4.0.4/dist/css/select2.min.css">
        <link rel="stylesheet" href="/css/admin/dashboard.css">

    </head>

    <body>
    @include('admin.layouts.nav')
    <div class="container">
        <div style="margin-top: 20px">
            @yield('content')
        </div>
    </div>

        <!-- Library -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="/lib/jquery/jquery-3.2.1.min.js"></script>
    <script src="/lib/mdb/js/popper.min.js"></script>
    <script src="/lib/tether-1.3.3/dist/js/tether.min.js"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="/lib/select2-4.0.4/dist/js/select2.js"></script>
    <script type="text/javascript" src="/jquery/font-form.js"></script>

    <script>
    <!-- Custom JS-->
    $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });

        </script>
        @stack('script')
    </body>
</html>