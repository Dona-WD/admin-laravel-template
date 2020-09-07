<!doctype html>
<html lang="en">
    @include('backend.layout.header')
    <body data-topbar="dark">
        <div id="app">
            <!-- Begin page -->
            <div id="layout-wrapper">
                <top-navbar></top-navbar>
                <left-side-bar></left-side-bar>
                <right-side-bar></right-side-bar>
                @yield('content')
            </div>
            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
        </div>

        @include('backend.layout.footer')
    </body>
</html>
