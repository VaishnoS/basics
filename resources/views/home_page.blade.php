<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('home')}}">Learning</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Basic<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('component')}}">Component</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Route<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('demo')}}">Route 1</a></li>
                        <li><a href="{{url('demo2/Vaishno/5')}}">Route 2</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blade Template<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('bt1')}}">BT 1</a></li>
                        <li><a href="{{url('demo2/Vaishno/5')}}">Route 2</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Model<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('modell')}}">Model1</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('customer')}}">Crud With Model<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('customer')}}">Customer</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('helperS')}}">Laravel Helper<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('helperS')}}">Laravel Helper</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('get-sessions')}}">Session<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('get-sessions')}}">Session</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">ORM Relationship<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('member/one-to-one-relationship')}}">One to One Relationship</a></li>
                        <li><a href="{{route('member/one-to-many-relationship')}}">One to Many Relationship</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <h3>Navbar With Dropdown</h3>
        <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>
    </div>

</body>

</html>