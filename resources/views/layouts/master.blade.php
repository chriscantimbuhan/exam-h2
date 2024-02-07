<!DOCTYPE html>

<html>
    <head>
        @include('layouts.partials.head-scripts')
    </head>
    <body>
        <div class='container-fluid'>
            <div class="row">
                @include('layouts.partials.header')
                <div id="main-content">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('layouts.partials.footer-scripts')

        @yield('page-scripts')
    </body>
</html>