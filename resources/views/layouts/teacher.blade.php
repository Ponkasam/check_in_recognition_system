<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.theme.teachertheme.head')
</head>

<body>
    <div id="wrapper">
        @include('layouts.theme.teachertheme.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.theme.teachertheme.navbar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.theme.teachertheme.footer')
</body>

</html>