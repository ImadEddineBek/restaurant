<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trofe</title>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/Lightbox-Gallery.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="{{ url('/css/Responsive-Form.css') }}">
    <link rel="stylesheet" href="{{ url('/css/sticky-dark-top-nav-with-dropdown.css') }}">
    <script src="https://maps-api-ssl.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    {{--<link rel="stylesheet" href="{{ url('/css/Neon-Button.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ url('/css/Pretty-Header.css') }}">--}}
    <link rel="stylesheet" href="{{ url('/css/Parallax-Effect-Template-Landing-Page-Bootstrap-4.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{ url('/fonts/simple-line-icons.min.css') }}">

{{--<link rel="stylesheet" href="{{ url('/css/Projects-Clean.css') }}">--}}
{{--<link rel="stylesheet" href="{{ url('/css/styles.css') }}">--}}
<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
{{--<div class="navbar navbar-expand-md navbar-dark">--}}
{{--@if (Route::has('login'))--}}
{{--<div class="top-right links">--}}
{{--@auth--}}
{{--<a href="{{ url('/admin') }}">Admin</a>--}}
{{--@else--}}
{{--<a href="{{ route('login') }}">Login</a>--}}
{{--<a href="{{ route('register') }}">Register</a>--}}
{{--@endauth--}}
{{--</div>--}}
{{--@endif--}}

{{--</div>--}}
<nav class="navbar navbar-light navbar-expand-lg navbar-fixed-top navigation-clean-button"
     style="background-color:#3F6897;">
    <div class="container"><a class="navbar-brand" href="#"><span><img src="{{url("img/logo.png")}}"
                                                                       style="width:212px;">&nbsp;</span>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
        <div
                class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav nav-right">
                <li class="nav-item" role="presentation"><a style="color: #A8D5FC;" class="nav-link active" href="">home </a></li>
                <li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"
                                        href="#">Services </a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Price
                            Packages</a><a class="dropdown-item" role="presentation" href="#">Order Services</a><a
                                class="dropdown-item" role="presentation" href="#">Custom Request</a></div>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">about </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">faq </a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">contact </a></li>
            </ul>
            <p class="ml-auto navbar-text actions"><a href="login.html" class="login">Log In</a> <a
                        class="btn btn-light action-button" role="button" href="signup.html">Sign Up</a></p>
        </div>
    </div>
</nav>
<div class="ParalaxImage1">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #5991CF;font-size:100px; font-family: 'Ancient Geek',sans-serif">
                        RESTaurant</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <br/>
                        <em style="color: #3F6897;font-size: 50px; font-family: 'Ancient Geek',sans-serif">EPISTROFE -
                            RETURN</em>
                        <br/>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="page" style="background-color: #A8D5FC">
    <section class="clean-block about-us">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                    mattis vitae leo.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                                                  src="{{url('/img/food pictures/basil.jpg')}}">
                        <div class="card-body info">
                            <h4 class="card-title">Basil</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            {{--<div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>--}}
                            <button class="btn-dark"> view more</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                                                  src="{{url('/img/food pictures/burrito.jpg')}}"
                                                                  alt="iuzefhfejhefhefhqekg">
                        <div class="card-body info">
                            <h4 class="card-title">Burrito</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            {{--<div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>--}}
                            <button class="btn-dark"> view more</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                                                                  src="{{url('/img/food pictures/steak.jpg')}}">
                        <div class="card-body info">
                            <h4 class="card-title">Steak</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            {{--<div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>--}}
                            <button class="btn-dark"> view more</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="photo-gallery" style="background-color: #A8D5FC">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Gallery</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh
                    erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{url('/img/food pictures/steak.jpg')}}"
                                                                data-lightbox="photos"><img class="img-fluid"
                                                                                            src="{{url('/img/food pictures/burrito.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{url('/img/food pictures/steak.jpg')}}"
                                                                data-lightbox="photos"><img class="img-fluid"
                                                                                            src="{{url('/img/food pictures/steak.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{url('/img/food pictures/steak.jpg')}}"
                                                                data-lightbox="photos"><img class="img-fluid"
                                                                                            src="{{url('/img/food pictures/steak.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{url('/img/food pictures/steak.jpg')}}"
                                                                data-lightbox="photos"><img class="img-fluid"
                                                                                            src="{{url('/img/food pictures/steak.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{url('/img/food pictures/steak.jpg')}}"
                                                                data-lightbox="photos"><img class="img-fluid"
                                                                                            src="{{url('/img/food pictures/steak.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{url('/img/food pictures/steak.jpg')}}"
                                                                data-lightbox="photos"><img class="img-fluid"
                                                                                            src="{{url('/img/food pictures/steak.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{url('/img/food pictures/steak.jpg')}}"
                                                                data-lightbox="photos"><img class="img-fluid"
                                                                                            src="{{url('/img/food pictures/steak.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{url('/img/food pictures/steak.jpg')}}"
                                                                data-lightbox="photos"><img class="img-fluid"
                                                                                            src="{{url('/img/food pictures/steak.jpg')}}"></a>
                </div>
            </div>
        </div>
    </div>


    <div id="reservation">

        {{--<div class="ParalaxImage2">--}}
        {{--<div>--}}
        {{--<div class="container col-md-12 col-lg-12">--}}
        {{--<div class="intro">--}}
        {{--<h2 class="text-center">Gallery</h2>--}}
        {{--<p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>--}}
        {{--</div>--}}
        {{--<div>--}}
        {{--<form method="POST" action="{{ route('home') }}">--}}
        {{--<div class="form-group" style="background-color:#ffffff;">--}}
        {{--<div id="formdiv">--}}
        {{--<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">--}}
        {{--<div class="col-md-8 offset-md-1">--}}
        {{--<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Name </strong></p>--}}
        {{--</div>--}}
        {{--<div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="name" placeholder="Name" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>--}}
        {{--</div>--}}
        {{--<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">--}}
        {{--<div class="col-md-8 offset-md-1">--}}
        {{--<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Restaurant</strong></p>--}}
        {{--</div>--}}
        {{--<div class="col-md-10 offset-md-1"><select class="form-control" name="gender" style="font-family:Roboto, sans-serif;"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>--}}
        {{--</div>--}}
        {{--<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">--}}
        {{--<div class="col-md-8 offset-md-1">--}}
        {{--<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Reservation Date</strong></p>--}}
        {{--</div>--}}
        {{--<div class="col-md-10 offset-md-1"><input class="form-control" type="date" name="birthDate" style="font-family:Roboto, sans-serif;"></div>--}}
        {{--</div>--}}
        {{--<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">--}}
        {{--<div class="col-md-8 offset-md-1">--}}
        {{--<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Number Places</strong></p>--}}
        {{--</div>--}}
        {{--<div class="col-md-10 offset-md-1"><select class="form-control"><optgroup label="This is a group"><option value="12" selected="">two</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>--}}
        {{--</div>--}}
        {{--<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">--}}
        {{--<div class="col-md-8 offset-md-1">--}}
        {{--<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Start Time</strong></p>--}}
        {{--</div>--}}
        {{--<div class="col-md-10 offset-md-1"><select class="form-control"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>--}}
        {{--</div>--}}
        {{--<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">--}}
        {{--<div class="col-md-8 offset-md-1">--}}
        {{--<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>End Time (optional)</strong></p>--}}
        {{--</div>--}}
        {{--<div class="col-md-10 offset-md-1" style="font-family:Roboto, sans-serif;"><input class="form-control" type="text" placeholder="Name" style="margin-left:0px;"></div>--}}
        {{--</div>--}}
        {{--<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">--}}
        {{--<div class="col-md-8 offset-md-1">--}}
        {{--<p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Optionals</strong></p>--}}
        {{--</div>--}}
        {{--<div class="col-md-10 offset-md-1" style="font-family:Roboto, sans-serif;">--}}
        {{--<div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Parking</label></div>--}}
        {{--<div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Smoker</label></div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">--}}
        {{--<div class="col-12 col-md-4 offset-md-4"><button class="btn btn-light btn-lg" type="reset" style="font-family:Roboto, sans-serif;">Clear </button><button class="btn btn-light btn-lg" type="submit" style="margin-left:16px;">Submit </button></div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</form>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="ParalaxImage2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Reserve') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ url('api/Reservations') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               name="name" value="{{ old('name') }}" required>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="restaurant_id"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Restaurant') }}</label>

                                    <div class="col-md-6">
                                        <select id="restaurant_id"
                                                class="form-control{{ $errors->has('restaurant_id') ? ' is-invalid' : '' }}"
                                                name="restaurant_id"
                                                style="font-family:Roboto, sans-serif;">
                                            <option value="1" selected>Italien</option>
                                            <option value="2">American</option>
                                            <option value="3">Mexican</option>
                                            <option value="4">Chinese</option>
                                            <option value="5">Indian</option>
                                        </select>
                                        @if ($errors->has('restaurant_id'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('restaurant_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nb_places"
                                           class="col-md-4 col-form-label text-md-right">{{ __('nb places') }}</label>

                                    <div class="col-md-6">
                                        <select id="nb_places"
                                                class="form-control{{ $errors->has('nb_places') ? ' is-invalid' : '' }}"
                                                name="nb_places"
                                                style="font-family:Roboto, sans-serif;">
                                            <option value="1" selected>One</option>
                                            <option value="2">Two</option>
                                            <option value="5">Five</option>
                                        </select>

                                        @if ($errors->has('nb_places'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nb_places') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="start"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Start : ') }}</label>

                                    <div class="col-md-6">
                                        <input id="start" type="datetime-local"
                                               class="form-control{{ $errors->has('start') ? ' is-invalid' : '' }}"
                                               name="start" value="{{ old('start') }}" required autofocus>

                                        @if ($errors->has('start'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('start') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="end"
                                           class="col-md-4 col-form-label text-md-right">{{ __('End : ') }}</label>

                                    <div class="col-md-6">
                                        <input id="end" type="datetime-local"
                                               class="form-control{{ $errors->has('end') ? ' is-invalid' : '' }}"
                                               name="end" value="{{ old('end') }}" required autofocus>

                                        @if ($errors->has('end'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('end') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="map" style="width: 100%; height: 400px;"></div>

    <script type="text/javascript">
        var locations = [
            ['Italian', 36.244199, 6.572259, 4],
            ['Mexican', 36.259066, 6.705412, 5],
            ['American', 36.283264, 6.480600, 3],
            ['Indian', 36.328704, 6.578698, 2],
            ['Chinese', 36.363167, 6.638286, 1]
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: new google.maps.LatLng(36.3, 6.5),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#263c3f'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#6b9a76'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#38414e'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#212a37'}]
                },
                {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9ca5b3'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#746855'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#1f2835'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#f3d19c'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'geometry',
                    stylers: [{color: '#2f3948'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#17263c'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#515c6d'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#17263c'}]
                }
            ],
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    </script>
</main>
<footer class="page-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Get started</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Downloads</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>About us</h5>
                <ul>
                    <li><a href="#">Company Information</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Support</h5>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help desk</a></li>
                    <li><a href="#">Forums</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Legal</h5>
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2018 Copyright Text</p>
    </div>
</footer>
<script src="{{url('js/theme.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>
</html>
