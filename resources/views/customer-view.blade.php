<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/home')}}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/customer')}}">Customer <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container">
        <a href="{{route('customer.create')}}">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer as $customers)
                <tr>
                    <td>{{$customers->name}}</td>
                    <td>{{$customers->email}}</td>
                    <td>{{$customers->Country}}</td>
                    <td>{{$customers->State}}</td>
                    <td>{{$customers->address}}</td>
                    <td>
                        @if($customers->gender=="M")
                        Male
                        @elseif($customers->gender=="F")
                        Female
                        @else
                        Other
                        @endif
                    </td>
                    <td>{{$customers->dob}}</td>
                    <td>
                        @if($customers->Status == "1")
                        <a href="">
                            <span class="badge badge-success">Active</span </a>
                            @else
                            <a href="">
                                <span class="badge badge-danger">Inctive</span 
                            </a>
                            @endif

                    </td>


                    <td>
                        <!-- <a href="{{url('/customer/delete')}}/{{$customers->customer_id}}"><button class="btn btn-danger">Delete</button></a> -->
                        <a href="{{route('customer.delete',['id'=> $customers -> customer_id])}}"><button class="btn btn-danger">Delete</button></a> 
                        <button class="btn btn-primary">Edit</button>
                    </td>
                    @endforeach
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>