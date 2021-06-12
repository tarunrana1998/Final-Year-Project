<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('htmlheader')
    @include('layouts.partials.header')
@show

<body>
    @include('layouts.partials.menu')
    <div class="content">
        <div class="wrapper">
            @include('layouts.partials.left_sidebar')
            @yield('content')
            @include('layouts.partials.right_sidebar')
        </div>
    </div>
    @include('layouts.partials.footer')
</body>

</html>
