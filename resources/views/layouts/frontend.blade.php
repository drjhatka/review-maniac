<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.css' integrity='sha512-YfFXNd2o6swxA1M0ll6EDdnVdYdE6iz+C6k0Guqf18JW6sVq6Oz9lfbjOso+LMwwNYNxUbp7egkYmC2W/IyeVA==' crossorigin='anonymous'/>
<link href= "{{  asset('css/skitter.css') }}" type="text/css" media="all" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js' integrity='sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.js' integrity='sha512-9fMNGl7JQrJnqWwQ2a4I2xSDXphpn0Mjq0OY1ZMyWwrbYppp2/iybI8beVLvviaxHTcOxewp7bNtt5ou/9tQeA==' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('js/jquery.skitter.js') }}"></script>
    <title>@yield('title')</title>
</head>


<body>
    <div class="container-fluid">
        <div class="col-12">
            @include('partials.navbar')
        </div>

        <div class="col-12">
            @yield('content')
        </div>
    </div>
   
</body>
<script>
    $(document).ready(function () {
        $(function() {
            $('.skitter-large').skitter();
          });
    });

</script>

</html>
