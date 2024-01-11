<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XRay </title>
    <!-- Favicon -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>XRay </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
              integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Favicon -->
        @include('partial.head')
    </head>
    <body class="sidebar-main-menu">
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <div class="wrapper">
        <!-- Sidebar  -->
        @include('partial.sidebar')
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
            @include('partial.header')
            <!-- TOP Nav Bar END -->
            @yield('content')
            <!-- Footer -->
            @include('partial.footer')
            <!-- Footer END -->
        </div>
    </div>
    @include('partial.bodyJs')
    </body>
    </html>

