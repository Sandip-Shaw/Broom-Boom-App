<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    @include('Admin.partials._header')
    @yield('stylesheets')
   
  </head>
  <body id="page-top">
     <div id="wrapper">

        @include('Admin.partials._sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">

          <div id="content-wrapper" class="d-flex flex-column">
              <!-- Main Content -->
              <div id="content">
                   @include('Admin.partials._navbar')
                  <div>@include('Admin.partials._message')</div>
                   
                   @yield('content')
              </div>
          </div>

     </div>

  @include('Admin.partials._scripts')
	@yield('scripts')
  </body>
</html>