<!DOCTYPE html>
<html lang="en">
<head>

  @include('include.meta')
  
  <title>@yield('title') | ayobelajarit.com</title>

  
  <link rel="stylesheet" type="text/css" href="{{ asset('/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/dist/css/style.css') }}">

  {{-- Link font poppins --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


  {{-- Favicon --}}
  <link rel="apple-touch-icon" href="favicon.png">
  <link rel="shortcut icon" href="" type="image/x-icon">

  @stack('before-style')

  @stack('after-style')

</head>
<body>

   
    @include('include.header')
      @yield('content')


    @include('include.footer')

 

  @stack('before-script')
  {{-- Script --}}

  @include('include.script')


  @stack('after-script')
</body>
</html>