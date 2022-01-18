<!doctype html>
<html lang="en">
<head>
    @include('front.includes.meta')
    @include('front.includes.favicon')
    <title> NoonPost || @yield('title') </title>
    @include('front.includes.font')
    @include('front.includes.style')
</head>
<body>
    @include('front.includes.loading')
    @include('front.includes.header')
    @yield('body')
    @include('front.includes.footer')
    @include('front.includes.search')
    @include('front.includes.script')
</body>
</html>
