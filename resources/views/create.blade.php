<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-dark text-white text-center p-3">
                    <h2>Hotel Staff Create Form</h2>
                </div>
                <form action="{{route('store')}}" method="post">

                    @csrf

                    <label for="">Enter name</label>
                    <input type="text" name="name" placeholder="enter name" class="form-control">
                    @error('name')
                    <span style="color:red;">{{$message}}</span>
                    @enderror
                    <br>

                    <label for="">Enter aadhar</label>
                    <input type="text" name="aadhar" placeholder="enter  aadhar" class="form-control">
                    @error('aadhar')
                    <span style="color:red;">{{$message}}</span>
                    @enderror
                    <br>
                    <label for="">Enter  email</label>
                    <input type="text" name="email" placeholder="enter  email" class="form-control">
                    @error('email')
                    <span style="color:red;">{{$message}}</span>
                    @enderror
                    <br>
                    <label for="">Enter salary</label>
                    <input type="text" name="salary" placeholder="enter salary" class="form-control">
                    @error('salary')
                    <span style="color:red;">{{$message}}</span>
                    @enderror
                    <br>
                    <input type="submit" class="btn btn-warning" value="create">



                </form>
            </div>

</body>
</html>
