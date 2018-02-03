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
            background-color: #C6D9DB;
            cursor: pointer;
        }

        span.splink {
            color: #0A5794;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container wrapper">
    <div class="row">
        <a href="{{ route('click') }}?param1={{ str_random(5) }}&param2={{ str_random(5) }}" class="btn btn-danger">Click
            me</a>
        <input id="find" type="text" placeholder="find">
        <a href="{{ route('bad_domain') }}" class="btn btn-success">Add bad domain</a>

    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>#
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc"
                                                     data-action="{{ route('sort') }}" data-column="id" class="order">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-column="id" data-order="desc"
                                    style="cursor: pointer">&#x2193;</span></div>
                    </th>
                    <th>User Agent
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc"
                                                     data-action="{{ route('sort') }}" class="order" data-column="ua">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-order="desc"
                                    style="cursor: pointer" data-column="ua">&#x2193;</span></div>
                    </th>
                    <th>Ip
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc"
                                                     data-action="{{ route('sort') }}" data-column="ip" class="order">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-order="desc"
                                    style="cursor: pointer" data-column="ip">&#x2193;</span></div>
                    </th>
                    <th>Reffer
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc" data-column="ref"
                                                     data-action="{{ route('sort') }}" class="order">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-column="ref" data-order="desc"
                                    style="cursor: pointer">&#x2193;</span></div>
                    </th>
                    <th>param1
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc" data-column="param1"
                                                     data-action="{{ route('sort') }}" class="order">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-order="desc" data-column="param1"
                                    style="cursor: pointer">&#x2193;</span></div>
                    </th>
                    <th>param2
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc" data-column="param2"
                                                     data-action="{{ route('sort') }}" class="order">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-order="desc" data-column="param2"
                                    style="cursor: pointer">&#x2193;</span></div>
                    </th>
                    <th>Errors
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc" data-column="error"
                                                     data-action="{{ route('sort') }}" class="order">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-order="desc" data-column="error"
                                    style="cursor: pointer">&#x2193;</span></div>
                    </th>
                    <th>Bad domains
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc" data-column="bad_domain"
                                                     data-action="{{ route('sort') }}" class="order">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-order="desc" data-column="bad_domain"
                                    style="cursor: pointer">&#x2193;</span></div>
                    </th>
                    <th>Created
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc" data-column="created_at"
                                                     data-action="{{ route('sort') }}" class="order">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-order="desc" data-column="created_at"
                                    style="cursor: pointer">&#x2193;</span></div>
                    </th>
                    <th>Updated
                        <div class="btn-group"><span style="cursor: pointer" data-order="asc" data-column="updated_at"
                                                     data-action="{{ route('sort') }}" class="order">&#x2191;</span> <span
                                    class="order" data-action="{{ route('sort') }}" data-order="desc" data-column="updated_at"
                                    style="cursor: pointer">&#x2193;</span></div>
                    </th>
                </tr>
                <tbody id="my_table">
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
