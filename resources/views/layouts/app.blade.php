<!DOCTYPE html>
<html>

    <head>
        <title>shopweb</title>

        <meta charset="UTF-8">

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>

        <style type="text/tailwindcss">
            @layer utilities {
                .content-auto {
                    content-visibility: auto;
                }
            }
        </style>
        @yield('styles')

    </head>

    <body>
        <h1>@yield('title')</h1>
        <div>
            @yield('content')
        </div>
    </body>
</html>
