<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row bg-success" style="text-align: center">
        Success
    </div>
    <div class="row" style="margin-top: 10px;">
        <table class="table table-hover">
            <caption>
                Info about click
            </caption>
            <tr>
                <td>ip -</td>
                <td>{{ $click->ip }}</td>
            </tr>
            <tr>
                <td>user agent -</td>
                <td>{{ $click->ua }}</td>
            </tr>
            <tr>
                <td>param1 -</td>
                <td>{{ $click->param1 }}</td>
            </tr>
            <tr>
                <td>param2 -</td>
                <td>{{ $click->param2 }}</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>