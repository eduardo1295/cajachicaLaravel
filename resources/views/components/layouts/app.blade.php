<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendible - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}" />
    <script defer  src="https://kit.fontawesome.com/6f1df6c435.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.scss','resources/js/app.js'])
</head>
<body class="antialiased bg-slate-100 dark:bg-slate-900">
<x-layouts.navigation />



<div class="container">
    @if(session('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    
        </div>
    @endif
    {{ $slot }}
</div>



</body>
</html>