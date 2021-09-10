<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract User-Registeration</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top:35px">
               <div class="card-header">
                <h4>User Registeration</h4>
               </div>
                <div class="card-body border">
                    <form action="{{route('user.create')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" value="{{ old('name') }}" class="form-control" name="name" placeholder="Enter Fullname">
                            <span class="text-danger">@error('name'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password"></label>
                            <input type="password" name="password"  value="{{ old('password') }}" class="form-control" placeholder="Enter Password">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword"></label>
                            <input type="password" class="form-control" name="cpassword" placeholder="Enter Password" value="{{ old('cpassword') }}">
                            <span class="text-danger">@error('cpassword') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-2">Register</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="{{'login'}}">Have Account? Login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
