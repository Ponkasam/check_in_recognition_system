<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.theme.admintheme.head')
</head>

<body>
    <div id="wrapper">
        @include('layouts.theme.admintheme.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.theme.admintheme.navbar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.theme.admintheme.footer')
</body>

</html>