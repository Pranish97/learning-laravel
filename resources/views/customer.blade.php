<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        <form action="{{url('/')}}/register" method="post">
          @csrf
            <h1 class="text-center">Registration Form</h1>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                   <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror

</span>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                    <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror

</span>
                
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                    <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror

</span>
                </div>
               
                  
               
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Counrty</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="">
                    <span class="text-danger">
                    @error('country')
                    {{$message}}
                    @enderror

</span>
                   
                    
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">State</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="">
                    <span class="text-danger">
                    @error('state')
                    {{$message}}
                    @enderror

</span>
                    
                </div>
            </div>
            <div class="form-group ">
                <label for="inputEmail4">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="">
                <span class="text-danger">
                    @error('address')
                    {{$message}}
                    @enderror

</span>
                
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Gender</label>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="" />
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="" />
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="" />
                        <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">DOB</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="">
                    <span class="text-danger">
                    @error('dob')
                    {{$message}}
                    @enderror

</span>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>