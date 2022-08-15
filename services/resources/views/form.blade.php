<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
  {!! Form::open([
    'url' => url('/form'),
    'method' => 'post',
    'id' => 'registration',
    'role' => 'form',
    'class' => 'form-group',
    'enctype' => 'multipart/form-data'

    ]) !!}

  
  <div class="form-group">
  <label for="exampleFormControlInput1">Email address</label>
    {{Form::text('name','',[
        'id' => "name",
        'placeholder' => "Enter Your Name",
        'required' => '',
        'data-bv-field' => 'name',
        'class' => 'form-control'

        ])}}
  </div>
  <div class="form-group">
  <label for="exampleFormControlInput1">Country</label>
    {{Form::select('country',[
         "1" => "Nepal",
         "2" => "USA",
         "3" => "Canada"
     ],"2",[
        'id' => "country",
        'required' => '',
        'class' => 'form-control'

        ])}}
  </div>

    {!! Form::close() !!}
  </div>
  </body>
</html>