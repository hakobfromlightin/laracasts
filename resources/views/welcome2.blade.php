<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
<div id="app">
    <header>
        <nav class="navbar navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
                <i class="fa fa-bars"></i>
            </button>
            <div class="container">
                <div class="collapse navbar-toggleable-xs" id="collapseEx2">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <a href="{{ url('/feedback') }}">Click Me</a>
            <div class="row">
                <div class="col-md-7">
                    <div class="view overlay hm-white-light z-depth-1-half">
                        <img src="http://mdbootstrap.com/images/proffesions/slides/socialmedia/img%20(2).jpg"
                             class="img-fluid " alt="">
                        <div class="mask">
                            You've been clicked punk
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-md-5">
                    <h2 class="h2-responsive">We are professionals</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis pariatur quod ipsum atque
                        quam
                        dolorem voluptate officia sunt placeat consectetur alias fugit cum praesentium ratione sint
                        mollitia, perferendis natus quaerat!</p>
                    <a href="" class="btn btn-primary">Get it now!</a>
                </div>
            </div>
            <hr class="extra-margins">

            <div class="row">
                <div class="col-md-4">
                    <div class="card">

                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/images/regular/city/img%20(2).jpg" class="img-fluid"
                                 alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">

                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/images/regular/city/img%20(4).jpg" class="img-fluid"
                                 alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">

                        <div class="view overlay hm-white-slight">
                            <img src="http://mdbootstrap.com/images/regular/city/img%20(8).jpg" class="img-fluid"
                                 alt="">
                            <a href="#">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer primary-color-dark center-on-small-only">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h5 class="title">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>

                <div class="col-md-6">
                    <h5 class="title">Links</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="https://www.lightinstudio.com"> LightInStudio.com </a>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

{{--@if (Route::has('login'))--}}
{{--<a href="{{ url('/login') }}">Login</a>--}}
{{--<a href="{{ url('/register') }}">Register</a>--}}
{{--@endif--}}
