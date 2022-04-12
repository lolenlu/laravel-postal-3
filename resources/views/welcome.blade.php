<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guess Number</title>
    <link rel="shortcut icon" href="https://postal3.es/wp-content/themes/postal3-2/favicon.ico" />	
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body class="h-100">
    <div class="container mt-5">
        <div class="row">
            <div class="mt-auto mw-3">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>Guess Number</h1>
                        <form method="POST" action="{{ url('calc')}}">
                            @csrf
                            <div class="form-group">
                                <label for="number">Number</label>
                                <input class="form-control" type="text" placeholder="Enter number" id="number" name="number" required autofocus>
                            </div>
                            <div class="row mt-4">
                                <div class="col-8 text-left">
                                    @if (isset($result))
                                    <div class="alert alert-success h-100" role="alert">
                                        This result is {{ $result }} in {{$attempts}} attempts. Great!
                                    </div>
                                    @endif
                                </div>
                                <div class="col-4 text-right">
                                    <input type="submit" class="btn btn-primary w-100 h-100" value=" Go! " />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}" defer></script>
</body>

</html>