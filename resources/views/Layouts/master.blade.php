<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Farid - @yield("header")</title>
        <link rel="icon" type="image/x-icon" href="{{ asset("assets/favicon.ico") }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{ asset("css/styles.css") }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            @include("Components.header")
            @yield("content")
        </main>
           @include("Components.footer")
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset("js/scripts.js") }}"></script>
        <script type="text/javascript">
            function pageLoad() {
                var loc = window.location.href.split('/');
                var page = loc[loc.length - 1];
                $('ul.nav a').each(function (i) {
                    var href = $(this).attr('href');
                    if (href.indexOf(page) !== -1) {
                        $('ul.nav li.active').removeClass('active');
                        $(this).parent().addClass('active');
                    }
                });
            }
        </script>
    </body>
</html>
