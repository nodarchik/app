<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <title>Laravel</title>
</head>

<body class="main">
<div class="left">
    <div class="left__image"><img src="{{asset('background.png')}}"></div>
    <div class="left__hello">Hello Friend!</div>
    <div class="left__text">Enter your personal details and start journey with us!</div>
    <div class="left__arrow"><img src="{{asset('arrow.png')}}"></div>
</div>
<div class="right">
    <div class="right__add">Add a User</div>
    <div class="right__info">Type in your info</div>
    <form method="post" action="/listings" class="right__form">
        <input class="form__name" type="text" name="name" placeholder="Name">
        @error('name')
        <p>{{$message}}</p>
        @enderror
        <select class="form__country" name="country">
            <option value="none" selected disabled hidden>Country</option>
            <option value="georgia">Georgia</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
            <option value="germany">Germany</option>
            <option value="italy">Italy</option>
        </select>
        @error('country')
        <p>{{$message}}</p>
        @enderror
        <input class="form__date" type="text" name="date" placeholder="Date of birth">
        @error('date')
        <p>{{$message}}</p>
        @enderror
        <button class="form__button" type="submit">SAVE</button>
    </form>
    <h2>
        {{$listings['name']}}
    </h2>
    <p>
        {{$listings['country']}}
    </p>
    <p>
        {{$listings['date']}}
    </p>
</div>
</body>
</html>
