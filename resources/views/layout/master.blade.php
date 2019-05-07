<!doctype html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RESTAURANT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            
            /* .about_us_heading{
                background: green;
            } */
            
            

        </style>
    </head>


    <body>
        <div class="wrapper">
 
            <div class="container-fluid">
                @include('layout.navbar')
                
            </div>

            <div>
                @yield('container')
                
            </div>

            <div>

                @yield('footer')

            </div>
        </div>



            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="{{asset('js/master.js')}}"></script>

    </body>
</html>
