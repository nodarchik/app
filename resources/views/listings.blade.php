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
<div class="heading__udt">User Data Table</div>
<div class="body__head">
    <div class="head__name">Name</div>
    <div class="head__country">Country</div>
    <div class="head__date">Date of Birth</div>
</div>
<div class="body__main">
@unless(count($listings)==0)
@foreach($listings as $listing)
  <div class="main__info">{{$listing['name']}}</div>
  <div class="main__info">{{$listing['country']}}</div>
  <div class="main__info">{{$listing['date']}}</div>
@endforeach
@else
    <p>No listings found</p>
@endunless
</div>
</body>
</html>
