<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
        @include('includes.footer')
    </footer>

</body>
</html>