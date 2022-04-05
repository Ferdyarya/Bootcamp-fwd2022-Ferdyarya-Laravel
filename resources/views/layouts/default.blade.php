<!DOCTYPE html>
<html lang="en">
  <head>
            @include('includes.frontsite.meta')
    <title> @yield('title') | MeetDoctor</title>

    @stack('before-style')
        @include('includes.frontsite.style')
    @stack('after-style')


  </head>
  <body> 
    @include('component.frontsite.header')
        @yield('content')
    @include('component.frontsite.footer')

    @stack('before-style')
        @include('includes.frontsite.script')
    @stack('after-style')

    <!-- modals -->
    <!-- if you have a modals create here -->

  </body>
</html>