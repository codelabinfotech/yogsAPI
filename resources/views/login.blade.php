<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 p-5">
                        <div class="card mb-3 jumbotron" >
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p class="text text-danger text-center">{{ $error }}</p>
                                @endforeach
                            @endif
                            @if(Session::has('emaliNotMatched'))
                                <p class="text text-danger text-center">{{ Session::get('emaliNotMatched') }}</p>
                            @endif
                            @if(Session::has('passwordNotMatched'))
                                <p class="text text-danger text-center">{{ Session::get('passwordNotMatched') }}</p>
                            @endif
                            <div class="row no-gutters">
                              <div class="col-md-4 mt-5">
                                <img src="{{ url('public/logo/logocodelab.png') }}" class="card-img" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login.post') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
    </body>
</html>