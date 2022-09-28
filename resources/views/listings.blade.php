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
        {{$listing['name']}}
    </h2>
    <p>
        {{$listing['country']}}
    </p>
    <p>
        {{$listing['date']}}
    </p>
@endforeach
@else
    <p>No listings found</p>
@endunless
</body>
</html>
