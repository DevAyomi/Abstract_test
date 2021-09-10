<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!--Bootstrap css cdn-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>
    <body class="antialiased">

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                 <a class="navbar-brand" href="#">Abstract09 Community</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                     @if (Route::has('login'))
                        <div class="navbar-nav ml-auto">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
              </div>
            </div>
          </nav>

          <section>
              <div class="container">
                  <div class="row">
                      <div class="col-md-8 mt-5">
                          <div class="card-header bg-dark text-light">
                             Welcome to Abstract 09
                          </div>
                          <div class="card-body bg-light p-5">
                              If there's one thing you learn by working on a lot of different Web sites, it's that almost any design idea--no matter how appallingly bad--can be made usable in the right circumstances, with enough effort.
                          </div>
                          <div class="card-footer">
                              Developed By Devayo
                          </div>
                      </div>
                        <div class="col-md-4 mt-5">
                          <div class="card-header">Developer's Picture</div>
                          <div class="card-body">
                              <img src="{{ url('./images/developer.jpg')}}" alt="developer Picture" style="width: 310px;height: 250px">
                          </div>
                          <div class="card-footer">
                            Giving up is never an option
                          </div>
                      </div>
                  </div>
              </div>
          </section>


          <!--Javascript Cdn And files-->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

         <script>

         </script>
    </body>
</html>
