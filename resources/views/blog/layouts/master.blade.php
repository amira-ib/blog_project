<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- library -->
        <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/lib/mdb/css/mdb.min.css">
        <link rel="stylesheet" href="/lib/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-orange.min.css">

        <!-- custom -->
        <link rel="stylesheet" href="/css/blog/fontstyle.css">
    </head>

    <body>
        @include('blog.layouts.nav')
        <div class="article-position">
            <div class="demo-blog mdl-layout">
                <main class="mdl-layout__content">
                    @yield('content')
                </main>
            </div>
        </div>
        @include('blog.layouts.footer')


        <!-- library -->
        <script src="/lib/jquery/jquery-3.2.1.min.js"></script>
         <script src="/lib/mdb/js/popper.min.js"></script>
        <script src="/lib/tether-1.3.3/dist/js/tether.min.js"></script>
        <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="/lib/mdb/js/mdb.js"></script>
        <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    </body>
</html>