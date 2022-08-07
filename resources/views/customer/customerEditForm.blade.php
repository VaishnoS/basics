<!doctype html>
<html lang="en">

<head>
    <title>Update Form</title>
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
        <h1>Edit Customers</h1>
        <form action="{{url('customer/')}}/{{ Crypt::encryptString($data->customer_id);}}/{{'update'}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$data->nickname}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nickname</label>
                        <input type="text" class="form-control" name="nickname" id="nickname" value="{{$data->nickname}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$data->email}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="gender" id="gender" @if($data->gender=="M") {{"checked"}} @endif value="M" class="custom-control-input">
                            <span class="custom-control-indicator" style="font-size: 13px;">Male</span>
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="gender" id="gender" @if($data->gender=="F") {{"checked"}} @endif value="F" class="custom-control-input">
                            <span class="custom-control-indicator" style="font-size: 13px;">Female</span>
                        </label>
                    </div>
                    <div class="col-md-2">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="gender" id="gender" @if($data->gender=="O") {{"checked"}} @endif value="O" class="custom-control-input">
                            <span class="custom-control-indicator" style="font-size: 13px;">Other</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{$data->address}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">State</label>
                        <input type="text" class="form-control" name="state" id="state" value="{{$data->state}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" class="form-control" name="country" id="country" value="{{$data->country}}">
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