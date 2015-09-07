<!DOCTYPE html>
<html>
<head>
    <!--- stylesheets --->
    <link rel="stylesheet" href="{{ URL::asset('styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('styles/custom.css') }}">
</head>
<body>

<!--- main navbar --->
<nav class="navbar navbar-inverse">
    <div class="container-fluid container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

    <!--- dynamic content section will be rendered here --->
    @yield('content')

<!--- scripts --->
<script src="{{ URL::asset('js/jquery-1.10.2.js') }}"></script>
</body>
</html>