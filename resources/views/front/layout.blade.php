<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Poppins:wght@100;300;400;600&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('website/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/style En.css')}}">
    @yield('css')
    <style>
        .yellowbtn:hover{
            color: var(--color3);
            animation: shakeit 1s infinite alternate ease;

        }
        .bluebtn:hover{
            color: var(--color3);
            animation: shakeit2 1s infinite alternate ease;

        }
        .yellowbtn {


            background-color: var(--color2);
            color: var(--color3);
            padding: 8px 25px;
            font-size: 1rem;
            text-transform: uppercase;
            margin: 5px;
            background-color: var(--color2);
            color: var(--color3);
            padding: 8px 25px;
            font-size: 1rem;
            text-transform: uppercase;

        }
        .bluebtn {


            background-color: var(--color);
            color: var(--color3);
            padding: 8px 25px;
            font-size: 1rem;
            text-transform: uppercase;
            margin: 5px;
            background-color: var(--color);
            color: var(--color3);
            padding: 8px 25px;
            font-size: 1rem;
            text-transform: uppercase;

        }

    </style>
    <title>{{\App\Models\Setting::find(1)->name}} || @yield('title') </title>
</head>
<body>
<nav class="navbar navbar-expand-lg  nav-line bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('website/assets/img/logo-color.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-toggler-icon2">
                    <i class="fa-solid fa-bars"></i>
                </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link2 nav-home active" aria-current="page" href="{{url('/')}}">{{__('lang.Home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link2" href="{{url('stores')}}">{{__('lang.Stores')}}</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link nav-link2" href="#">blogs</a>--}}
{{--                </li>--}}
                @foreach(\App\Models\Page::where('is_active','active')->where('position','!=','footer')->get() as $Page)
                <li class="nav-item">
                    <a class="nav-link nav-link2" href="{{url('Page',$Page->id)}}" tabindex="-1" aria-disabled="true">{{$Page->title}}</a>
                </li>
                @endforeach
                <li class="nav-item">
                    <a class="nav-link nav-link2" href="#" tabindex="-1" aria-disabled="true">contactUs</a>
                </li>
                @if(Auth::guard('web')->check())

                    <li class="nav-border last-li-img">
                        <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('website/assets/img/user.png')}}" alt="">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>

                    </li>
                @elseif(Auth::guard('seller')->check())

                        <li class="nav-border last-li-img">
                            <div class="dropdown">
                                <a class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('website/assets/img/user.png')}}" alt="">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{url('Dashboard_Seller')}}">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{url('Product_Setting')}}">Product</a></li>
{{--                                    <li><a class="dropdown-item" href="{{url('Product_setting')}}">Profile</a></li>--}}
                                    <li><a class="dropdown-item" href="{{url('logout')}}">logout</a></li>
                                </ul>
                            </div>

                        </li>

                @else
                <li class="nav-item d-flex">
                    <a  class="yellowbtn  btn nav-link nav-link2" href="{{url('login')}}" tabindex="-1" aria-disabled="true">
                        <i class="fa fa-user"></i>
                        Login</a>
                    <a class="bluebtn  btn nav-link nav-link2" href="{{url('register')}}" tabindex="-1" aria-disabled="true">
                        <i class="fa fa-user"></i>
                        Register</a>

                </li>
                    <li class="nav-item ">
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- end header -->
@yield('content')



<!-- thisi is footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-12 mt-2">
                <ul class="left-ul">
                    <li>
                        <img src="{{asset('website/assets/img/logo-white.png')}}" alt="">
                    </li>
                    <li class="ps-4 mb-2">stay in touch</li>
                    <li class="social ps-4 mb-2">
                        <span class="m-1">
                        <a target="_blank"  href="{{\App\Models\Setting::findOrFail(1)->facebook}}">  <i class="fa-brands fa-facebook-f">
                            </i>
                        </a>
                        </span>
                        <span class="m-1">
                            <a target="_blank"  href="{{\App\Models\Setting::findOrFail(1)->youtube}}">
                            <i class="fa-brands fa-youtube"></i>
                                </a>
                        </span>
                        <span class="m-1">
                            <a target="_blank"  href="{{\App\Models\Setting::findOrFail(1)->twitter}}">
                            <i class="fa-brands fa-twitter"></i>
                                </a>
                           </span>
                        <span class="m-1">
                            <a target="_blank" href="{{\App\Models\Setting::findOrFail(1)->instagram}}">
                            <i class="fa-brands fa-instagram"></i>
                                </a>
                           </span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 col-12 mt-2">
                <ul>
                    <li class="text-uppercase mb-4">quick links</li>
                    <li class="mb-2"><a href="#">about</a></li>
                    <li class="mb-2"><a href="#">home</a></li>
                    <li class="mb-2"><a href="#">pricing</a></li>
                    <li class="mb-2"><a href="#">location</a></li>
                    <li class="mb-2"><a href="#">office</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 col-12 mt-2">
                <ul>
                    <li class="text-uppercase mb-4">important links</li>
                    @foreach(\App\Models\Page::where('is_active','active')->where('position','!=','header')->get() as $Page)
                        <li class="mb-2"><a href="{{url('Page',$Page->id)}}">{{$Page->title}}</a></li>
                    @endforeach
                    <li class="mb-2"><a href="#">oilicy</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 col-12 mt-2">
                <ul>
                    <li class="text-uppercase mb-4">contact</li>
                    <li class="mb-2">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-1">
                                <span class="me-2 text-center"><i class="fa-solid fa-phone"></i></span>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10">
                                <span class="">
                                    <a target="_blank"  href="tel:{{\App\Models\Setting::findOrFail(1)->phoe}}">{{\App\Models\Setting::findOrFail(1)->phone}}</a>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-1">
                                <span class="me-2 text-center"><i class="fa-solid fa-envelope"></i></span>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10">
                                <span>
                                    <a target="_blank"  href = "mailto:{{\App\Models\Setting::findOrFail(1)->email}}">{{\App\Models\Setting::findOrFail(1)->email}}</a>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-1">
                                <span class="me-2 text-center"><i class="fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10">
                                <span> {{\App\Models\Setting::findOrFail(1)->address}}</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>








<script src="{{asset('website/assets/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('website/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('website/assets/js/script.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
$message = session()->get("message");
?>
@if( session()->has("message") )

<script>
    Swal.fire(
        'Success!',
        '{{session()->get("message") }}',
        'success'
    )

</script>
@endif

@foreach ($errors->all() as $error)
    <script>
        Swal.fire({
            icon: 'error',
            title: "{{__('lang.error')}}",
            text: "{{ $error }}",
            type: "error",
            timer: 3000,
            showConfirmButton: false
        });

    </script>
@endforeach

@if( session()->get("error") )
    <?php
    $e = session()->get("error");
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "{{$e}} ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif
@yield('js')

</body>
</html>
