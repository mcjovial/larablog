<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes._head')
</head>
<body>
    @include('includes._nav')
    {{-- to display the content of a page --}}
    <div class="container">
        @yield('content')
    </div>

    @include('includes._footer')
    @include('includes._javascript')
</body>
</html>