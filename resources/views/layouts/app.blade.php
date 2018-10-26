<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>M`ka Cafeteria, Bar, Restaurante</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <link rel="canonical" href="http://meka.com"/>
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <link href="{{asset('material/css/material-kit.min.css?v=2.1.0')}}" rel="stylesheet" />
      <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body class="login-page sidebar-collapse">
    @yield('content')
    <script src="{{asset('material/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('material/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('material/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('material/js/plugins/moment.min.js')}}"></script>

    <script src="{{asset('material/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>

        <!--script src="{{asset('material/js/plugins/nouislider.min.js')}}" type="text/javascript"></script-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

    <script src="{{asset('material/js/plugins/bootstrap-tagsinput.js')}}"></script>
  
    <script src="{{asset('material/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>

    <script src="{{asset('material/js/plugins/jasny-bootstrap.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('material/js/plugins/jquery.flexisel.js')}}" type="text/javascript"></script>

    <script src="{{asset('material/js/material-kit.min.js?v=2.1.0')}}" type="text/javascript"></script>
  

    <script>
        $(document).ready(function(){
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','//connect.facebook.net/en_US/fbevents.js');

            try{
                fbq('init', '111649226022273');
                fbq('track', "PageView");

            }catch(err) {
                  console.log('Facebook Track Error:', err);
            }

        });
    </script>

    <script>
        $(document).ready(function() {
            materialKit.initFormExtendedDatetimepickers();

                /*materialKit.initSliders();*/
        });
    </script>
</body>
</html>
