<!doctype html>
<html lang="en">

<head>
    <title>Crete Form</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('customercreate') }}">Add Customer</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ url('customer') }}">View Customer</a></li>
            </ul>
        </nav>
        <h1>Add Customers</h1>
        <form action="{{route('store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <x-forminput labelName="Name" type="text" name="name" id="name" placeholder="Enter Your Name" />
                </div>
                <div class="col-md-6">
                    <x-forminput labelName="Nickname" type="text" name="nickname" id="nickname" placeholder="Enter Your Nickname" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <x-forminput labelName="Email" type="email" name="email" id="email" placeholder="Enter Your Email" />
                </div>
                <div class="col-md-6">
                    <div class="col-md-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="gender" id="gender" value="M" class="custom-control-input">
                            <span class="custom-control-indicator" style="font-size: 13px;">Male</span>
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="gender" id="gender" value="F" class="custom-control-input">
                            <span class="custom-control-indicator" style="font-size: 13px;">Female</span>
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="gender" id="gender" value="O" class="custom-control-input">
                            <span class="custom-control-indicator" style="font-size: 13px;">Other</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <x-forminput labelName="Address" type="text" name="address" id="address" placeholder="Enter Your Address" />
                </div>
                <div class="col-md-6">
                    <x-forminput labelName="State" type="text" name="state" id="state" placeholder="Enter Your state" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <x-forminput labelName="Country" type="text" name="country" id="Country" placeholder="Enter Your Country" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <x-forminput labelName="Password" type="password" name="password" id="password" placeholder="Enter Your Password" />
                    </div>
                </div>
            </div>
            <div class="row" style="float:right">
                <button type="submit" class="btn btn-danger">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>

    </div>
</body>

</html>