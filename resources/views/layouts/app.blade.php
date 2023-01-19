<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="{{ asset("css/style.css") }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
    <body>
        <header>
            @include('components.header')
        </header>
        <main>
            <section>
                @include('components.jumbotron')
            </section>
            <div>
                @yield('components.currseries')
            </div>
            <section>
                @yield('mainpage-main')
            </section>


        </main>

        <footer>
            @include('components.footer')
        </footer>

    </body>
</html>

