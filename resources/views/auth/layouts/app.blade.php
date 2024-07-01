<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('webtitle')</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    @vite('resources/css/fonts.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    
  
</head>
<body>


    @yield('layout.header')

    @yield('content')

    @include('layouts.footer')
    


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("RegisterToggle").addEventListener("click", function() {

                document.getElementById("LoginInfo").classList.add("hidden");
                document.getElementById("RegisterInfo").classList.remove("hidden");

                document.getElementById("LoginForm").classList.add("hidden");
                document.getElementById("RegisterForm").classList.remove("hidden");

                document.getElementById("RegisterNow").classList.add("hidden");
                document.getElementById("LoginNow").classList.remove("hidden");

            });

            document.getElementById("LoginToggle").addEventListener("click", function() {
                document.getElementById("LoginInfo").classList.remove("hidden");
                document.getElementById("RegisterInfo").classList.add("hidden");


                document.getElementById("LoginForm").classList.remove("hidden");
                document.getElementById("RegisterForm").classList.add("hidden");

                document.getElementById("RegisterNow").classList.remove("hidden");
                document.getElementById("LoginNow").classList.add("hidden");
            });
        });
    </script>

</body>
</html>