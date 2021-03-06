<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js">  </script>


    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <title>Document</title>

</head>
<body>

@yield('content')

{{--<a href="{{route('cards')}}">ALl cards</a>--}}


{{--<h4 class="text-center">{{time()}}</h4>--}}

<section class="container" id="pjax-container">

    @include('partials.flash')
</section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.js"></script>
    <script>
      $('#tag_list').select2();
    </script>

    {{--<script>--}}
     {{--$(document).pjax('a','#pjax-container');--}}
    {{--</script>--}}



{{--<script src="/js/bundle.js"></script>--}}

</body>
</html>
