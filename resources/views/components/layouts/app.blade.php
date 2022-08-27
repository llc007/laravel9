<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? ''}}</title>
    <meta name="description" content="{{$metaDescription ?? "Default description"}}">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
{{--@include('partials.navigation')--}}
<x-layouts.navigation></x-layouts.navigation>

@if(session('status'))
    <div>
        {{session('status')}}
    </div>
@endif

{{$slot}}
</body>
</html>
