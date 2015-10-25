<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
    <!-- Place favicon.ico in the root directory -->


    <link rel="stylesheet" href="/css/960min/960.css">
    <link rel="stylesheet" href="/css/960min/960_12_col.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header id="header">
    <div class="container_12">
        <div id="logo" class="grid_6">
            <a href="http://www.mytvindex.com"> <img src="/images/logo.png" alt="my TV Index logo"> </a>
        </div>

        <div class="navbar-form grid_6">
            {!! Form::open(['url' => 'showSearch']) !!}

                {!! Form::text('search', null, ['class' => 'form-control']) !!}

                {!! Form::submit('Search', ['class' => 'btn btn-primary form-control']) !!}

            {!! Form::close() !!}
        </div>
    </div>
</header>

<div id="results" class="container_12">
  {{--  @if($shows)
        @foreach($shows as $show)
            <h2>
                <a href="{{ action('TaskController@show', [$task->id]) }}">
            {{ $task->itemName }}
            </a>
            </h2>

            <div class="body">{{ $task->comment }}</div>
        @endforeach
    @endif--}}
</div>

<footer></footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!-- <script src="js/plugins.js"></script>
<script src="js/main.js"></script> -->


</body>
</html>