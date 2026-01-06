<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
    @include('layout.header')




    <main class="container mt-4">

        @yield('content')

    </main>




    @include('layout.footer')


    
    @yield('js')

</body>

</html>