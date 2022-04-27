<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Find Yard Sports  </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- css -->
    @include('layout.client.style')
    @yield('style-custom')

<body>
        @include('layout.client.header')
        @yield('content')
        @include('sweetalert::alert')

    @include('layout.client.footer')
    @include('layout.client.script')
    @yield('script-custom')
</body>

</html>
