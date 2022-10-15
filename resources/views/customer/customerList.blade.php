<!DOCTYPE html>
<html>

<head>
    <title>Customer</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('customercreate') }}">Add Customer</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ url('customer') }}">View Customer</a></li>
            </ul>
        </nav>

        <h1>All Customers</h1>

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Nick Name</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Address</td>
                    <td>State</td>
                    <td>Country</td>
                    <td>Status</td>
                    <td>Created at</td>
                    <td>Updated at</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @if(isset($data))
                @php $i=1; @endphp
                @foreach($data as $key => $value)
                <tr>
                    <td>{!! $i !!}</td>
                    <td>{!! $value->name !!}</td>
                    <td>{!! $value->nickname !!}</td>
                    <td>{!! $value->email !!}</td>
                    @if($value->gender=="M")
                    <td>Male</td>
                    @elseif($value->gender=="F")
                    <td>Female</td>
                    @else
                    <td>Other</td>
                    @endif
                    <td>{!! $value->address !!}</td>
                    <td>{!! $value->state !!}</td>
                    <td>{!! $value->country !!}</td>
                    @if($value->status==1)
                    <td>Active</td>
                    @else
                    <td>In-active</td>
                    @endif
                    <td>{!! $value->created_at !!}</td>
                    <td>{!! $value->updated_at !!}</td>


                    <!-- we will also add show, edit, and delete buttons -->
                    <td>

                        <a href="{{url('customer/')}}/{{ Crypt::encryptString($value->customer_id);}}/{{'show'}} ">View</a>

                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                        <a href="{{url('customer/')}}/{{ Crypt::encryptString($value->customer_id);}}/{{'edit'}} ">Edit</a>

                        <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                        <a href="{{ url('customer/') }}/{{ Crypt::encryptString($value->customer_id);}}/{{'destroy'}}">Delete</a>



                    </td>
                </tr>
                @php $i++; @endphp
                @endforeach
                @endif
            </tbody>
        </table>

    </div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.table-bordered').DataTable({


        });
    });
</script>