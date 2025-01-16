<!DOCTYPE html>
<html>

<head>
  <title>@yield('title')</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
  @yield('styles')
</head>

<body>
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Toast Message script starts -->
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script>
      //
      @if(Session::has('success-response'))
          toastr.success("{{ session('success-response') }}");
      @endif

      @if(Session::has('error-response'))
          toastr.error("{{ session('error-response') }}");
      @endif

      @if(Session::has('info-response'))
          toastr.info("{{ session('info') }}");
      @endif
    </script>
    <!-- Toast Message Script Ends -->
     @yield('scripts')
</body>

</html>
