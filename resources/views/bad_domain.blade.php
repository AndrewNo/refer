<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <p>Add bad domain</p>
        <input type="text" class="form-control" id="domain_name">
        <button class="btn btn-info" id="add_domain" data-action="{{ route('add_domain') }}">Add</button>
    </div>
    <div class="col-xs-6">
        <ul id="domain_result">
            @foreach($domains as $domain)
                <li>{{ $domain->name }}</li>
            @endforeach
        </ul>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>