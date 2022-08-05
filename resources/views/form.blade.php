<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <form action="{{url('/')}}/customer" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">Registration</h1>
            <x-input type="text" label="Name" name="name" />
            <x-input type="email" label="Email Address" name="email" />
            <x-input type="password" label="Password" name="password" />
            <x-input type="password" label="Confirm Password" name="password_confirmation" />
            <x-input type="text" label="Country" name="country" />
            <x-input type="text" label="State" name="state" />
            <x-input type="text" label="Address" name="address" />
            <x-input type="radio" label="Gender" name="gender" />
            <x-input type="date" label="DOB" name="dob" />


            <button class="btn btn-primary">
                Submit
            </button>

        </div>
    </form>

</body>

</html>