<!doctype html>
<html lang="en">
<head>
        @include('admin.includes.meta')
        <title>NoonPost Dashboard | @yield('title')</title>
        @include('admin.includes.favicon')
        @include('admin.includes.style')
</head>
<body style="min-height: auto !important;">
        <div id="layout-wrapper">
            @include('admin.includes.header')
            @include('admin.includes.sidebar')
            <div class="main-content">
                @yield('body')
            </div>
            @include('admin.includes.footer')
        </div>
        @include('admin.includes.customization')
        @include('admin.includes.customization-overlay')
        @include('admin.includes.script')
        @if (Session::has('message'))
            <script>
                $(document).ready(function(){
                    toastr.success('{{ Session::get('message') }}');
                });
            </script>
        @endif
    </body>
</html>
