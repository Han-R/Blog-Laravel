<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user/layouts/head')

  </head>

  <body>

    <!-- Navigation -->
    @include('user/layouts/header')

    <!-- Main Content -->
    @section('main-content')
      @show

    <!-- Footer -->
@include('user/layouts/footer')
  </body>

</html>
