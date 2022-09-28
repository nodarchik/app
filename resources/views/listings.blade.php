<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <title>Laravel</title>
</head>
<body>
@unless(count($listings)==0)
@foreach($listings as $listing)
    <h2>
        {{$listings['name']}}
    </h2>
    <p>
        {{$listings['country']}}
    </p>
    <p>
        {{$listings['date']}}
    </p>
@endforeach
@else
    <p>No listings found</p>
@endunless
</body>
</html>
