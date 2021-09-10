<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract User-Login</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 65px">
               <div class="card-header">
                 <h4>User Login</h4>
               </div>
                <div class="card-body border">
                    <form action="">
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <label for="password"></label>
                            <input type="password" class="form-control" name="email" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-2 p-2">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="{{'register'}}">Doesn't Have Account? Create Account</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
