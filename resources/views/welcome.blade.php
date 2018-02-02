<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <style>
        span.highlight {
            background-color: #C6D9DB; cursor: pointer; }
        span.splink {
            color: #0A5794; cursor: pointer; }
    </style>
</head>
<body>
<div class="container wrapper">
    <div class="row">
        <a href="{{ route('click') }}?param1={{ str_random(5) }}&param2={{ str_random(5) }}" class="btn btn-danger">Click me</a>
        <input id="find" type="text" placeholder="find">

    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>#</th>
                    <th>User Agent</th>
                    <th>Ip</th>
                    <th>Reffer</th>
                    <th>param1</th>
                    <th>param2</th>
                    <th>Errors</th>
                    <th>Bad domains</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                <tbody>
                @foreach($clicks as $click)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $click->ua }}</td>
                        <td>{{ $click->ip }}</td>
                        <td>{{ $click->ref }}</td>
                        <td>{{ $click->param1 }}</td>
                        <td>{{ $click->param2 }}</td>
                        <td>{{ $click->error }}</td>
                        <td>{{ $click->bad_domain }}</td>
                        <td>{{ $click->created_at }}</td>
                        <td>{{ $click->updated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
