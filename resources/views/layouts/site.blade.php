<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('stylesheets/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('stylesheets/main.css') }}" />
  </head>
  <body>
    <div id="wrapper">
      <main>
@yield('main')
      </main>
      <aside>
@yield('aside')
      </aside>
    </div>
  </body>
</html>