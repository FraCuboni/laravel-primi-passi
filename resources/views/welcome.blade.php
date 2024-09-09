<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel#1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .full-height {
            margin: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">:P</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/other">Other</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content-->
    <div class="full-height">
        <div>
            <h1>{{$title}}</h1>
            <h5>{{$subtitle}}</h5>
        </div>
        <div>
            <!-- condizione per creazione tabella -->
            @if($display_table)
            <h4>{{$table_title}}</h4>
            <ul class="list-group">
                @foreach($list as $element)
                <li class="list-group-item">{{$element}}</li>
                @endforeach
            </ul>

            @else
            <h3>Ti aspettavi qualcos'altro? Fatti bastare quello che vedi</h3>
            @endif
        </div>
    </div>
</body>

</html>