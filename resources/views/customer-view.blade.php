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

    <div class="container">
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
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>