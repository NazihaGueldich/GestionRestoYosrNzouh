<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
    <div class="container-scroller">

        @include('layout.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layout.aside')
            @yield('content')

        </div>

    </div>

    @include('layout.footer')
</body>

</html>
