<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>BaseBall Library</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Skranji:700" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/application.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
    </head>

    <body>

        @include('commons.navbar')
        @include('commons.sidebar')
        <section id="right">
        
            @include('commons.error_messages')
            
            @yield('content')
            
        </div>
        </section>
        
        @include('commons.footer')

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>